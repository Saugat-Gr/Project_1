<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
     public function index(){
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
     }


      public function create(){
         return view('posts.create');
      }

       public function store (Request $request){
        
         $data = $request->validate([
             'name' => 'required',
             'description' => 'required'
         ]);

         $newPost = Post::create($data);
         return redirect(route('post.index'));
}

           public function edit(Post $post){
              return view('posts.edit', ['post'=> $post]);
           }

            public function update(Post $post, Request $request){

                $data = $request->validate([
                    'name' => 'required',
                    'description' => 'required'
                ]);

                $post->update($data);

                return redirect(route('post.index'))->with('success', 'Product updated Successfully.');

            }

             public function destroy(Post $post){
                      $post->delete();
                return redirect(route('post.index'))->with('success', 'Product deleted Successfully.');
                      
             }

}