<?php

namespace App\Http\Controllers\Gestion;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\PostModel2;
use Illuminate\Http\Request;

class PostController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        echo view('Gestion/Post/create', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //echo request('Title');
        //echo $request->input('Slug');

        $data = array_merge($request->all(), ['Image' => '']);
        PostModel2::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PostModel2  $postModel2
     * @return \Illuminate\Http\Response
     */
    public function show(PostModel2 $postModel2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PostModel2  $postModel2
     * @return \Illuminate\Http\Response
     */
    public function edit(PostModel2 $postModel2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PostModel2  $postModel2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PostModel2 $postModel2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PostModel2  $postModel2
     * @return \Illuminate\Http\Response
     */
    public function destroy(PostModel2 $postModel2)
    {
        //
    }
}
