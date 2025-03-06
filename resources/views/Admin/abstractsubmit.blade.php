
@extends('layout')
@section('css')
<link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}">
@endsection
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
            <div class="container mt-4">
                <div class="row justify-content-center">       
                    <div class="card-body">
                        <form action="{{ route('abstract.submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$userData->id}}">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="abstract_content" class="form-label">Abstract Content</label>
                                <textarea class="form-control" id="abstract_content" name="abstract_content"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a class="btn btn-light" href="{{ route('abstractlist') }}">Cancel</a>
                        </form>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</div>

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
@section('js')
<script src="{{asset('vendors/toastr/toastr.min.js')}}"></script>
<script src="{{asset('js/abstract-abstractsubmit.js')}}"></script>
@endsection

