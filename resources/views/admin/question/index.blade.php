@extends('layouts.master')

@section('page_sub_title')
    <div class="col-sm-6">
        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
            <li class="m-nav__item m-nav__item--home">
                <a href="{{route('admin.dashboard')}}" class="m-nav__link m-nav__link--icon">
                    <i class="m-nav__link-icon la la-home"></i>
                </a>
            </li>
            <li class="m-nav__separator">-</li>
            <li class="m-nav__item">
                <a href="javascript:void(0);" class="m-nav__link">
                    <span class="m-nav__link-text">Questions</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <div class="col-sm-8">
                <select class="form-control m_selectpicker" placeholder="Status">
                    <option selected disabled hidden>Choose Status</option>
                    <option >Active</option>
                    <option >InActive</option>
                </select>
            </div>
            <div class="col-sm-2">
                <a href="javascript:void(0);" class="btn m-btn--square btn-outline-info" id="filter_btn" style="float:right;">
                    Filter
                </a>
            </div>
            <div class="col-sm-2">
                <a href="javascript:void(0);" class="btn m-btn--square btn-outline-info" id="filter_btn" style="float:right;">
                    Export to CSV
                </a>
            </div>
        </div>
    </div>
@endsection
@section('page_content')
    <div class="m-portlet m-portlet--mobile" m-portlet="true">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Questions
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <a href="{{route('admin.question.create')}}" class="btn m-btn--square btn-outline-info btn-sm m-btn m-btn--custom m-1">
                    <span>
                        <i class="la la-plus"></i>
                        <span>
                            New question
                        </span>
                    </span>
                </a>
                <ul class="m-portlet__nav">
                    <li class="m-portlet__nav-item">
                        <a href="javascript:;" m-portlet-tool="fullscreen" class="btn m-btn--square m-btn m-btn--custom btn-bizinabox btn-sm">
                            <i class="la la-expand"></i>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="m-portlet__body">
            <table class="table table-striped- table-bordered table-hover table-checkable table-center" id="datatable">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nose</th>
                    <th>Matalot</th>
                    <th>Question</th>
                    <th>Answer 1</th>
                    <th>Answer 2</th>
                    <th>Answer 3</th>
                    <th>Right Answer</th>
                    <th>Question Points</th>
                    <th>Full Answer</th>
                    <th>Question Status</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{$question->id}}</td>
                        <td>{{$question->noseId}}</td>
                        <td>{{$question->matalaId}}</td>
                        <td>{{$question->question_text}}</td>
                        <td>{{$question->question_answer_1}}</td>
                        <td>{{$question->question_answer_2}}</td>
                        <td>{{$question->question_answer_3}}</td>
                        <td>{{$question->question_right_answer}}</td>
                        <td>{{$question->question_points}}</td>
                        <td>{{$question->question_full_answer}}</td>
                        <td>{{$question->question_status}}</td>
                        <td>
                            <a href="{{route('admin.question.edit', $question->id)}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                                <i class="la la-edit"></i>
                            </a>
                            <a href="{{route('admin.question.destroy',$question->id)}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                <i class="la la-remove"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#datatable").DataTable({
                responsive: !0,
                lengthMenu: [5, 10, 25, 50],
                pageLength: 10,
            });
            $(".m_selectpicker").selectpicker();
        });
    </script>
@endsection
