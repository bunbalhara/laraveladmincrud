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
                        Create New Question
                    </h3>
                </div>
            </div>
        </div>

        <!--begin::Form-->
        <form action="{{route('admin.question.store')}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            @csrf
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="noseId">Select Nose</label>
                            <select class="form-control m-input m-input--square" name="noseId" id="noseId">
                                <option value="1">Nose 1</option>
                                <option value="2">Nose 2</option>
                                <option value="3">Nose 3</option>
                                <option value="4">Nose 4</option>
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="matalaId">Select Matalot</label>
                            <select class="form-control m-input m-input--square" name="matalaId" id="matalaId">
                                <option value="1">Matalot 1</option>
                                <option value="2">Matalot 2</option>
                                <option value="3">Matalot 3</option>
                                <option value="4">Matalot 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="quesion_right_answer">Question Right Answer</label>
                            <select class="form-control m-input m-input--square" name="quesion_right_answer" id="quesion_right_answer">
                                <option value="1">Answer 1</option>
                                <option value="2">Answer 2</option>
                                <option value="3">Answer 3</option>
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="question_status">Question Right Answer</label>
                            <select class="form-control m-input m-input--square" name="question_status" id="question_status">
                                <option value="1">Question Status 1</option>
                                <option value="2">Question Status 2</option>
                            </select>
                        </div>

                        <div class="form-group m-form__group">
                            <label for="question_points">Question Points</label>
                            <input type="text" name="question_points" class="form-control m-input m-input--square" id="question_points" aria-describedby="emailHelp" placeholder="Enter Question Points">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group m-form__group">
                        <label class="text-left">Question</label>
                        <div class="col-12">
                            <div class="summernote"></div>
                        </div>
                    </div>

                    <div class="form-group m-form__group">
                        <label class="text-left">Question</label>
                        <div class="col-12">
                            <div class="summernote"></div>
                        </div>
                    </div>

                    <div class="form-group m-form__group">
                        <label class="text-left">Question</label>
                        <div class="col-12">
                            <div class="summernote"></div>
                        </div>
                    </div>

                    <div class="form-group m-form__group">
                        <label class="text-left">Question</label>
                        <div class="col-12">
                            <div class="summernote"></div>
                        </div>
                    </div>

                    <div class="form-group m-form__group">
                        <label class="text-left">Question</label>
                        <div class="col-12">
                            <div class="summernote"></div>
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
    <script src="{{asset('assets/vendors/header/actions.js')}}" type="text/javascript"></script>
@endsection
