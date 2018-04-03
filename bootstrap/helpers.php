<?php

function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

function make_excerpt($value, $length = 80)
{
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));
    return str_limit($excerpt, $length);
}

function isActive($route)
{
    return $route == Route::currentRouteName();
}

function getPages()
{
	return $pages = [
            [
            	'name' => '主页',
                'icon' => 'fa-home',
                'link' => route('admin.root'),
                'permission' => '',
                'active' => isActive('admin.root'),
            ],
            [
            	'name' => '用户管理',
                'icon' => 'fa-users',
                'link' => route('musers.index'),
                'permission' => 'manage_users',
                'active' => isActive('musers.index'),
            ],
            [
            	'name' => '作品管理',
                'icon' => 'fa-briefcase',
                'link' => route('mprojects.index'),
                'permission' => 'manage_projects',
                'active' => isActive('mprojects.index'),
            ],
        ];
}