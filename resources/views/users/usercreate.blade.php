@extends('layouts.apps')
@section('content')
    <div class="container-fluid">
<section id="basic-form-layouts">
    <div class="row">
        <div class="col-sm-12">

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
                        <form class="form">
                            <div class="form-body">
                                <h4 class="form-section">
                                    <i class="icon-user"></i> User Details</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput1">First Name</label>
                                            <input type="text" id="projectinput1" class="form-control" name="fname">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput2">Last Name</label>
                                            <input type="text" id="projectinput2" class="form-control" name="lname">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput3">E-mail</label>
                                            <input type="text" id="projectinput3" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput4">Contact Number</label>
                                            <input type="text" id="projectinput4" class="form-control" name="msisdn">
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="projectinput5">Select role</label>
                                            <select id="projectinput5" name="interested" class="form-control">
                                                <option value="none" selected="" disabled="">Role</option>
                                                <option value="design">Group admin</option>
                                                <option value="development">Normal user</option>

                                            </select>
                                        </div>
                                    </div>


                                </div>




                            </div>

                            <div class="form-actions">
                                <button type="button" class="btn btn-danger mr-1">
                                    <i class="icon-trash"></i> Cancel
                                </button>
                                <button type="button" class="btn btn-success">
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
