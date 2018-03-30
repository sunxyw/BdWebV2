<?php

namespace App\Http\Controllers;

use App\Models\Project;

class PagesController extends Controller
{
    public function root()
    {
        $projects = Project::with('user')->orderBy('view_count', 'desc')->paginate(3);

        return view('pages.root', compact('projects'));
    }
}
