@extends('layout')
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        
        <div class="card-body">
        <h4 class="card-title">Abstract List</h4>
        <h5 class="card-subtitle card-subtitle-dash">Submit Your Abstract.<a href="{{route('abstractsubmit')}}" class="btn btn-sm btn-primary float-end "> Abstract Submit</a> </h5>
        
        <hr>
            <div class="table-responsive">
                <table class="table table-striped abstractListTable">
                    <thead>
                        <tr>
                            <th>S.No</th>
                            <th>Abstract Title</th>
                            {{-- <th>Abstract</th> --}}
                            <th>Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($abstracts as $abstract)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- {{dd($abstract->id)}} --}}
                                <td>{{ $abstract->TopicTitle }}</td>
                                {{-- <td>{{ $abstract->AbstractContent }}</td> --}}
                                <td><span class="badge m-0 badge-sm badge-{{ $abstract->IsAccepted == 1 ? 'success' : 'danger' }}">{{ $abstract->IsAccepted == 1 ? 'Approved' : 'Not Approved' }}</span></td>
                                <td>{{ $abstract->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <!-- <a href="{{ route('abstractview', ['id' => encrypt($abstract->id)]) }}" class="btn ">
                                        <i class="fa fa-eye"></i>
                                    </a> -->
                                    {{-- <a href="{{ route('abstractedit', ['id' => encrypt($abstract->id)]) }}" class="btn ">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a> --}}
                                    <!-- <button style="border: none;" 
                                        class="btn delete-btn" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#confirmDeleteModal" 
                                        data-abstractId="{{$abstract->id}}" 
                                        {{$abstract->IsAccepted == 1 ? 'disabled' : ''}} 
                                        data-toggle="tooltip" 
                                        title="{{$abstract->IsAccepted == 1 ? 'Already accepted.' : ''}}">
                                        <i class="fa fa-trash-o"></i>
                                    </button> -->

                                    <div class="btn-group btm-sm" role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-outline-secondary btn-sm" fdprocessedid="ulpsy" 
                            data-bs-toggle="modal" 
                                        data-bs-target="#confirmDeleteModal" 
                                        data-abstractId="{{$abstract->id}}" 
                                        {{$abstract->IsAccepted == 1 ? 'disabled' : ''}} 
                                        data-toggle="tooltip" 
                                        title="{{$abstract->IsAccepted == 1 ? 'Already accepted.' : ''}}">
                                        <i class="fa fa-trash-o"></i>
                            </button>
                            <a type="button" href="{{ route('abstractview', ['id' => encrypt($abstract->id)]) }}"  class="btn btn-outline-primary btn-sm" fdprocessedid="5zifs">
                              <i class="ti-file btn-icon-append"></i>
                            </a>
                            <!-- <button type="button" class="btn btn-outline-secondary" fdprocessedid="dh3oun">
                              <i class="ti-time"></i>
                            </button> -->
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
@endsection
@section('js')
<script src="{{asset('js/abstract-abstractList.js?v2')}}"></script>
@endsection
