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
                    <span class="m-nav__link-text">Articles</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="col-sm-6">
        <div class="row">
            <form class="col-sm-8" method="POST" action="{{route('admin.article.filter')}}">
                @csrf
                <div class="row">
                    <div class="col-sm-5">
                        <select class="form-control m_selectpicker" placeholder="Filter Opsion" name="filter_option">
                            <option value="nose">By Nose Name </option>
                            <option value="status">By Article Status </option>
                            <option value="type">By Article Type </option>
                        </select>
                    </div>
                    <div class="col-sm-5">
                        <input class="form-control" placeholder="Enter a Filter Value" name="filter_value" required/>
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" class="btn m-btn--square btn-outline-info" id="filter_btn" style="float:right;">
                            Filter
                        </button>
                    </div>
                </div>
            </form>
            <div class="col-sm-4 pull-right">
                <a href="{{route('admin.article.export')}}" class="btn m-btn--square btn-outline-info" id="filter_btn" style="float:right;">
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
                        Categories
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
                <a href="{{route('admin.article.create')}}" class="btn m-btn--square btn-outline-info btn-sm m-btn m-btn--custom m-1">
                    <span>
                        <i class="la la-plus"></i>
                        <span>
                            New Article
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
                    <th>Nose Id</th>
                    <th>Article Title</th>
                    <th>Article Short</th>
                    <th>Article Long</th>
                    <th>Article NoHide</th>
                    <th>Article Date</th>
                    <th>Writer Id</th>
                    <th>Article Order</th>
                    <th>Article Status</th>
                    <th>Type</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td>{{$article->nosim->nose_name}}</td>
                        <td>{{$article->articleTitle}}</td>
                        <td>{{$article->articleShort}}</td>
                        <td>{!!$article->articleLong!!}</td>
                        <td>{{$article->articleNoHide}}</td>
                        <td>{{$article->articleDate}}</td>
                        <td>{{$article->writerId}}</td>
                        <td>{{$article->articleOrder}}</td>
                        <td>{{$article->articleStatus}}</td>
                        <td>{{$article->type}}</td>
                        <td class="text-center">
                            <div class="row ml-2">
                                <a href="{{route('admin.article.edit', $article->id)}}" class="m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Edit">
                                    <i class="la la-edit"></i>
                                </a>
                                <form method="POST" action="{{route('admin.article.destroy', $article->id)}}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="delete-item m-portlet__nav-link btn m-btn m-btn--hover-brand m-btn--icon m-btn--icon-only m-btn--pill" title="Delete">
                                        <i class="la la-remove"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="m_modal_6" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Are you sure?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        Do you really want to delete it?
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                    <button type="button" id="delet-confirm" class="btn btn-danger">Confirm</button>
                </div>
            </div>
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

            $(document).on('click','.delete-item', function (e) {
                e.preventDefault();
                let form = $(this).parents('form');
                $('#m_modal_6').modal('show');
                $('#delet-confirm').click(function () {
                    form.submit();
                })
            })
        });
    </script>
@endsection
