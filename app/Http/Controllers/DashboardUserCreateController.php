<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\userRequest;
use Illuminate\Http\Request;

class DashboardUserCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
return view ('Dashboard.user');
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
        $validateData = $request->validate([
            'kegiatan' => 'required|max:255',
            'tanggal' => 'required|unique:posts',
            'jam' =>'required',
            'dokumentasi'=>'file|required',
        ]);

        userRequest::create($validateData);
        return redirect ('/Dashboard')->with('success','New request has been added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
