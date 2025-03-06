
@extends('layout')
@section('css')
{{-- <link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}"> --}}
@endsection
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit your profile</h4>
        <form id="signupForm" action="{{url('updateProfile')}}" method="post" class="pt-3" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id" value="{{ $userData->id }}">
    <div class="row g-3 mt-2">
    <div class="col-md-6">
            <label for="Email" class="form-label">Email *</label>
            <input type="email" class="form-control" name="email" id="Email" placeholder="Enter Email" required value="{{ isset($userData->email) ? $userData->email : '' }}" readonly>
            <span id="errorEmail" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label for="designation" class="form-label">Designation *</label>
            <select class="form-select" id="designation" name="designation" required>
                <option value="">Choose Designation</option>
                <option value="Dr." {{ isset($userData->Designation) && $userData->Designation == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                <option value="Mr." {{ isset($userData->Designation) && $userData->Designation == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                <option value="Ms." {{ isset($userData->Designation) && $userData->Designation == 'Ms.' ? 'selected' : '' }}>Ms.</option>
                <option value="Professor" {{ isset($userData->Designation) && $userData->Designation == 'Professor' ? 'selected' : '' }}>Professor</option>
                <option value="Associate Professor" {{ isset($userData->Designation) && $userData->Designation == 'Associate Professor' ? 'selected' : '' }}>Associate Professor</option>
                <option value="Assistant Professor" {{ isset($userData->Designation) && $userData->Designation == 'Assistant Professor' ? 'selected' : '' }}>Assistant Professor</option>
                <option value="Other" {{ isset($userData->Designation) && $userData->Designation == 'Other' ? 'selected' : '' }}>Other (Specify)</option>
            </select>
        </div>     
    </div>
    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="FName" class="form-label">First Name *</label>
            <input type="text" class="form-control" name="FName" id="FName" placeholder="Enter First Name" required value="{{isset($userData->FName)?$userData->FName:''}}">
            <span id="errorFName" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label for="MName" class="form-label">Middle Name</label>
            <input type="text" class="form-control" name="MName" id="MName" placeholder="Enter Middle Name" value="{{ isset($userData->MName) ? $userData->MName : '' }}">
        </div>
    </div>

    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="LName" class="form-label">Last Name *</label>
            <input type="text" class="form-control" name="LName" id="LName" placeholder="Enter Last Name" required value="{{ isset($userData->LName) ? $userData->LName : '' }}">
            <span id="errorLName" class="text-danger"></span>
        </div>
        <div class="col-md-6">
            <label for="MobileNo" class="form-label">Mobile Number *</label>
            <input type="text" class="form-control" name="MobileNo" id="MobileNo" placeholder="Enter Mobile Number" maxlength="10" required value="{{ isset($userData->MobileNo) ? $userData->MobileNo : '' }}">
            <span id="errorMobileNo" class="text-danger"></span>
        </div>
        
    </div>

    <div class="row g-3 mt-2">
        
        
        <div class="col-md-6">
            <label class="form-label">Gender *</label>
            <div class="row m-2">
              <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" {{ isset($userData->Gender) && $userData->Gender == 'Male' ? 'checked' : '' }}>
                <label class="form-check-label" for="genderMale">Male</label>
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
                <label class="form-check-label" for="genderFemale">Female</label>
            </div>
            </div>
            <span id="errorGender" class="text-danger"></span>
            </div>
        </div>
        <!-- Meal Preference -->
    <div class="col-md-6">
      
    
    <label for="workplace" class="form-label">Meal Preference *</label>
        <select class="form-select form-select-lg" name="mealPreference" id="mealPreference" required >
          <option value=" ">Select Meal Preference</option>
          <option value="VEGETARIAN" {{ isset($userData->MealPreference) && $userData->MealPreference == 'VEGETARIAN' ? 'selected' : '' }}>VEGETARIAN</option>
          <option value="NON VEGETARIAN" {{ isset($userData->MealPreference) && $userData->MealPreference == 'NON VEGETARIAN' ? 'selected' : '' }}>NON VEGETARIAN</option>
        </select>
      </div>
    
    </div>

    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="Address" class="form-label">Address</label>
            <input type="text" class="form-control" name="Address" id="Address" placeholder="Enter Address" value="{{ isset($userData->Address) ? $userData->Address : '' }}">
        </div>
        <div class="col-md-6">
            <label for="Country" class="form-label">Country</label>
            <input type="text" class="form-control" id="Country" name="Country" placeholder="Enter Country" value="{{ isset($userData->Country) ? $userData->Country : '' }}">
        </div>
    </div>

    

    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="MemberType" class="form-label">Member Type</label>
            <select class="form-select" id="MemberType" name="MemberType">
                <option value="">Select Member Type</option>
                @foreach($memberTypes as $memberType)
                <option value="{{$memberType->id}}" {{ isset($userData->MemberType) && $userData->MemberType == $memberType->id ? 'selected' : '' }}>{{$memberType->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="NepasID" class="form-label">Nepas ID</label>
            <input type="text" class="form-control" id="NepasID" name="NepasID" placeholder="Enter Nepas ID" value="{{ isset($userData->NepasID) ? $userData->NepasID : '' }}">
        </div>
    </div>

    
    <div class="row g-3 mt-2">
    <!-- Workplace -->
    <div class="col-md-6">
    <label for="workplace" class="form-label">WorkPlace *</label>
      <div class="form-group">
        <input type="text" class="form-control form-control-lg" name="workplace" id="workplace" placeholder="Workplace / Hospital / Institution" required>
      </div>
    </div>
    <!-- Other Workplace -->
    <div class="col-md-6">
    <label for="otherWorkplace" class="form-label">Other Workplace</label>
      <div class="form-group">
        <input type="text" class="form-control form-control-lg" name="otherWorkplace" id="otherWorkplace" placeholder="If Other, specify" value="{{ isset($userData->OtherWorkplace) ? $userData->OtherWorkplace : '' }}">
      </div>
    </div>
    

    <div class="row g-3 mt-2">
        <div class="col-md-6">
            <label for="paymentProof" class="form-label">Upload Payment Proof (Max 10 MB) *</label>
            <input type="file" class="form-control" id="paymentProof" name="paymentProof" accept="image/*,application/pdf" >
        </div>
        <div class="col-md-6">
            <label for="proofLetter" class="form-label">Letter of Proof (Resident/MO/Nurse) (Max 10 MB)</label>
            <input type="file" class="form-control" id="proofLetter" name="proofLetter" accept="image/*,application/pdf">
        </div>
    </div>

    <div class="row mt-4">
        <div class="col text-center">
            <button type="submit" class="btn btn-primary btn-lg">Update</button>
        </div>
    </div>
</form>                   
      </div>
    </div>
  </div>
@endsection
@section('js')
{{-- <script src="{{asset('vendors/toastr/toastr.min.js')}}"></script> --}}
<script src="{{asset('js/user-profile.js')}}"></script>
@endsection

