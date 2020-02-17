<?php

namespace App\Http\Controllers\Admin;

use App\Models\BlogPost;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BlogPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogposts = BlogPost::all();
        return view('admin.blogpost.index',compact('blogposts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subcategories = Subcategory::all();
        return view('admin.blogpost.create',compact('subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'postUrl'=>'required',
            'sub_category_id'=>'required',
            'title'=>'required',
            'thumbnail'=>'required'
        ]);

        if($validator->passes()){
            $blogpost = new BlogPost();

            $blogpost->postUrl=$request->postUrl;
            $blogpost->sub_category_id = $request->sub_category_id;
            $blogpost->title= $request->title;
            $blogpost->thumbnail = $request->thumbnail;

            $blogpost->save();

            return redirect()->route('admin.blogpost.index')->with('success','New Blog Post created Successfully!');
        }

        return back()->withErrors($validator->errors()->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.blogpost.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogpost = BlogPost::find($id);

        return view('admin.blogpost.edit', compact('blogpost'));
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
        $validator = Validator::make($request->all(),[
            'postUrl'=>'required',
            'sub_category_id'=>'required',
            'title'=>'required',
            'thumbnail'=>'required'
        ]);

        if($validator->passes()){
            $blogpost = BlogPost::find($id);

            $blogpost->postUrl=$request->postUrl;
            $blogpost->sub_category_id = $request->sub_category_id;
            $blogpost->title= $request->title;
            $blogpost->thumbnail = $request->thumbnail;

            $blogpost->save();

            return redirect()->route('admin.blogpost.index')->with('success','New Blog Post updated Successfully!');
        }

        return back()->withErrors($validator->errors()->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BlogPost::find($id)->delete();
        return back()->with(['success'=>'One item deleted successfuly!']);
    }
}
