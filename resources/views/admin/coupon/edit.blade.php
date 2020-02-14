@extends('layouts.master')

@section('page_sub_title')
@endsection

@section('page_content')
    <div class="m-portlet m-portlet--tab">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                    <h3 class="m-portlet__head-text">
                        Edit Coupon
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('admin.coupon.update', $coupon->id)}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            @csrf
            {{method_field('PATCH')}}
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="code">Coupon Code</label>
                            <textarea  name="code" class="form-control m-input" id="code" rows="3">{{$coupon->code}}</textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="status">Coupon Status</label>
                            <select class="form-control m-input m-input--square" name="status" id="status">
                                <option value="1" selected>Active</option>
                                <option value="0"  {{$coupon->status?"":"selected"}}>Inactive</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-info">Update</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('page_script')

@endsection
