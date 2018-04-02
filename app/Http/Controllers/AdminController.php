<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;;

class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function root()
    {
    	$projects = DB::table('projects')->select(DB::raw('count(*) as id'))->get();
    	$users = DB::table('users')->select(DB::raw('count(*) as id'))->get();
    	$click = DB::table('projects')->select(DB::raw('sum(view_count) as total_view'))->get();

        return view('admin.root', compact('projects', 'users', 'click'));
    }
}
