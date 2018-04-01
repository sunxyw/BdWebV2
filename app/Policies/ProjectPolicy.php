<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Project;

class ProjectPolicy extends Policy
{
    public function update(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->hasRole('Maintainer');
    }

    public function destroy(User $user, Project $project)
    {
        return $project->user_id == $user->id || $user->hasRole('Founder');
    }
}
