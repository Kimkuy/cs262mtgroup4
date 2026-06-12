<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function createPost(Request $request){
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|max:2048',
            'news_type' => 'required|in:cambodia,global',
        ]);

        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);
        $incomingFields['user_id'] = auth()->id(); 
        $incomingFields['news_type'] = $incomingFields['news_type'];

        if ($request->hasFile('image')) {
        $incomingFields['image'] = $request->file('image')->store('post-images', 'public');
    }

        Post::create($incomingFields);
        return redirect('/dashboard');
    }

    public function showEditScreen(Post $post){
        if(auth()->user()->id !== $post['user_id']){ 
            return redirect('/');
        }
        return view('edit-post', ['post' => $post]);
    }

    public function updatePost(Post $post, Request $request){
        if(auth()->user()->id !== $post['user_id']){ 
            return redirect('/dashboard');
        }
        $incomingFields = $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        $incomingFields['title'] = strip_tags($incomingFields['title']);
        $incomingFields['body'] = strip_tags($incomingFields['body']);

         if ($request->hasFile('image')) {
        if ($post->image) {
            \Storage::disk('public')->delete($post->image);
        }
        $incomingFields['image'] = $request->file('image')->store('post-images', 'public');
    }

        $post->update($incomingFields);
        return redirect('/dashboard');
    }

    public function deletePost(Post $post){
        if (auth()->user()->id === $post['user_id']) {
        if ($post->image) {
            \Storage::disk('public')->delete($post->image);
        }
        $post->delete();
    }
        return redirect('/dashboard');
    }

public function showTheNews() {
    $posts = Post::latest()->get(); 
    
    return view('cambodia', compact('posts'));
}
}