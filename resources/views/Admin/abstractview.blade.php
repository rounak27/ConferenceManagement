@extends('Admin.adminlayout')
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
        .hide{
            display: none !important;
        }
</style>
@endsection
@section('content')

<div class="col-12 grid-margin">
    <div class="abstract-card">
        <div class="abstract-title">{{$abstract->TopicTitle}}</div>
        <br>
        <div class="submitted-date">Submitted on: <strong>{{$abstract->created_at->format('F d, Y')}}</strong></div>
        <br>
        <div class="submitted-date">Submitted By: <strong>{{$abstract->UserName}}</strong>({{$abstract->UserEmail}})</div>
        <br>
        <div class="abstract-content">
            {!! $abstract->AbstractContent !!}
        </div>
        <div class="submitted-date">
        Status:
        <span class="badge badge-{{ $abstract->IsAccepted == 1 ? 'success' : 'danger' }}">{{ $abstract->IsAccepted == 1 ? 'Approved' : 'Not Approved' }}</span>
        </div>
        <div class="submitted-date hide">
            <div class="col-md-6">
                <div class="row">
                <form action="{{ route('admin.updateabstractstatus') }}" method="post">
                    @csrf
                    <input type="hidden" name="abstract_id" value="{{$abstract->id}}">

                    <!-- Section Heading -->
                    <h5 class="mb-4">Update Abstract Status</h5>

                    <div class="row">
                        <!-- Abstract Status Dropdown -->
                        <div class="col-md-6">
                            <label for="AbstractStatus" class="form-label"><strong>Select Status</strong></label>
                            <select name="AbstractStatus" id="AbstractStatus" class="form-select" required>
                                <option value="Accept" {{ $abstract->AbstractStatus == 'Accept' ? 'selected' : '' }}>Accept</option>
                                <option value="Reject" {{ $abstract->AbstractStatus == 'Reject' ? 'selected' : '' }}>Reject</option>
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="col-md-3 d-flex align-items-end">
                            <button type="submit" class="btn btn-primary btn-sm">Update Status</button>
                            
                        </div>
                    </div>
                </form>

                    
                </div>
            </div>
        </div>
        <a href="{{route('admin.abstractlist')}}" class="btn btn-primary btn-sm m-1">Back</a>
    </div>
</div>
@endsection
@section('js')
<!-- Include CKEditor -->

@endsection
