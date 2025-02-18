@extends('layout')
@section('content')
<div class="col-12 grid-margin">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="card-title">Abstract List</h3>
                </div>
                <div class="col-md-6">
                    <a href="{{route('abstractsubmit')}}" class="btn btn-sm btn-primary float-end"> Abstract Submit</a>
                </div>
            </div> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
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
                                {{-- {{dd($abstract->id)}} --}}
                                <td>{{ $abstract->TopicTitle }}</td>
                                {{-- <td>{{ $abstract->AbstractContent }}</td> --}}
                                <td><span class="badge m-0 badge-{{ $abstract->Status == 1 ? 'success' : 'danger' }}">{{ $abstract->Status == 1 ? 'Approved' : 'Not Approved' }}</span></td>
                                <td>{{ $abstract->created_at->format('d-m-Y') }}</td>
                                <td>
                                    <a href="{{ route('abstractedit', ['id' => encrypt($abstract->id)]) }}" class="btn ">
                                        <i class="fa fa-pencil-square-o"></i>
                                    </a>
                                    <a href="" class="btn "><i class="fa fa-trash-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="{{asset('js/abstract-abstractList.js')}}"></script>
@endsection
