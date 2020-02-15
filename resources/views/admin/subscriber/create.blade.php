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
                        Create New Subscriber
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('admin.subscriber.store')}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            @csrf
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">

                        <div class="form-group m-form__group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control m-input m-input--square" id="email" aria-describedby="emailHelp" placeholder="Enter Email">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="password">Password</label>
                            <input type="text" name="password" class="form-control m-input m-input--square" id="password" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="full_name">Full Name</label>
                            <input type="text" name="full_name" class="form-control m-input m-input--square" id="full_name" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="phone">Phone Number</label>
                            <input type="number" name="phone" class="form-control m-input m-input--square" id="phone" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="city">City</label>
                            <input type="text" name="city" class="form-control m-input m-input--square" id="city" aria-describedby="emailHelp" placeholder="Enter Password">
                        </div>


                        <div class="form-group m-form__group">
                            <label for="noseId">Select Nose</label>
                            <select class="form-control m-input m-input--square" name="noseId" id="noseId">
                                <option value="1">Nose 1</option>
                                <option value="2">Nose 2</option>
                            </select>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="articleOrder">Article Order</label>
                            <input type="number" name="articleOrder" class="form-control m-input m-input--square" id="articleOrder" aria-describedby="emailHelp" placeholder="Enter Article Title">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="articleType">Article Type</label>
                            <select class="form-control m-input m-input--square" name="articleType" id="articleType">
                                <option value="1">aa</option>
                                <option value="2">bb</option>
                                <option value="3">cc</option>
                                <option value="4">dd</option>
                                <option value="5">ee</option>
                            </select>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="writerId">Article Status</label>
                            <input type="number" name="writerId" class="form-control m-input m-input--square" id="writerId" aria-describedby="emailHelp" placeholder="Enter Article Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="articleLong">Article Long</label>
                            <textarea  name="articleLong" class="form-control m-input" id="articleLong" rows="3"></textarea>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="articleNoHide">Article No Hide</label>
                            <textarea  name="articleNoHide" class="form-control m-input" id="articleNoHide" rows="3"></textarea>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="articleShort">Article Long</label>
                            <textarea  name="articleShort" class="form-control m-input" id="articleShort" rows="3"></textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <input type="checkbox" name="articleStatus" class=" m-input m-input--square" id="articleStatus" aria-describedby="emailHelp" placeholder="Enter Article Title">
                            <label for="articleStatus">Article Status</label>
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
