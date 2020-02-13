@extends('layouts.master')

@section('page_sub_title')

@endsection
@section('page_content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        <i class="la la-gear"></i> &nbsp;Dashboard
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            WELCOME!
        </div>
    </div>
@endsection
@section('page_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("#m_table_1").DataTable({
                responsive: !0,
                lengthMenu: [5, 10, 25, 50],
                pageLength: 10,
            });
        });
    </script>
@endsection
