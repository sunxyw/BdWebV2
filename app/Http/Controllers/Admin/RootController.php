<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Project;

class RootController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function root()
    {
    	$count = array();
    	$count['project'] = DB::table('projects')->select(DB::raw('count(*) as id'))->get();
    	$count['user'] = DB::table('users')->select(DB::raw('count(*) as id'))->get();
    	$count['click'] = DB::table('projects')->select(DB::raw('sum(view_count) as total_view'))->get();

    	$users = User::orderBy('updated_at', 'desc')->get();
    	$projects = Project::with('user')->orderBy('created_at', 'desc')->get();

        $pages = getPages();

        return view('admin.root', compact('projects', 'users', 'count', 'pages'));
    }
}
