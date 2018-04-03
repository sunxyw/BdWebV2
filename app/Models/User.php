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
        'name', 'email', 'password', 'introduction', 'avatar',
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

    public function position()
    {
        if ($this->hasRole('Master')) {
            return '最高管理';
        } elseif ($this->hasRole('Leader')) {
            return '组长';
        } elseif ($this->hasRole('Admin')) {
            return '管理';
        } elseif ($this->hasRole('core')) {
            return '骨干成员';
        } else {
            return '注册用户';
        }
    }
}
