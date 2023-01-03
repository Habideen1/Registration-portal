@extends('layouts.master')

@section('title', 'Member' )

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Member</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('admin/update-member/'.$member->id) }}" method="post">
                @csrf
                @method('PUT')


                <div class="mb-3">
                    <label for="">Name</label>
                    <input type="text" name="name" value="{{ $member->name}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Zone</label>
                    <input type="text" name="zone" value="{{ $member->zone }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Branch</label>
                    <input type="text" name="branch" value="{{ $member->branch }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Age Group</label>
                    <input type="text" name="age_group" value="{{ $member->age_group}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Gender</label>
                    <input type="text" name="gender" value="{{ $member->gender}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" value="{{ $member->phone}}" class="form-control"></input>
                </div>

                <div class="mb-3">
                    <label>Email</label>
                    <input type="text" name="email" value="{{ $member->email }}" class="form-control"></input>
                </div>

                <div class="mb-3">
                    <label>Tag No</label>
                    <input type="text" name="tag_number" value="{{ $member->tag_number }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Group</label>
                    <input type="text" name="group" value="{{ $member->group }}" class="form-control">
                </div

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update Member</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
