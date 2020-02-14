<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = Subscriber::all();
        return view('admin.subscriber.index',compact('subscribers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.subscriber.create');
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
            'email'=>'required',
            'password'=>'required',
            'access_to_cateogry'=>'required',
            'class_id'=>'required',
        ]);

        if($validator->passes()){
            $subscriber = new Subscriber();

            $subscriber->email = $request->email;
            $subscriber->password = $request->password;
            $subscriber->full_name = $request->full_name;
            $subscriber->phone = $request->phone;
            $subscriber->city = $request->city;
            $subscriber->access_to_category = $request->access_to_category;
            $subscriber->class_id = $request->class_id;
            $subscriber->subscriber_type = $request->subscriber_type;
            $subscriber->invoiceaddress = $request->invoiceaddress;
            $subscriber->cc_from_tranzila = $request->cc_from_tranzila;
            $subscriber->active = $request->active;
            $subscriber->reg_date = $request->reg_date;
            $subscriber->last_seen = $request->last_seen;
            $subscriber->lowprofilecode = $request->lowprofilecode;
            $subscriber->coupon = $request->coupon;
            $subscriber->level = $request->level;
            $subscriber->testsType1PassedAmount = $request->testsType1PassedAmount;
            $subscriber->testsType2PassedAmount = $request->testsType2PassedAmount;
            $subscriber->articlesWatchedAmount = $request->articlesWatchedAmount;
            $subscriber->videosWatchedAmount = $request->videosWatchedAmount;
            $subscriber->upgradeLevel = $request->upgradeLevel;
            $subscriber->upgradeTime = $request->upgradeTime;
            $subscriber->upgradeLowProfileCode = $request->upgradeLowProfileCode;
            $subscriber->verificationHash = $request->verificationHash;

            $subscriber->save();

            return redirect()->route('admin.subscriber.index')->width(['success'=>'New Subscriber Created successfully!']);
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
