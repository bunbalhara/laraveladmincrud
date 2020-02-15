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
                            <input type="number" name="question_points" class="form-control m-input m-input--square" id="question_points" aria-describedby="emailHelp" placeholder="Enter Question Points">
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <br><label for="question-text" class="mt-2"><strong>Question Text</strong></label>
                    <textarea id="question-text" name="question_text"></textarea>
                    <br><label for="answer-1"  class="mt-2"><strong>Question Answer One</strong></label>
                    <textarea id="answer-1" name="question_answer_1" ></textarea>
                    <br><label for="answer-2"  class="mt-2"><strong>Question Answer Two</strong></label>
                    <textarea id="answer-2" name="question_answer_2"></textarea>
                    <br><label for="answer-3"  class="mt-2"><strong>Question Answer Three</strong></label>
                    <textarea id="answer-3" name="question_answer_3"></textarea>
                    <br><label for="right-answer"  class="mt-2"><strong>Question Right Answer</strong></label>
                    <textarea id="right-answer" name="question_full_answer"></textarea>
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

@section('page_scripts')
    <script src="{{asset('assets/vendors/header/actions.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/vendors/tinymce.min.js')}}" type="text/javascript"></script>
    <script>
        AddTinyMce();
        function AddTinyMce(){
            tinymce.init({
                selector: 'textarea#question-text',
                height: 350,
                theme: 'modern',
                plugins: [
                    'advlist autolink autosave lists codesample link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table directionality',
                    'emoticons paste textpattern imagetools textcolor colorpicker autoresize'
                ],
                toolbar1: 'fontselect | fontsizeselect | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | codesample jsplusEditTag | emoticons | link unlink image jsplus_templates',
                remove_script_host : false,
                convert_urls : true,
                image_title: true,
                automatic_uploads: true,
                relative_urls : false,
                images_upload_url: '{{route('uploadImage')}}',
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                    };
                    input.click();
                },
            });

            tinymce.init({
                selector: 'textarea#answer-1',
                height: 350,
                theme: 'modern',
                plugins: [
                    'advlist autolink autosave lists codesample link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table directionality',
                    'emoticons paste textpattern imagetools textcolor colorpicker autoresize'
                ],
                toolbar1: 'fontselect | fontsizeselect | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | codesample jsplusEditTag | emoticons | link unlink image jsplus_templates',
                remove_script_host : false,
                convert_urls : true,
                image_title: true,
                automatic_uploads: true,
                relative_urls : false,
                images_upload_url: '{{route('uploadImage')}}',
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                    };
                    input.click();
                },
            });

            tinymce.init({
                selector: 'textarea#answer-2',
                height: 350,
                theme: 'modern',
                plugins: [
                    'advlist autolink autosave lists codesample link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table directionality',
                    'emoticons paste textpattern imagetools textcolor colorpicker autoresize'
                ],
                toolbar1: 'fontselect | fontsizeselect | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | codesample jsplusEditTag | emoticons | link unlink image jsplus_templates',
                remove_script_host : false,
                convert_urls : true,
                image_title: true,
                automatic_uploads: true,
                relative_urls : false,
                images_upload_url: '{{route('uploadImage')}}',
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                    };
                    input.click();
                },
            });

            tinymce.init({
                selector: 'textarea#answer-3',
                height: 350,
                theme: 'modern',
                plugins: [
                    'advlist autolink autosave lists codesample link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table directionality',
                    'emoticons paste textpattern imagetools textcolor colorpicker autoresize'
                ],
                toolbar1: 'fontselect | fontsizeselect | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | codesample jsplusEditTag | emoticons | link unlink image jsplus_templates',
                remove_script_host : false,
                convert_urls : true,
                image_title: true,
                automatic_uploads: true,
                relative_urls : false,
                images_upload_url: '{{route('uploadImage')}}',
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                    };
                    input.click();
                },
            });

            tinymce.init({
                selector: 'textarea#right-answer',
                height: 350,
                theme: 'modern',
                plugins: [
                    'advlist autolink autosave lists codesample link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table directionality',
                    'emoticons paste textpattern imagetools textcolor colorpicker autoresize'
                ],
                toolbar1: 'fontselect | fontsizeselect | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | codesample jsplusEditTag | emoticons | link unlink image jsplus_templates',
                remove_script_host : false,
                convert_urls : true,
                image_title: true,
                automatic_uploads: true,
                relative_urls : false,
                images_upload_url: '{{route('uploadImage')}}',
                file_picker_types: 'image',
                file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    input.onchange = function() {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), { title: file.name });
                        };
                    };
                    input.click();
                },
            });


        }
    </script>
@endsection
