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
        <form action="{{route('admin.blogpost.store')}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            @csrf
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="postUrl">Blog Post URL</label>
                            <input type="text" name="postUrl" class="form-control m-input m-input--square" id="postUrl" aria-describedby="emailHelp" placeholder="Enter Article Title">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="sub_category_id">Subcategory</label>
                            <select class="form-control m-input m-input--square" name="sub_category_id" id="sub_category_id">
                                @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->sub_category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="title">Title</label>
                            <input  name="title" class="form-control m-input" id="title" rows="3">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="thumbnail">Thumbnail</label>
                            <input  name="thumbnail" class="form-control m-input" id="thumbnail" rows="3">
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
