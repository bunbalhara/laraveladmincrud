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
                        Square Input Style
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('admin.category.store')}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            @csrf
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="category_name">Category Name</label>
                            <textarea  name="category_name" class="form-control m-input" id="category_name" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="category_status">Category Status</label>
                            <select class="form-control m-input m-input--square" name="category_status" id="category_status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="category_order">Category Order</label>
                            <input type="number"  name="category_order" class="form-control m-input" id="category_order">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="category_type">Category Type</label>
                            <textarea  name="category_type" class="form-control m-input" id="category_type" rows="3"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-info">Create</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('page_script')

@endsection
