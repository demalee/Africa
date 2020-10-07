@extends('layouts.apps')
@section('content')
    <div class="container-fluid">
<section id="basic-form-layouts">
   <div class="row">
        <div class="col-sm-12">
        @include('message/message')
        </div>
    </div>


    
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-success">
                        <h4 class="card-title" id="basic-layout-form">Add User</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="px-3">
                         <form action="{{ route('postNewUser') }}" method="post">
                            <div class="form-body">
                                <h4 class="form-section">
                                    <i class="icon-user"></i> User Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">First Name</label>
                                             <input type="text" class="form-control" name="name" placeholder="First Name" value="" id="name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput2">Last Name</label>
                                            <input type="text" class="form-control" name="other_names" placeholder="Last Name" value="" id="other_names"> 
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput3">E-mail</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email Address" value="" id="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput4">Contact Number</label>
                                            <input type="text" class="form-control" name="phone" placeholder="Phone Number" id="phone">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="role">Select role</label>
                                           <select name="role" id="role" class="form-control">
                                                <option value="0" selected="" disabled="">Select Role</option>
                                                <option value="1">Super Admin</option>
                                                <option value="2">Admin</option>
                                                <option value="3">User</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput5">Select Company</label>
                                            <select name="company_id" class="form-control" required>
                                                <option value="">Select Company</option>
                                                @foreach($companies as $company)
                                                <option value="{{$company->id}}">{{$company->company_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                    </div>

                                </div>






                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-danger mr-1">
                                    <i class="icon-trash"></i> Cancel
                                </button>
                                <button type="submit" class="btn btn-success">
                                    <i class="icon-note"></i> Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


</section></div>
@endsection
