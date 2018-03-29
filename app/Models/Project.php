<?php

namespace App\Models;

class Project extends Model
{
    protected $fillable = ['name', 'summary', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'order', 'slug'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function link($params = [])
    {
        return route('projects.show', array_merge([$this->id, $this->slug], $params));
    }
}
