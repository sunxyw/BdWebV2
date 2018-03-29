<?php

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    public function run()
    {
        // 所有用户 ID 数组，如：[1,2,3,4]
        $user_ids = User::all()->pluck('id')->toArray();

        $imgs = [
            'https://ooo.0o0.ooo/2017/09/17/59bdf8b0a6525.png',
            'https://i.loli.net/2018/02/13/5a82916abd385.png',
        ];

        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        $projects = factory(Project::class)
            ->times(10)
            ->make()
            ->each(function ($project, $index)
            use ($user_ids, $imgs, $faker) {
                // 从用户 ID 数组中随机取出一个并赋值
                $project->user_id = $faker->randomElement($user_ids);
                $project->img = $faker->randomElement($imgs);

                // 话题分类，同上
                $project->category_id = 9;
            });

        // 将数据集合转换为数组，并插入到数据库中
        Project::insert($projects->toArray());
    }
}