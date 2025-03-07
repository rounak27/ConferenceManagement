@extends('Admin.adminlayout')
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        
        <div class="card-body">
        <h4 class="card-title">Abstract List</h4>
        <h5 class="card-subtitle card-subtitle-dash">View and Update Abstract </h5>
        <hr>
            <div class="table-responsive">
                <table class="table table-striped abstractListTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Abstract Title</th>
                            <th>Full Name</th> 
                            <th>Status</th>
                            <th>Created On</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abstracts as $abstract)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- {{dd($abstract->id)}} --}}
                                <td>{{ $abstract->TopicTitle }}</td>
                                 <td>{{ $abstract->UserName }}</td> 
                                <td><span class="badge m-0 badge-{{ $abstract->IsAccepted == 1 ? 'success' : 'danger' }}">{{ $abstract->IsAccepted == 1 ? 'Approved' : 'Not Approved' }}</span></td>
                                <td>{{ $abstract->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.abstractview', ['id' => encrypt($abstract->id)]) }}" class="btn btn-inverse-primary btn-sm ">
                                    <i class="mdi mdi-eye"></i> View
                                    </a>
                                    <button type="button" class="btn btn-inverse-info btn-sm m-1" 
                                            data-bs-toggle="modal" 
                                            data-bs-target="#sendEmailModal" 
                                            data-abstractId="{{ $abstract->id }}"
                                            data-userid="{{ $abstract->UserId }}"
                                            data-payment-document="" 
                                            title="View Payment Voucher"
                                            data-bs-toggle="tooltip" data-bs-placement="top">
                                            <i class="mdi mdi-email"></i> Email
                                    </button>
                                   

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Email -->
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
                    <input type="hidden" name="abstractId" id="abstractId" value="">
                    <input type="hidden" name="UserId" id="UserId" value="">
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
<script src="{{asset('js/admin-abstractList.js')}}"></script>
@endsection
