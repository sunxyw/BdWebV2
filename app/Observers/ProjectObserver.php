<?php

namespace App\Observers;

use App\Handlers\SlugTranslateHandler;
use App\Models\Project;

// creating, created, updating, updated, saving,
// saved,  deleting, deleted, restoring, restored

class ProjectObserver
{
    public function creating(Project $project)
    {
        //
    }

    public function saving(Project $project)
    {
        // 如 slug 字段无内容，即使用翻译器对 title 进行翻译
        $project->slug = app(SlugTranslateHandler::class)->translate($project->name);
    }

    public function updating(Project $project)
    {
        //
    }
}