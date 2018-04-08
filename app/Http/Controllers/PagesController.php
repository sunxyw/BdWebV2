<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function root()
    {
        $projects = Project::with('user')->orderBy('view_count', 'desc')->paginate(3);

        $user_total = app(User::class)->select(DB::raw('count(*) as id'))->get()[0];

        $more = 0;

        return view('pages.root', compact('projects', 'more'));
    }
}
