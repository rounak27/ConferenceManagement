
@extends('layout')
@section('css')
{{-- <link rel="stylesheet" href="{{asset('vendors/toastr/toastr.min.css')}}"> --}}
@endsection
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
      <div class="card-body">
      <div class="row flex-grow">
                          <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                            <div class="card card-rounded">
                              <div class="card-body">
                                <div class="d-flex justify-content-between align-items-start">
                                  <div>
                                    <h4 class="modern-user-intro">Hello {{$userData->FName}}{{$userData->Mname??''}} {{$userData->LName}},</h4>
                                    <h6 class="mdern-welcome-text">Welcome back</h6>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <div class="bg-opacity-primary mb-2 mb-lg-0">
                                      <i class="mdi mdi-credit-card"></i>
                                      <p><b>Your Member Type:</b> <br>{{$userData->MemberTypeName }}</p>
                                      <p><b>Registration Fees:</b> <br> {{ $price }}</p>
                                      <p><b>Status:</b>  {{$userData->PaymentStatus==false?'Not Paid':'Paid'}}
                                      <div class="text-end">
                                      <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#paymentModal">
                                        <i class="mdi mdi-arrow-right"></i>
                                    </a>
                                      </div>
                                    </div>
                                  </div>
                                  <!-- <div class="col-sm-3">
                                    <div class="bg-opacity-success mb-2 mb-lg-0">
                                      <i class="mdi mdi-home"></i>
                                     
                                      <div class="text-end">
                                        <i class="mdi mdi-arrow-right"></i>
                                      </div>
                                    </div>
                                  </div> -->
                                  <!-- <div class="col-sm-3">
                                    <div class="bg-opacity-info mb-2 mb-lg-0">
                                      <i class="mdi mdi-account-check"></i>
                                      
                                        
                                      <button class="btn btn-sm">Click Here to View Payment Detials</button>   
                                      </p>
                                      
                                      <div class="text-end">
                                        <i class="mdi mdi-arrow-right"></i>
                                      </div>
                                    </div>
                                  </div> -->
                                  <div class="col-sm-6">
                                    <div class="bg-opacity-danger mb-2 mb-lg-0">
                                      <i class="mdi mdi-cellphone"></i>
                                      <p>Transfer using UPI number</p>
                                      <div class="text-end">
                                        <i class="mdi mdi-arrow-right"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                     
      </div><div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Payment Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- QR Code Image -->
                <img src="{{ asset('images/payment.jpg') }}" alt="QR Code" class="img-fluid">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
    </div>
  </div>
@endsection
@section('js')
{{-- <script src="{{asset('vendors/toastr/toastr.min.js')}}"></script> --}}
<script src="{{asset('js/user-profile.js')}}"></script>
@endsection

