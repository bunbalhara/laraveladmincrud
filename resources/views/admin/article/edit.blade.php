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
                                @foreach([1,2] as $nose)
                                    <option value="{{$nose}}" {{$nose==$article->nose_id?'selected':''}}>Nose {{$nose}}</option>
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
                        <div class="form-group m-form__group">
                            <label for="writerId">Article WriterID</label>
                            <input type="number" value="{{$article->writerId}}" name="writerId" class="form-control m-input m-input--square" id="writerId" aria-describedby="emailHelp" placeholder="Enter Article Title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group m-form__group">
                            <label for="articleLong">Article Long</label>
                            <textarea  name="articleLong" class="form-control m-input" id="articleLong" rows="3"> {{$article->articleLong}} </textarea>
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