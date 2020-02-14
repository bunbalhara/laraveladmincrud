<?php

namespace App\Http\Controllers\Admin;

use App\Models\NosimGroup;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class NosimGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nosimGroups = NosimGroup::all();
        return view('admin.nosimgroup.index', compact('nosimGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.nosimgroup.create');
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
            'subcat_id'=>'required',
            'name'=>'required',
            'ord'=>'required'
        ]);

        if($validator->passes()){
            $nosimGroup = new NosimGroup();

            $nosimGroup->subcat_id = $request->subcat_id;
            $nosimGroup->name = $request->name;
            $nosimGroup->ord = $request->ord;

            $nosimGroup->save();

            return redirect()->route('admin.nosimGroup.index')->with(['success'=>'New NosimGroup created Successfully!']);
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
