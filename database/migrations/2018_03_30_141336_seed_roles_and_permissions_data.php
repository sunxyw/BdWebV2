<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SeedRolesAndPermissionsData extends Migration
{
    public function up()
    {
        // 清除缓存
        app()['cache']->forget('spatie.permission.cache');

        // 先创建权限
        Permission::create(['name' => 'manage_users']);
        Permission::create(['name' => 'destory_users']);
        Permission::create(['name' => 'manage_projects']);
        Permission::create(['name' => 'destory_projects']);

        // 创建站长角色，并赋予权限
        $master = Role::create(['name' => 'Master']);
        $master->givePermissionTo('manage_users');
        $master->givePermissionTo('destory_users');
        $master->givePermissionTo('manage_projects');
        $master->givePermissionTo('destory_projects');

        // 创建组长角色，并赋予权限
        $leader = Role::create(['name' => 'Leader']);
        $leader->givePermissionTo('manage_users');
        $leader->givePermissionTo('destory_users');
        $leader->givePermissionTo('manage_projects');
        $leader->givePermissionTo('destory_projects');

        // 创建管理角色，并赋予权限
        $admin = Role::create(['name' => 'Admin']);
        $admin->givePermissionTo('manage_users');
        $admin->givePermissionTo('manage_projects');
        $admin->givePermissionTo('destory_users');

        // 创建骨干角色，并赋予权限
        $core = Role::create(['name' => 'Core']);
        $core->givePermissionTo('manage_projects');
    }

    public function down()
    {
        // 清除缓存
        app()['cache']->forget('spatie.permission.cache');

        // 清空所有数据表数据
        $tableNames = config('permission.table_names');

        Model::unguard();
        DB::table($tableNames['role_has_permissions'])->delete();
        DB::table($tableNames['model_has_roles'])->delete();
        DB::table($tableNames['model_has_permissions'])->delete();
        DB::table($tableNames['roles'])->delete();
        DB::table($tableNames['permissions'])->delete();
        Model::reguard();
    }
}