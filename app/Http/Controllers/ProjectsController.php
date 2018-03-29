<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index(User $author)
    {
        $projects = Project::with('user')->paginate(6);
        $users = User::all();
        return view('projects.index', compact('projects', 'users'));
    }

    public function show(Request $request, Project $project)
    {
        // URL 矫正
        if (!empty($project->slug) && $project->slug != $request->slug) {
            return redirect($project->link(), 301);
        }

        return view('projects.show', compact('project'));
    }

    public function create(Project $project)
    {
        return view('projects.create_and_edit', compact('project'));
    }

    public function store(ProjectRequest $request)
    {
        $project = Project::create($request->all());
        return redirect()->to($project->link())->with('message', 'Created successfully.');
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        return view('projects.create_and_edit', compact('project'));
    }

    public function update(ProjectRequest $request, Project $project)
    {
        $this->authorize('update', $project);
        $project->update($request->all());

        return redirect()->to($project->link())->with('message', 'Updated successfully.');
    }

    public function destroy(Project $project)
    {
        $this->authorize('destroy', $project);
        $project->delete();

        return redirect()->route('projects.index')->with('message', 'Deleted successfully.');
    }
}