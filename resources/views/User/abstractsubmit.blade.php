
@extends('layout')
@section('css')
<link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}">
@endsection
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Submit Your Abstract</h4>
        <h5 class="card-subtitle card-subtitle-dash">Please fill all the details to submit your abstract. </h5>
            
                        <form action="{{ route('abstract.submit') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{$userData->id}}">
                            <div class="mb-3">
                                <label for="title" class="form-label">Category</label>
                                <select class="form-select" id="category" name="category" required>
                                    <option value="">Select Category</option>
                                    <option value="Oral Platform Presentation">Oral Platform Presentation</option>
                                    <option value="Free Paper Presentation">Free Paper Presentation</option>
                                    <option value="Poster Presentation">Poster Presentation</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="mb-3">
                                <label for="affiliation" class="form-label">Affiliation</label>
                                <input type="text" class="form-control" id="affiliation" name="affiliation" required>
                            </div>
                            <div class="mb-3">
                                <label for="authors" class="form-label">Authors</label>
                                <input type="text" class="form-control" id="authors" name="authors" required>
                            </div>
                            <div class="mb-3">
                                <label for="abstract_content" class="form-label">Abstract Content</label>
                                <textarea class="form-control" id="abstract_content" name="abstract_content"></textarea>
                                <span id="word_count_message" class="fw-bold"></span> <!-- Bootstrap classes applied -->
                            </div>
                            <button type="submit" class="btn btn-primary me-2">Submit</button>
                            <a class="btn btn-light" href="{{ route('abstractlist') }}">Cancel</a>
                        </form>
                   
        </div>
    </div> 
</div>

<!-- Include CKEditor -->
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
        ClassicEditor
        .create(document.querySelector('#abstract_content'))
        .then(editor => {
            const wordLimit = 250;
            const messageSpan = document.getElementById('word_count_message');

            editor.model.document.on('change:data', () => {
                const text = editor.getData().replace(/<[^>]*>/g, " "); // Remove HTML tags
                const words = text.trim().split(/\s+/).filter(word => word.length > 0);
                const wordCount = words.length;

                if (wordCount > wordLimit) {
                    messageSpan.textContent = `Word limit exceeded! Maximum allowed words: ${wordLimit}`;
                    messageSpan.classList.remove("text-success");
                    messageSpan.classList.add("text-danger");
                } else {
                    messageSpan.textContent = `Words: ${wordCount} / ${wordLimit}`;
                    messageSpan.classList.remove("text-danger");
                    messageSpan.classList.add("text-success");
                }
            });
        })
        .catch(error => {
            console.error(error);
        });


</script>
@endsection
@section('js')
<script src="{{asset('vendors/toastr/toastr.min.js')}}"></script>
<script src="{{asset('js/abstract-abstractsubmit.js')}}"></script>
@endsection

