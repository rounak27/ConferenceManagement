@extends('Admin.adminlayout')
@section('content')
<div class="col-12 grid-margin">

    <div class="card">

        
        
        <div class="card-body">
        <h4 class="card-title">Payment List</h4>
        <h5 class="card-subtitle card-subtitle-dash">View and Update Payment Status and view Medical Letter for Verification </h5>
        <hr>
        <div class="table-responsive">
    <table class="table  table-hover table-striped " id="userTable">
        <thead class="">
            <tr>
                <th >S.No</th>
                <th >Full Name</th>
                <th >Member Type</th> 
                <th >Status</th>
                <th >View</th>
                <th >Verification</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr id="user-{{ $user->id }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->FName }} {{ $user->Mname ?? '' }} {{ $user->LName }}</td>
                    <td>{{ $user->MemberTypeName }}</td>
                    <td class="text-center">
                        <span id="payment-status-{{ $user->id }}" class="badge m-0 badge-sm badge-{{ $user->PaymentStatus == 1 ? 'success' : 'danger' }}">
                            {{ $user->PaymentStatus == 1 ? 'Verified' : 'Not Verified' }}
                        </span>
                    </td>



                    <td>
                        <!-- Button to open Payment Voucher Modal -->
                       <!-- Button to open Payment Voucher Modal -->
                        <!-- <button type="button" class="btn btn-inverse-info btn-sm m-1" 
                                data-bs-toggle="modal" 
                                data-bs-target="#paymentModal" 
                                data-payment-document="{{ $user->payment_document }}" 
                                title="View Payment Voucher"
                                data-bs-toggle="tooltip" data-bs-placement="top">
                                <i class="mdi mdi-eye"></i> Voucher
                        </button>
                        <br>     -->
                        <!-- Button to open Medical Letter Modal -->
                        <!-- <button type="button" class="btn btn-inverse-secondary btn-sm m-1" 
                                data-bs-toggle="modal" 
                                data-bs-target="#medicalLetterModal" 
                                data-medical-document="{{ $user->medical_letter_document }}" 
                                title="View Medical Letter"
                                data-bs-toggle="tooltip" data-bs-placement="top">
                                <i class="mdi mdi-eye"></i> Medical Letter
                        </button> -->
                        <div class="btn-group btm-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary btn-sm" fdprocessedid="ulpsy" 
                             data-bs-toggle="modal" 
                                data-bs-target="#paymentModal" 
                                data-payment-document="{{ $user->payment_document }}" 
                                title="View Payment Voucher"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                                >
                              <i class="fa fa-rupee"></i>
                            </button>
                            <button type="button" class="btn btn-outline-primary btn-sm" fdprocessedid="5zifs"
                            data-bs-toggle="modal" 
                                data-bs-target="#medicalLetterModal" 
                                data-medical-document="{{ $user->medical_letter_document }}" 
                                title="View Medical Letter"
                                data-bs-toggle="tooltip" data-bs-placement="top"
                            >
                              <i class="ti-file btn-icon-append"></i>
                            </button>
                            <!-- <button type="button" class="btn btn-outline-secondary" fdprocessedid="dh3oun">
                              <i class="ti-time"></i>
                            </button> -->
                          </div>

                    </td>

                    <td> <!-- Checkbox to toggle Payment Status -->
                        <div class=" form-switch">

                            <input type="checkbox" class="form-check-input paymentStatusToggle" data-user-id="{{ $user->id }}" {{ $user->PaymentStatus == 1 ? 'checked' : '' }} id="verify-payment-{{ $user->id }}">
                            
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

        </div>
    </div>
</div>
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteLabel">Confirm Deletion</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this item?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="{{route('abstract.delete')}}" method="POST">
                    @csrf
                    <input type="hidden" name="abstractId" id="abstractId">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Payment Voucher Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="paymentModalLabel">Payment Voucher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="payment-voucher-image" class="img-fluid" alt="Payment Voucher">
                <p id="payment-voucher-placeholder">No image available</p>
            </div>
        </div>
    </div>
</div>

<!-- Medical Letter Modal -->
<div class="modal fade" id="medicalLetterModal" tabindex="-1" aria-labelledby="medicalLetterModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="medicalLetterModalLabel">Medical Letter</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="medical-letter-image" class="img-fluid" alt="Medical Letter">
                <p id="medical-letter-placeholder">No image available</p>
            </div>
        </div>
    </div>
</div>


@endsection
@section('js')
<script src="{{asset('js/admin-userList.js')}}"></script>
@endsection
