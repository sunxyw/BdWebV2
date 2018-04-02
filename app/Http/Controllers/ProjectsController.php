<?php

namespace App\Http\Controllers;

use App\Handlers\ImageUploadHandler;
use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function index()
    {
        $projects = Project::with('user')->get();
        if (!empty($_GET['author'])) {
            $projects = $projects = Project::with('user')->where('user_id', $_GET['author'])->get();
        }
        $users = User::all();
        return view('projects.index', compact('projects', 'users'));
    }

    public function show(Request $request, Project $project)
    {
        // URL 矫正
        if (!empty($project->slug) && $project->slug != $request->slug) {
            return redirect($project->link(), 301);
        }

        $project->increment('view_count');

        return view('projects.show', compact('project'));
    }

    public function create(Project $project)
    {
        $action = '新建作品';
        $users = User::all();
        return view('projects.create_and_edit', compact('project', 'action', 'users'));
    }

    public function store(ProjectRequest $request, ImageUploadHandler $uploader, User $user)
    {
        $data = $request->all();

        if ($request->img) {
            $result = $uploader->save($request->img, 'projects', $user->id);
            if ($result) {
                $data['img'] = $result['path'];
            }
        }

        $project = Project::create($data);
        return redirect()->to($project->link())->with('success', '发布成功');
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);
        $action = '编辑 ' . $project->name;
        $users = User::all();
        return view('projects.create_and_edit', compact('project', 'action', 'users'));
    }

    public function update(ProjectRequest $request, Project $project, ImageUploadHandler $uploader, User $user)
    {
        $this->authorize('update', $project);
        $data = $request->all();

        if ($request->img) {
            $result = $uploader->save($request->img, 'projects', $user->id);
            if ($result) {
                $data['img'] = $result['path'];
            }
        }

        $project->update($data);

        return redirect()->to($project->link())->with('success', '修改成功');
    }

    public function destroy(Project $project)
    {
        $this->authorize('destroy', $project);
        $project->delete();

        return redirect()->route('projects.index')->with('success', '删除成功');
    }

    public function ban(Project $project)
    {
        $this->authorize('ban', $project);

        return redirect()->route('projects.show')->with('success', '删除成功');
    }
}