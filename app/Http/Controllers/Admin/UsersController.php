<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Handlers\ImageUploadHandler;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::paginate(20);

        $pages = getPages();
        return view('admin.users.index', compact('users', 'pages'));
    }

    public function edit(User $user)
    {
        $pages = getPages();

        return view('admin.users.edit', compact('user', 'pages'));
    }

    public function update(UserRequest $request, ImageUploadHandler $uploader, User $user)
    {
        $data = $request->all();

        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 246);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);
        return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }
}
