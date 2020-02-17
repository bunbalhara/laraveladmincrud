<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = Subcategory::all();
        return view('admin.subcategory.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.subcategory.create',compact('categories'));
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
            'category_id'=>'required',
            'sub_category_name'=>'required',
            'sub_category_order'=>'required',
            'sub_category_status'=>'required',
        ]);

        if($validator->passes()){
            $subcategory = new Subcategory();

            $subcategory->category_id = $request->category_id;
            $subcategory->sub_category_name = $request->sub_category_name;
            $subcategory->sub_category_order = $request->sub_category_order;
            $subcategory->sub_category_status = $request->sub_category_status;
            $subcategory->enabledForFreeUsers = $request->enabledForFreeUsers;

            $subcategory->save();
            return redirect()->route('admin.subcategory.index')->with(['success'=>'New Subcategory Created successfully!']);
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subcategory = Subcategory::find($id);
        return view('admin.subcategory.edit', compact('subcategory'));
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
            'category_id'=>'required',
            'sub_category_name'=>'required',
            'sub_category_order'=>'required',
            'sub_category_status'=>'required',
        ]);

        if($validator->passes()){
            $subcategory = Subcategory::find($id);

            $subcategory->category_id = $request->category_id;
            $subcategory->sub_category_name = $request->sub_category_name;
            $subcategory->sub_category_order = $request->sub_category_order;
            $subcategory->sub_category_status = $request->sub_category_status;
            $subcategory->enabledForFreeUsers = $request->enabledForFreeUsers;

            $subcategory->save();
            return redirect()->route('admin.subcategory.index')->with(['success'=>'New Subcategory updated successfully!']);
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
        Subcategory::find($id)->delete();
        return back()->with(['success'=>'One item deleted successfuly!']);
    }
}
