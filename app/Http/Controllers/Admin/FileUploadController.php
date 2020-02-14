<?php

namespace App\Http\Controllers\Admin;

use App\Models\FileUpload;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class FileUploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fileuploads = FileUpload::all();
        return view('admin.fileupload.index',compact('fileuploads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fileupload.create');
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
            'file_name'=>'required'
        ]);

        if($validator->passes()){
            $fileupload = new FileUpload();

            $fileupload->file_name = $request->file_name ;

            $fileupload->save();

            return redirect()->route('admin.fileupload.index')->with(['success'=>'New FileUpload Created successfully!']);
        }

        return  back()->withErrors($validator->errors()->all());
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
        $fileupload = FileUpload::find($id);
        return view('admin.fileupload.edit', compact('fileupload'));
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
            'file_name'=>'required'
        ]);

        if($validator->passes()){
            $fileupload = FileUpload::find($id);

            $fileupload->file_name = $request->file_name ;

            $fileupload->save();

            return redirect()->route('admin.fileupload.index')->with(['success'=>'New FileUpload updated successfully!']);
        }

        return  back()->withErrors($validator->errors()->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        FileUpload::find($id)->delete();
        return back()->with(['success'=>'One item deleted successfuly!']);
    }
}
