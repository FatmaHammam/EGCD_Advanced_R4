<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();                 //select * from Users
        return view('admin/users', compact("users"));
    }

    public function create()
    {
        return view('admin.addUser');
    }

    public function store(Request $request): RedirectResponse
    {

        $messages = [
            'name.required' => 'Name is required',
            'name.string' => 'Name Should be string',
            'email.required' => 'Email is required',
            'email.unique' => 'Email must be unique'
        ];
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|unique:Users|max:255'
        ], $messages);

        $new_user = new User();
        $new_user->name = $request->name;
        $new_user->email = $request->email;
        $new_user->password = $request->password;
        $new_user->save();
        //return "Data Added Succ";
        return redirect('admin/users');
    }

    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.edituser', compact('user'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('admin/users');
    }

    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.show2', compact('user'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        User::where('id', $id)->delete();                //softdelete
        //User::where('id', $id)->forceDelete();              //force delete
        return redirect('admin/users');
    }

    public function showDeleted()
    {
        $users = User::onlyTrashed()->get();
        return view('users.trashedCusts', compact('users'));
    }

    public function restore(Request $request): RedirectResponse
    {
        $id = $request->id;
        User::where('id', $id)->restore();
        return redirect('User/All');
    }

    public function user_phone()
    {
        $phone = User::find(4)->phone;
        echo "phone number is: " . $phone->phone_no;
    }
    public function user_posts(string $id)
    {
        $user_posts = User::find($id)->posts;
        return view('posts.user_posts', compact('user_posts'));
    }
}
