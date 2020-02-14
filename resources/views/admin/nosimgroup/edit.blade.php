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
                        Edit Nosim Group
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('admin.nosimGroup.update', $group->id)}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            @csrf
            {{method_field('PATCH')}}
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group m-form__group">
                            <label for="subcat_id">Subcategory</label>
                            <select class="form-control m-input m-input--square" name="subcat_id" id="subcat_id">
                                @foreach([1,2,3,4] as $item)
                                    <option value="{{$item}}" {{$item==$group->subcat_id?"selected":""}}>Subcategory {{$item}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="name">Nosim Group Name</label>
                            <textarea  name="name" class="form-control m-input" id="name" rows="3">{{$group->name}}</textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="ord">Order</label>
                            <input value="{{$group->ord}}" type="number"  name="ord" class="form-control m-input" id="ord" >
                        </div>
                    </div>
                </div>
            </div>
            <div class="m-portlet__foot m-portlet__foot--fit">
                <div class="m-form__actions">
                    <button type="submit" class="btn btn-info">Save Change</button>
                    <button type="reset" class="btn btn-secondary">Clear</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('page_script')

@endsection
