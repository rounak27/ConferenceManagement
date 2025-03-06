@extends('layout')
@section('css')
<link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}">
@endsection
@section('content')
@php
// dd($abstract);
    if($abstract->IsAccepted == 1){
        $disabled = 'disabled';
    }else{
        $disabled = '';
    }
@endphp
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <div class="container mt-4">
                <div class="row justify-content-center">       
                    <div class="card-body">
                        <form action="{{ route('abstract.update') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$userData->id}}">
                            <input type="hidden" name="id" value="{{$abstract->id}}">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$abstract->TopicTitle}}" required {{$disabled}}>
                            </div>
                            <div class="mb-3">
                                <label for="abstract_content" class="form-label">Abstract Content</label>
                                <textarea class="form-control" id="abstract_content" name="abstract_content" {{$disabled}}>{{$abstract->AbstractContent}}</textarea>
                            </div>
                            @if($abstract->IsAccepted == 0)
                            <button type="submit" class="btn btn-primary me-2" >Edit Abstract</button>
                            @endif
                            <a class="btn btn-light" href="{{ route('abstractlist') }}">Cancel</a>
                        </form>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- Include CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#abstract_content'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection
