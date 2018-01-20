<?php

namespace App\Http\Controllers;

use App\PostType;
use Illuminate\Http\Request;

class PostTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PostType $postType)
    {
        return view('posttype')->with('type', $postType);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PostType $postType)
    {
        return view('posttype.create')->with('postType', $postType);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, PostType $postType)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:post_types,slug',
            'content' => 'required',
        ]);
        $postType->create($request->all());
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function show(PostType $postType)
    {
        return view('posttype.edit')->with('postType', $postType);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function edit(PostType $postType)
    {
        return view('posttype.edit')->with('posttype', $postType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostType $postType)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:posts',
            'content' => 'required',
        ]);
        $postType->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PostType  $postType
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostType $postType)
    {
        //
    }
}
