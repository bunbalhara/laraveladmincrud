<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();

        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
                'noseId'=>'required',
                'articleTitle'=>'required',
                'articleOrder'=>'required',
                'articleType'=>'required',
                'articleLong'=>'required',
                'articleNoHide'=>'required',
                'articleShort'=>'required',
                'writerId'=>'required',
            ]);

        if($validator->passes()){

            $article = new Article();
            $article->nose_id=$request->noseId;
            $article->articleTitle = $request->articleTitle;
            $article->articleOrder = $request->articleOrder;
            $article->articleShort = $request->articleShort;
            $article->articleLong = $request->articleLong;
            $article->articleNoHide = $request->articleNoHide;
            $article->writerId = $request->writerId;
            $request->articleStatus = isset($request->articleStatus);
            $article->type = $request->articleType;

            $article->save();

            return redirect()->route('admin.article.index')->with('success', 'New Article created Successfully');
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
        return view('admin.article.edit');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('admin.article.edit', compact('article'));
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

        $validator = Validator::make($request->all(), [
            'noseId'=>'required',
            'articleTitle'=>'required',
            'articleOrder'=>'required',
            'articleType'=>'required',
            'articleLong'=>'required',
            'articleNoHide'=>'required',
            'articleShort'=>'required',
            'writerId'=>'required',
        ]);

        if($validator->passes()){

            $article = Article::find($id);

            $article->nose_id=$request->noseId;
            $article->articleTitle = $request->articleTitle;
            $article->articleOrder = $request->articleOrder;
            $article->articleShort = $request->articleShort;
            $article->articleLong = $request->articleLong;
            $article->articleNoHide = $request->articleNoHide;
            $article->writerId = $request->writerId;
            $request->articleStatus = isset($request->articleStatus);
            $article->type = $request->articleType;

            $article->save();

            return redirect()->route('admin.article.index')->with('success', 'New Article updated Successfully');
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
        $article = Article::find($id);
        $article->delete();
        return back()->with(['success','One Article deleted successfully!']);
    }
}
