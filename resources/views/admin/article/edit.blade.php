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
                        Edit Article
                    </h3>
                </div>
            </div>
        </div>
        <!--begin::Form-->
        <form action="{{route('admin.article.update', $article->id)}}" method="POST" class="m-form m-form--fit m-form--label-align-right">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="m-portlet__body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="noseId">Select Nose</label>
                            <select class="form-control m-input m-input--square" name="noseId" id="noseId">
                                @foreach($noses as $nose)
                                    <option value="{{$nose->id}}" {{$nose->id==$article->nose_id?'selected':''}}>Nose {{$nose->nose_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="articleTitle">Article Title</label>
                            <input type="text" value="{{$article->articleTitle}}" name="articleTitle" class="form-control m-input m-input--square" id="articleTitle" aria-describedby="emailHelp" placeholder="Enter Article Title">
                        </div>
                        <div class="form-group m-form__group">
                            <label for="articleOrder">Article Order</label>
                            <input type="number" value="{{$article->articleOrder}}" name="articleOrder" class="form-control m-input m-input--square" id="articleOrder" aria-describedby="emailHelp" placeholder="Enter Article Title">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="articleType">Article Type</label>
                            <select class="form-control m-input m-input--square" name="articleType" id="articleType">
                                @foreach(['aa','bb','cc','dd','ee'] as $i=>$item)
                                    <option value="{{ $i+1 }}" {{($i+1)==$article->type?'selected':''}}>{{$item}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <div class="form-group m-form__group">
                            <label for="writerId">Article WriterID</label>
                            <input type="number" value="{{$article->writerId}}" name="writerId" class="form-control m-input m-input--square" id="writerId" aria-describedby="emailHelp" placeholder="Enter Article Title">
                        </div>

                        <div class="form-group m-form__group">
                            <label for="articleNoHide">Article No Hide</label>
                            <textarea  name="articleNoHide" class="form-control m-input" id="articleNoHide" rows="3">{{$article->articleNoHide}}</textarea>
                        </div>
                        <div class="form-group m-form__group">
                            <label for="articleShort">Article Short</label>
                            <textarea  name="articleShort" class="form-control m-input" id="articleShort" rows="3">{{$article->articleShort}}</textarea>
                        </div>

                        <div class="form-group m-form__group">
                            <input type="checkbox" name="articleStatus" class=" m-input m-input--square" id="articleStatus" aria-describedby="emailHelp" placeholder="Enter Article Title" {{$article->articleStatus?'checked':''}}>
                            <label for="articleStatus">Article Status</label>
                        </div>
                    </div>
                </div>
                <div class="form-group m-form__group">
                    <label for="articleLong">Article Long</label>
                    <textarea  name="articleLong" class="form-control m-input" id="articleLong" rows="3"> {{$article->articleLong}} </textarea>
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
        function AddTinyMce() {
            tinymce.init({
                selector: 'textarea#articleLong',
                height: 500,
                theme: 'modern',
                plugins: [
                    'advlist autolink autosave lists codesample link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table directionality',
                    'emoticons paste textpattern imagetools textcolor colorpicker autoresize'
                ],
                toolbar1: 'fontselect | fontsizeselect | styleselect | bold italic forecolor backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | print preview media | codesample jsplusEditTag | emoticons | link unlink image jsplus_templates',
                remove_script_host: false,
                convert_urls: true,
                image_title: true,
                automatic_uploads: true,
                relative_urls: false,
                images_upload_url: '{{route('article-uploadImage')}}',
                file_picker_types: 'image',
                file_picker_callback: function (cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    input.onchange = function () {
                        var file = this.files[0];

                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function () {
                            var id = 'blobid' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var base64 = reader.result.split(',')[1];
                            var blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), {title: file.name});
                        };
                    };
                    input.click();
                },
            });

        }
    </script>
@endsection
