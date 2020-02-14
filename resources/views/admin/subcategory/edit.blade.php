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
                        Edit Subcategory
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('admin.subcategory.update', $subcategory->id)}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            @csrf
            {{method_field('PATCH')}}
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group m-form__group">
                            <label for="category_id">Select Cateogory</label>
                            <select class="form-control m-input m-input--square" name="category_id" id="category_id">
                                @foreach([1,2,3,4,] as $item)
                                    <option value="{{$item}}" {{$item==$subcategory->category_id?"selected":""}}>Category {{$item}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="sub_category_name">Subcategory Name</label>
                            <input value="{{$subcategory->sub_category_name}}" type="text" name="sub_category_name" class="form-control m-input m-input--square" id="sub_category_name" aria-describedby="emailHelp" placeholder="Enter Subcategory Name">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="sub_category_order">Subcategory Order</label>
                            <input value="{{$subcategory->sub_category_order}}" type="number" name="sub_category_order" class="form-control m-input m-input--square" id="sub_category_order" aria-describedby="emailHelp" placeholder="Enter Subcategory Order">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="sub_category_status">Article Type</label>
                            <select class="form-control m-input m-input--square" name="sub_category_status" id="sub_category_status">
                                <option value="1" selected>Subcategory status Active</option>
                                <option value="0" {{$subcategory->sub_category_status?"":"selected"}}>Subcategory status Inactive</option>
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="enabledForFreeUsers">Enabled for free users</label>
                            <select class="form-control m-input m-input--square" name="enabledForFreeUsers" id="enabledForFreeUsers">
                                <option value="1" selected>Enabled</option>
                                <option value="0" {{$subcategory->enabledForFreeUsers?"":"selected"}}>Disabled</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-info">Save Changes</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('page_script')

@endsection
