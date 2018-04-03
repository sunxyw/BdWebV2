<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Handlers\ImageUploadHandler;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        /**if (Auth::user()->can('manage_users')) {
            return redirect('admin.root')->with('error', '权限不足！需要: [管理]或以上');
        }*/
        dd(Auth::user());
    }

    public function index()
    {
        $users = User::paginate(20);

        $pages = getPages();
        return view('admin.users.index', compact('users', 'pages'));
    }

    public function edit($user_id)
    {
        $pages = getPages();

        $user = User::where('id', $user_id)->get()[0];

        $positions = app(User::class)->position(true);

        return view('admin.users.edit', compact('user', 'positions', 'pages'));
    }

    public function update(UserRequest $request, ImageUploadHandler $uploader, $user_id)
    {
        $data = $request->all();

        $user = User::where('id', $user_id)->get()[0];

        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 246);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);
        return redirect()->route('musers.edit', $user->id)->with('success', '个人资料更新成功！');
    }
}
