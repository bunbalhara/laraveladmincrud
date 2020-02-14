<?php

namespace App\Http\Controllers\Admin;

use App\Models\Nosim;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NosimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noses = Nosim::all();

        return view('admin.nosim.index',compact('noses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nosim.create');
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
           'nose_sub_category_id'=>'required',
           'nose_group_id'=>'required',
           'nose_name'=>'required',
           'nose_status'=>'required',
           'nose_order'=>'required',
        ]);

        if($validator->passes()){
            $nose = new Nosim();
            $nose->nose_sub_category_id=$request->nose_sub_category_id;
            $nose->nose_group_id=$request->nose_group_id;
            $nose->nose_name=$request->nose_name;
            $nose->nose_status=$request->nose_status;
            $nose->nose_order=$request->nose_order;
            $nose->save();

            return redirect()->route('admin.nosim.index')->with(['success'=>'New Nosim created Successfully!']);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
