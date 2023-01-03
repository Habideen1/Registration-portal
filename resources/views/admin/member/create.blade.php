@extends('layouts.master')

@section('title', 'Member' )

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">NASFAT</h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ url('admin/add-member') }}" method="post">
                @csrf

                <div class="mb-3">
                    <select required name="branch" type="text" class="form-control">
                        <option value="Select branch">Select branch </option>
                        <option value="Agbado">Agbado</option>
                        <option value="Adiyan">Adiyan</option>
                        <option value="Alagboole">Alagboole</option>
                        <option value="Olambe/Alausa">Olambe/Alausa</option>
                        <option value="Ifo">Ifo</option>
                        <option value="Itoki">Itoki</option>
                        <option value="Itori">Itori</option>
                        <option value="Lisa">Lisa</option>
                        <option value="Olomore">Olomore</option>
                        <option value="Abeokuta">Abeokuta</option>
                        <option value="Owu">Owu</option>
                        <option value="Obada">Obada</option>
                        <option value="Papalanto">Papalanto</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input required name="full_name" type="text" placeholder="Your Full Name" class="form-control">
                </div>

                <div class="mb-3">
                    <input required name="email" type="text" placeholder="Email" class="form-control">
                </div>

                {{-- <div class="mb-3">
                    <label>Age Group</label>
                    <input required name="" type="text" name="age_group" class="form-control">
                </div> --}}

                <div class="mb-3">
                    <input required name="phone" type="text" placeholder="Phone" class="form-control">
                </div>

                <div class="mb-3">
                    <select required name="branch" type="text" class="form-control">
                        <option disabled selected value="">Select Age Bracket</option>
                        <option value="15 - 25">15 - 25</option>
                        <option value="26 - 35">26 - 35</option>
                        <option value="36 - 40">36 - 40</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select required name="branch" type="text" class="form-control">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="mb-3">
                    <textarea name="home_address" id="" placeholder="Home Address" ></textarea>
                    {{-- <input required name="home_address" type="text" placeholder="Home Address" class="form-control"> --}}
                </div>

                <div class="mb-3">
                    <input required name="next_of_kin" type="text" placeholder="Next of Kin Details" class="form-control">
                </div>

                <div class="mb-3">
                    <select required name="qualification" type="text" class="form-control">
                        <option value="">Select Qualification</option>
                        <option value="SSCE">SSCE</option>
                        <option value="NCE">NCE</option>
                        <option value="OND">OND</option>
                        <option value="HND">HND</option>
                        <option value="Bsc">Bsc</option>
                        <option value="Msc">Msc</option>
                        <option value="Phd">Phd</option>
                    </select>
                </div>

                <div class="mb-3">
                    <select required name="occupation" type="text" class="form-control">
                        <option value="Select Occupation">Select Occupation </option>
                        <option value="Law">Law</option>
                        <option value="Consultancy and ICT">Consultancy and ICT</option>
                        <option value="Banking">Banking</option>
                        <option value="Teaching">Teaching</option>
                        <option value="Photograph">Photography</option>
                        <option value="Farming">Farming:</option>
                        <option value="Film making">Film making</option>
                        <option value="Mass Communication">Mass Communication</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input required name="employer" type="text" placeholder="Employer" class="form-control">
                </div>

                <div class="mb-3">
                    <select required name="ailment" type="text" class="form-control">
                        <option value="Select Occupation">Do you have any Known ailment? </option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="mb-3">
                    <input required name="pin" type="text" placeholder="Enter your pin" class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-success">Register</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
