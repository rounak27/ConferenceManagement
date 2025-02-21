@extends('layout')
@section('css')
<link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}">
<style>
    .abstract-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 700px;
            margin: 20px auto;
        }
        .abstract-title {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
        }
        .submitted-date {
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 15px;
        }
        .abstract-content {
            font-size: 1rem;
            color: #444;
        }

</style>
@endsection
@section('content')

<div class="col-12 grid-margin">
    <div class="abstract-card">
        <div class="abstract-title">{{$abstract->TopicTitle}}</div>
        <div class="submitted-date">Submitted on: <strong>{{$abstract->created_at->format('F d, Y')}}</strong></div>
        <div class="abstract-content">
            {!! $abstract->AbstractContent !!}
        </div>
        <div class="abstract-status">
            Status:
            <span class="badge badge-{{ $abstract->IsAccepted == 1 ? 'success' : 'danger' }}">{{ $abstract->IsAccepted == 1 ? 'Approved' : 'Not Approved' }}</span>
        </div>
        <a href="{{route('abstractlist')}}" class="btn btn-primary btn-sm m-1">Back</a>
    </div>
</div>
@endsection
@section('js')
<!-- Include CKEditor -->

@endsection
