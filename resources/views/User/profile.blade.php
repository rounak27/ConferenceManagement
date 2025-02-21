
@extends('layout')
@section('css')
{{-- <link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}"> --}}
@endsection
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit your profile</h4>
        <form class="form-sample" id="signupForm" action="{{ url('updateProfile') }}" method="post">
            @csrf
            <input type="hidden" name="id" value="{{ $userData->id }}">
            <p class="card-description"> Personal info </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">First Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="FName" id="FName" value="{{ isset($userData->FName) ? $userData->FName : '' }}" required>
                    <span id="errorFName" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Middle Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="MName" id="MName" value="{{ isset($userData->MName) ? $userData->MName : '' }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Last Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="LName" id="LName" value="{{ isset($userData->LName) ? $userData->LName : '' }}" required>
                    <span id="errorLName" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="Email" value="{{ isset($userData->email) ? $userData->email : '' }}" required>
                    <span id="errorEmail" class="text-danger"></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Mobile Number</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="MobileNo" id="MobileNo" value="{{ isset($userData->MobileNo) ? $userData->MobileNo : '' }}" required>
                    <span id="errorMobileNo" class="text-danger"></span>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Gender</label>
                  <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" {{ isset($userData->Gender) && $userData->Gender == 'Male' ? 'checked' : '' }}>
                      <label class="form-check-label" for="genderMale">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female" {{ isset($userData->Gender) && $userData->Gender == 'Female' ? 'checked' : '' }}>
                      <label class="form-check-label" for="genderFemale">Female</label>
                    </div>
                    <span id="errorGender" class="text-danger"></span>
                  </div>
                </div>
              </div>
            </div>
            <p class="card-description"> Address </p>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Address</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Address" id="Address" value="{{ isset($userData->Address) ? $userData->Address : '' }}">
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Country</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="Country" id="Country" value="{{ isset($userData->Country) ? $userData->Country : '' }}">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Member Type</label>
                  <div class="col-sm-9">
                    <select class="form-select" id="MemberType" name="MemberType">
                      <option value="">Select Member Type</option>
                      @foreach($memberTypes as $memberType)
                        <option value="{{$memberType->id}}" {{ isset($userData->MemberType) && $userData->MemberType == $memberType->id ? 'selected' : '' }}>{{$memberType->name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label">Nepas ID</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control" name="NepasID" id="NepasID" value="{{ isset($userData->NepasID) ? $userData->NepasID : '' }}">
                  </div>
                </div>
              </div>
            </div>
            
            <div class="row">
            @if($userData->Verified==false)
            <p class=""> Your email is not verified:
            
              <a href="{{route('verify-email')}}" class="auth-link text-black">Verify Email</a>
            
            </p>
            @endif
          </div>
            

            <button type="submit" class="btn btn-primary me-2">Submit</button>
          </form>                    
      </div>
    </div>
  </div>
@endsection
@section('js')
{{-- <script src="{{asset('vendors/toastr/toastr.min.js')}}"></script> --}}
<script src="{{asset('js/user-profile.js')}}"></script>
@endsection

