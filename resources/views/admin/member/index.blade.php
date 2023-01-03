@extends('layouts.master')

@section('title', 'Member' )

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>View Member
                <a href="{{ url('admin/add-member') }}" class="btn btn-primary btn-sm float-end">Add Member</a>
            </h4>

        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                       <th>id</th> 
                       <th>Name</th> 
                       <th>Branch</th> 
                       <th>Gender</th> 
                       <th>Phone</th> 
                       <th>Tag No</th> 
                       <th>Group</th> 
                       <th>Email</th>
                       <th>Payment Mode</th> 
                       <th>Registration Reference</th> 
                       <th>Edit</th>
                       <th>Delete</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach ($members as $member )
                    <tr>
                        <td>{{ $member->id }}</td>
                        <td>{{ $member->full_name }}</td>
                        <td>{{ $member->branch }}</td>
                        <td>{{ $member->gender }}</td>
                        <td>{{ $member->phone }}</td>
                        <td>{{ $member->tag_number }}</td>
                        <td>{{ $member->group }}</td>
                        <td>{{ $member->email }}</td>
                        <td>{{ $member->pin }}</td>
                        <td>{{ $member->accreditation_status == '1' ? 'Hidden':'Shown'}}</td>
                        <td>
                            <a href="{{ url('admin/edit-member/'.$member->id) }}" class="btn btn-success">Edit</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/delete-member/'.$member->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    
    
</div>

@endsection
