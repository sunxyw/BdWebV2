<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password', 'introduction', 'avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function projects()
    {
        return $this->hasMany('App\Models\Project');
    }

    public function position($returnAll = false)
    {
        $list = ['最高管理', '组长', '管理', '骨干成员', '注册用户'];
        if ($returnAll) {
            return $list;
        }
        if ($this->hasRole('Master')) {
            return $list[0];
        } elseif ($this->hasRole('Leader')) {
            return $list[1];
        } elseif ($this->hasRole('Admin')) {
            return $list[2];
        } elseif ($this->hasRole('core')) {
            return $list[3];
        } else {
            return $list[4];
        }
    }
}
