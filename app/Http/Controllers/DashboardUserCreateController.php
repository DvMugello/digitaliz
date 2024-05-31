<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardUserCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    return view ('Dashboard.user.index',[
        'title'=>'My Dashboard',
        'posts'=> Post::where('user_id',auth()->user()->id)->get()
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('Dashboard.user.create',[
            'title'=>'Create Post',
            'categories'=> Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return request()->all();
        $validateData = $request->validate([
            'unit'=>'required',
            'telpon'=>'required',
            'kegiatan' => 'required|max:255',
            'tanggal' => 'required',
            'jam' =>'required',
            'category_id'=>'required'

        ]);
            $validateData ['user_id']=auth()->user()->id;
        Post::create($validateData);

        return redirect('/Dashboard/user')->with('success','request has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view ('Dashboard.user.show',[
            'title'=>'My Post',
            'post'=>$post,
            'posts'=> Post::where('user_id',auth()->user()->id)->get()

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view ('Dashboard.user.update',[
            'title'=> 'Edit Post',
            'post'=>$post,
            'categories'=> Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $rules = [
            'unit'=>'required',
            'telpon'=>'required',
            'kegiatan' => 'required|max:255',
            'tanggal' => 'required',
            'jam' =>'required',
            'category_id'=>'required'

        ];

        // if($request->slug != $post->slug){
        //     $rules['slug'] = 'required|unique:posts';
        // }

        $validateData = $request->validate($rules);
        $validateData ['user_id']=auth()->user()->id;
        // $validateData ['excerpt']=Str::limit(strip_tags($request->body),200);

        Post::where('id' , $post->id)
        ->update($validateData);

        return redirect ('/Dashboard/user')->with('success','post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);

        return redirect ('/Dashboard/user')->with('success','post has been deleted');
    }
}
