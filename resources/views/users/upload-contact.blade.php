@extends('layouts.apps')
@section('content')
    <div class="container-fluid">
        <section id="basic-form-layouts">
            @include('message/message')
                <div class="row">
                    <div class="col-sm-12">
                        <h2 class="content-header"></h2>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title-wrap bar-success">
                                <h4 class="card-title" id="basic-layout-form">Upload contacts</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-3">
                                <form method="post" action="#">

                                <div class="form-body">
                                        <h4 class="form-section">
                                            <i class="icon-user"></i> Contact groups</h4>


                                                <div class="form-group">
                                                    <label for="projectinput5">Select Contact Group</label>
                                                    <select id="projectinput5" name="group" class="form-control" >
                                                        <option value="none" selected="" disabled="">Contact group</option>
                                                        <option value="design">design</option>
                                                        <option value="development">development</option>
                                                        <option value="illustration">illustration</option>
                                                        <option value="branding">branding</option>
                                                        <option value="video">video</option>
                                                    </select>




                                        </div>

                                        <div class="form-group">
                                            <label>Upload File(Use format on the right)</label>
                                            <input type="file" class="form-control-file" id="projectinput7" name="contact">
                                        </div>

                                    </div>

                                    <div class="form-actions">
                                        <button type="button" class="btn btn-danger mr-1">
                                            <i class="icon-trash"></i> Cancel
                                        </button>
                                        <button type="button" class="btn btn-success">
                                            <i class="icon-note"></i> Upload Contacts
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title-wrap bar-warning">
                                <h4 class="card-title" id="basic-layout-form">          <i class="icon-direction"></i> Document format</h4>

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="px-3">


                                    <div class="form-body">
                                        <h4 class="form-section">

                                        <div class="row">

                                                <div class="form-group">

                                                    <img
                                                        src="{{asset('assets/img/users/excel.jpeg')}}"
                                                        alt="" title="">                                                </div>
                                            </div>

                                        </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section></div>
@endsection
