<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;

class ProjectPolicy extends Policy
{
    public function update(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->can('manage_projects');
    }

    public function destroy(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->can('destroy_projects');
    }

    public function ban(User $user, Project $project)
    {
        return $user->can('manage_projects');
    }
}
