
@extends('layout')
@section('css')
{{-- <link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}"> --}}
@endsection
@section('content')
<div class="col-12 grid-margin">
<div class="col-xxl-8 mb-6 order-0">
    <div class="card">
      <div class="d-flex align-items-start row">
        <div class="col-sm-7">
          <div class="card-body">
            <h5 class="card-title text-primary mb-3"> YOUR DETIALS</h5>
            <div class="row">
            <div class="col-md-3"><p>Full Name :</p> </div> 
            <div class="col-md-8"><p> <b> {{$userData->FName}} {{$userData->Mname ?? ''}} {{$userData->LName}}</b></p></div> 
            </div>
            <div class="row">
            <div class="col-md-3"><p>Email :</p> </div> 
            <div class="col-md-8"><p> <b> {{$userData->email}}</b></p></div> 
            </div>
            <div class="row">
            <div class="col-md-3"><p>Phone Number :</p> </div> 
            <div class="col-md-8"><p> <b> {{$userData->MobileNo}}</b></p></div> 
            </div>
            <div class="row">
            <div class="col-md-3"><p>Member Type :</p> </div> 
            <div class="col-md-8"><p> <b> {{$userData->MemberTypeName}}</b></p></div> 
            </div>
            <div class="row">
            <div class="col-md-3"><p>Payment :</p> </div> 
            <div class="col-md-8"><p> <span class="badge {{$userData->PaymentStatus ? 'bg-success' : 'bg-danger'}}">
                                        {{$userData->PaymentStatus ? 'Verified' : 'Not Verified'}}
                                    </span></p></div> 
            </div>
                              
                              
            <!-- <p class="mb-6">You have done 72% more sales today.<br>Check your new badge in your profile.</p> -->
            <i class="mdi mdi-account-card-details text-primary fs-4"></i>
                              
                                <!-- <p> <b>{{$userData->MemberTypeName}}</b> </p>  -->
                                
            <a href="{{ route('profile') }}" class="btn btn-sm btn-outline-primary">Edit Profile</a>
          </div>
        </div>
        <div class="col-sm-5 text-center text-sm-left">
          <div class="card-body pb-0 px-0 px-md-6">
            <img src="{{ asset('images/dummyimg.png') }}" height="175" class="scaleX-n1-rtl" alt="View Badge User">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="card h-100 mt-2">
      <div class="d-flex align-items-end row">
        <div class="col-7">
          <div class="card-body">
            <h5 class="card-title mb-1 text-nowrap">Abstract</h5>
            <p class="card-subtitle text-nowrap mb-3">Your Abstract Detials</p>

            <div class="row">
            <div class="col-md-3"><p>Status:</p> </div> 
            <div class="col-md-8"><p> <b> <span class="badge {{isset($abstract[0]->id) ? 'bg-success' : 'bg-warning'}}">
                                        {{isset($abstract[0]->id) ? 'Submitted' : 'Not Submitted'}}</span></b></p></div> 
            </div>
            @if(isset($abstract) && isset($abstract[0]->IsAccepted))
              <div class="row">
              <div class="col-md-3"><p>Review Status :</p> </div> 
              <div class="col-md-8"><p> <b> <span class="badge {{$abstract[0] ->IsAccepted? 'bg-success' : 'bg-secondary'}}">
                  {{$abstract[0]->IsAccepted ? 'Approved' : 'Under Review'}}
              </span></b></p>
              </div> 
              </div>
            @endif
            @if(!isset($abstract[0]->id))
            <a href="{{ route('abstractlist') }}" class="btn btn-sm btn-outline-primary mb-1">Submit Abstract</a>
            @endif
            @if(!$userData->PaymentStatus)
            <a href="{{ route('profile') }}" class="btn btn-sm btn-outline-primary mb-1"> Pay Now</a>
            @endif
          </div>
        </div>
        <div class="col-5">
          <div class="card-body pb-0 text-end">
            <img src="{{ asset('images/prize.png') }}" width="91" height="144" class="rounded-start" alt="View Sales">
          </div>
        </div>
      </div>
    </div>

    <div class="card mt-2" style="display: none;">
    <div class="card-body">
    <div class="row flex-grow">
        <div class="col-12 grid-margin stretch-card">
            <div class="card card-rounded shadow-sm p-4">
                <div class="card-body">
                    <!-- Welcome Section -->
                    <div class="d-flex justify-content-between align-items-start mb-4">
                        <div>
                           
                        </div>
                    </div>

                    <!-- Status Information -->
                    <div class="row">
                        <!-- Membership Details -->
                        <div class="col-md-6">
                            <div class="border rounded p-3 bg-light shadow-sm">
                                <i class="mdi mdi-account-card-details text-primary fs-4"></i>
                                <h5 class="fw-bold mt-2">Membership Details</h5>
                                <p><b>Member Type:</b> {{$userData->MemberTypeName}}</p>
                                
                                <p><b>Payment Status:</b> 
                                    <span class="badge {{$userData->PaymentStatus ? 'bg-success' : 'bg-danger'}}">
                                        {{$userData->PaymentStatus ? 'Verified' : 'Not Verified'}}
                                    </span>
                                </p>
                                <div class="text-end">
                                    <!-- <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#paymentModal" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-credit-card"></i> Pay Now
                                    </a> -->
                                </div>
                            </div>
                        </div>

                        <!-- Abstract Submission Status -->
                        <div class="col-md-6">
                            <div class="border rounded p-3 bg-light shadow-sm">
                                <i class="mdi mdi-file-document-box-check text-info fs-4"></i>
                                <h5 class="fw-bold mt-2">Abstract Submission</h5>
                                <p><b>Status:</b> 
                                    <span class="badge {{$userData->AbstractStatus ? 'bg-success' : 'bg-warning'}}">
                                        {{$userData->AbstractStatus ? 'Submitted' : 'Not Submitted'}}
                                    </span>
                                </p>
                                <!-- @if(isset($abstract->id))
                                <p><b>Review Status:</b> 
                                    <span class="badge {{$userData->ReviewStatus ? 'bg-success' : 'bg-secondary'}}">
                                        {{$userData->ReviewStatus ? 'Approved' : 'Under Review'}}
                                    </span>
                                </p>
                                <div class="text-end">
                                    <a href="#" class="btn btn-info btn-sm">
                                        <i class="mdi mdi-eye"></i> View Abstract
                                    </a>
                                </div>
                                @else
                                <div class="text-end">
                                    <a href="#" class="btn btn-primary btn-sm">
                                        <i class="mdi mdi-file-document"></i> Submit Abstract
                                    </a>
                                @endif -->
                            </div>
                        </div>
                    </div>

                    <!-- Payment Transfer Information -->
                    <div class="row mt-4">
                      <div class="col-md-12">
                          <div class="border rounded p-3 bg-light shadow-sm">
                              <i class="mdi mdi-cellphone text-danger fs-4"></i>
                              <h5 class="fw-bold mt-2">Details</h5>
                              
                              <p><b>Full Name:</b> {{$userData->FName}} {{$userData->Mname ?? ''}} {{$userData->LName}}</p>
                              <p><b>Email:</b> {{$userData->email}}</p>
                              <p><b>Phone Number:</b> {{$userData->MobileNo}}</p>
                              <p><b>Member Type:</b> {{$userData->MemberTypeName}}</p>

                              <div class="text-end">
                                  <a href="{{ route('profile') }}" class="btn btn-danger btn-sm">
                                      <i class="mdi mdi-pencil"></i> Edit Your Details
                                  </a>
                              </div>
                          </div>
                      </div>
                  </div>

                    
                </div> <!-- End Card Body -->
            </div>
        </div>
    </div>
</div>

    
    </div>
  </div>
  <div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Payment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- QR Code Image -->
                 <div class="text-center"><img src="{{ asset('images/paymentQR.png') }}" alt="QR Code" class="img-fluid"></div>
                 <div class="row g-3 mt-2">
        <div class="row">
            <label for="paymentProof" class="form-label">Upload Payment Proof <span style="font-size: 12px;">(Max 10 MB) *</span></label>
            <input type="file" class="form-control" id="paymentProof" name="paymentProof" accept="image/*" required>
        </div>
        <div class="row g-3 mt-2">
            <label for="proofLetter" class="form-label">Letter of Proof (Resident/MO/Nurse) <span style="font-size: 12px;">(Max 10 MB)</span></label>
            <input type="file" class="form-control" id="proofLetter" name="proofLetter" accept="image/*">
        </div>
    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
{{-- <script src="{{asset('vendors/toastr/toastr.min.js')}}"></script> --}}
<script src="{{asset('js/user-profile.js')}}"></script>
@endsection

