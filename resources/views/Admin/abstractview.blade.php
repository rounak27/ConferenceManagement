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
        <hr>
        
        <div class=" card-subtitle card-subtitle-dash submitted-date">Submitted on: <strong>{{$abstract->created_at->format('F d, Y')}}</strong></div>
        <br>
        <div class="submitted-date">Submitted By: <strong>{{$abstract->UserName}}</strong>({{$abstract->UserEmail}})</div>
        
        
        <div class=" card-subtitle card-subtitle-dash  submitted-date">Category: <strong>{{$abstract->category}}</strong></div>
        <div class=" card-subtitle card-subtitle-dash  submitted-date">Authors: <strong>{{$abstract->Authors}}</strong></div>
        <div class=" card-subtitle card-subtitle-dash  submitted-date">Affiliation: <strong>{{$abstract->Affiliation}}</strong></div>
        <div class=" card-subtitle card-subtitle-dash  submitted-date">Assigned To: <strong>{{$abstract->assignedto}}</strong></div>
        <hr>
        <div class=" card-subtitle card-subtitle-dash  submitted-date">Content:</div>

        <div class="abstract-content">
            {!! $abstract->AbstractContent !!}
        </div>
        <br>
        <div class="submitted-date">
        <b>Status:</b> 
        <span class="badge badge-{{ $abstract->IsAccepted == 1 ? 'success' : 'danger' }}">{{ $abstract->IsAccepted == 1 ? 'Approved' : 'Not Approved' }}</span>
        </div>
        <hr>
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
        <a href="{{route('admin.abstractlist')}}" class="btn btn-inverse-primary btn-sm m-1"><i class="fa fa-mail-reply"></i> Back</a>
        <button type="button" class="btn btn-inverse-info btn-sm m-1" 
                                            data-abstractId="{{ $abstract->id }}"
                                            data-userid="{{ $abstract->UserId }}"
                                            data-bs-toggle="modal" 
                                            data-bs-target="#sendEmailModal" 
                                            >
                                            <i class="mdi mdi-email"></i> Email


                                    </button>
    </div>
</div>
<div class="modal fade" id="sendEmailModal" tabindex="-1" aria-labelledby="sendEmailModal" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteLabel">Send Email</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <form id="deleteForm" action="{{route('admin.abstract.sendmail')}}" method="POST">
                    @csrf
                    <input type="hidden" name="abstractId" id="abstractId" value="{{ $abstract->id }}">
                    <input type="hidden" name="UserId" id="UserId" value="{{ $abstract->UserId }}">
                    <select name="emails" id="emails" class="form-select" required>
                        <option value="">Select Email</option>
                        <option value="samundra.pdl14@gmial.com">samundra.pdl14@gmial.com</option>
                        <option value="prasunneupane14@gmail.com">prasunneupane14@gmail.com</option>
                        <option value="rounak.rajbhandari@gmail.com">rounak.rajbhandari@gmail.com</option>
                    </select>
            </div>
            <div class="modal-footer">
                
                    <button type="button" class="btn btn-secondary m-1" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger m-1">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<!-- Include CKEditor -->

@endsection
