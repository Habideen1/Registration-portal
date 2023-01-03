@extends('layouts.master')

@section('title', 'Pins' )

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Generate PINs</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('admin/create-pin') }}" method="post">
                @csrf

                <div class="mb-3">
                    <label for="">Batch No</label>
                    <input type="text" name="batch_no" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="">Count</label>
                    <input type="integer" name="count" class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save Member</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
