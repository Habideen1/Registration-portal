@extends('layouts.master')

@section('title', 'Member' )

@section('content')

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Create Pin
                <a href="{{ url('admin/add-pin') }}" class="btn btn-primary btn-sm float-end">Generate Pin</a>
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
                       <th>Pin</th> 
                       <th>Status</th> 
                       <th>Batch No</th> 
                       <th>Used By</th> 
                       <th>Edit</th>
                       <th>Delete</th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach ($pins as $item )
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->pin }}</td>
                        <td>{{ $item->status == '1' ? 'Used':'Unused'}}</td>
                        <td>{{ $item->batch_no }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->edit}}</td>
                        <td>
                            <a href="{{ url('admin/delete-pin/'.$item->id) }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>

    
    
</div>

@endsection
