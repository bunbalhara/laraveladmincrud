<?php

namespace App\Http\Controllers\Admin;

use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupons = Coupon::all();
        return view('admin.coupon.index',compact('coupons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.coupon.create');
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
           'code'=>'required',
           'status'=>'required'
        ]);

        if($validator->passes()){
            $coupon = new Coupon();

            $coupon->code = $request->code;
            $coupon->status = $request->status;

            $coupon->save();

            return redirect()->route('admin.coupon.index')->with(['success'=>'New Coupon Created Successfully!']);
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
        $coupon = Coupon::find($id);
        return view('admin.coupon.edit',compact('coupon'));
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
            'code'=>'required|unique:coupons',
            'status'=>'required'
        ]);

        if($validator->passes()){
            $coupon = Coupon::find($id);

            $coupon->code = $request->code;
            $coupon->status = $request->status;

            $coupon->save();

            return redirect()->route('admin.coupon.index')->with(['success'=>'New Coupon updated Successfully!']);
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
        Coupon::find($id)->delete();
        return back()->with(['success'=>'One item deleted successfuly!']);
    }
}
