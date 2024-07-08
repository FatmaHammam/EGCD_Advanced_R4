<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::get();                 //select * from Posts
        return view('posts/all', compact("posts"));
    }

    public function create()
    {
        return view('admin.addPost');
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
            'email' => 'required|unique:Posts|max:255'
        ], $messages);

        $new_Post = new Post();
        $new_Post->name = $request->name;
        $new_Post->email = $request->email;
        $new_Post->password = $request->password;
        $new_Post->save();
        //return "Data Added Succ";
        return redirect('admin/Posts');
    }

    public function edit(string $id)
    {
        $Post = Post::findOrFail($id);
        return view('admin.editPost', compact('Post'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
        Post::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect('admin/Posts');
    }

    public function show(string $id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show2', compact('post'));
    }

    public function destroy(Request $request): RedirectResponse
    {
        $id = $request->id;
        Post::where('id', $id)->delete();                //softdelete
        //Post::where('id', $id)->forceDelete();              //force delete
        return redirect('admin/Posts');
    }

    public function showDeleted()
    {
        $Posts = Post::onlyTrashed()->get();
        return view('Posts.trashedCusts', compact('Posts'));
    }

    public function restore(Request $request): RedirectResponse
    {
        $id = $request->id;
        Post::where('id', $id)->restore();
        return redirect('Post/All');
    }

    public function user_posts(string $id)
    {
        $user_posts = User::find($id)->posts;
        return view('posts.user_posts', compact('user_posts'));
    }
}
