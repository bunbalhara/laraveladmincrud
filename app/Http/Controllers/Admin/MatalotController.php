<?php

namespace App\Http\Controllers\Admin;

use App\Models\Matalot;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class MatalotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matalots = Matalot::all();
        return view('admin.matalot.index',compact('matalots'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.matalot.create');
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
            'title'=>'required'
        ]);

        if($validator->passes()){
            $matalot = new Matalot();

            $matalot->matalaTitle = $request->title;

            $matalot->save();

            return redirect()->route('admin.matalot.index')->with(['success'=>'New Matalot Created, Successfully!']);
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
        $matalot = Matalot::find($id);
        return view('admin.matalot.edit', compact('matalot'));
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
            'title'=>'required'
        ]);

        if($validator->passes()){
            $matalot = Matalot::find($id);

            $matalot->matalaTitle = $request->title;

            $matalot->save();

            return redirect()->route('admin.matalot.index')->with(['success'=>'New Matalot updated Successfully!']);
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
        Matalot::find($id)->delete();
        return back()->with(['success'=>'One item deleted successfuly!']);
    }
}
