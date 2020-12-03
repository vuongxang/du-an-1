<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Post::paginate(5);
        return view('backend.posts.index',compact('models'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $models = new Post();
        $models->fill($request->all());
        $models->image = str_replace('http://localhost', 'http://127.0.0.1:8000',$models->image);
        $models->save();
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Post::find($id);
        
        return view('backend.posts.edit',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $model = Post::find($id);
        $model->fill($request->all());
        $model->image = str_replace('http://localhost', 'http://127.0.0.1:8000',$model->image);
        $model->save();
        // echo "<pre>";
        // var_dump($model); die;
        return redirect()->route('post.index',$model->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Post::find($id);
        $model->delete();
        return redirect()->route('post.index');
    }

    public function postPage(){
        $models = Post::paginate(8);
        return view('frontend.pages.posts',compact('models'));
    }
}
