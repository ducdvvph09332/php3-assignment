<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkLogin')->only('index', 'create', 'show', 'edit', 'update', 'destroy');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authorize('view-any', User::class);
        $users = User::with('role')->orderBy('id', 'DESC')->paginate(5);
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check()) {
            $this->authorize('create', User::class);
        }
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {
        if (Auth::check()) {
            $this->authorize('create', User::class);
        }
        $user = new User;
        $user->fill($request->all());
        $user->password = Hash::make($request->password);
        if ($user->save()) {
            if (Auth::check()) {
                return redirect()->route('users.index')->with('notify', 'Thêm tài khoản thành công!');
            } else {
                return redirect()->route('login')->with('notify', 'Bạn đã đăng ký thành công, vui lòng đăng nhập!');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);
        $roles = Role::all();
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserStoreRequest $request, User $user)
    {
        $this->authorize('update', $user);
        if ($user->update($request->all())) {
            return redirect()->route('users.index')->with('notify', 'Sửa tài khoản thành công');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        if ($user) {
            $comment = Comment::where('user_id', $user->id);
            $comment->delete();
            $user->delete();
        }
        return redirect()->route('users.index')->with('notify', 'Xóa tài khoản thành công');
    }
}
