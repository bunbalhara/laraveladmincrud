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
                        Create New Nosim
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('admin.nosim.store')}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            @csrf
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group m-form__group">
                            <label for="nose_sub_category_id">Select Subcategory</label>
                            <select class="form-control m-input m-input--square" name="nose_sub_category_id" id="nose_sub_category_id">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->sub_category_name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="nose_group_id">Nosim Group</label>
                            <select class="form-control m-input m-input--square" name="nose_group_id" id="nose_group_id">
                                @foreach($noseGroups as $noseGroup)
                                    <option value="{{$noseGroup->id}}">{{$noseGroup->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="nose_name">Nosim Name</label>
                            <textarea  name="nose_name" class="form-control m-input" id="nose_name" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="nose_status">Nosim Status</label>
                            <select class="form-control m-input m-input--square" name="nose_status" id="nose_status">
                                <option value="1">Status 1</option>
                                <option value="0">Status 2</option>
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="nose_order">Nosim Order</label>
                            <input type="number"  name="nose_order" class="form-control m-input" id="nose_order" >
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
