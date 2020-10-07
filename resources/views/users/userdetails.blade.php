@extends('layouts.apps')
@section('content')

    <div class="col-sm-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title-wrap bar-primary">
                    <H4 class="card-title" ></H4>
                        <p style="color: black">User Details</p>

                </div>
            </div>
            <div class="card-body">
                <div class="card-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <ul class="no-list-style">
                                <li class="mb-2">
                                    <span class="grey line-height-0 display-block mb-2 text-bold-500"><a><i class="ft- font-small-3"></i> First name</a>:  Kibet</span>

                                </li>  <br>
                                <li class="mb-2">
                                    <span class="grey line-height-0 display-block mb-2 text-bold-500"><a><i class="ft- font-small-3"></i> Other names</a>:  Demalee</span>

                                </li>  <br>
                            </ul>
<br>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <ul class="no-list-style">
                                <li class="mb-2">
                                    <span class="grey line-height-0 display-block mb-2 text-bold-500"><a><i class="ft- font-small-3"></i> Email</a>:  dev.demalee@gmail.com</span>

                                </li>
                                <br>
                                <li class="mb-2">
                                    <span class="grey line-height-0 display-block mb-2 text-bold-500"><a><i class="ft- font-small-3"></i> Phone</a>: 25470000789</span>

                                </li>
                                <br>
                            </ul>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <ul class="no-list-style">
                                <li class="mb-2">
                                    <span class="grey line-height-0 display-block mb-2 text-bold-500"><a><i class="fa-buffer font-small-3"></i> Status</a>:  Inactive</span>

                                </li>
                                <br>
                                <li class="mb-2">
                                    <span class="grey line-height-0 display-block mb-2 text-bold-500"><a><i class="fa-calendar-check font-small-3"></i> Added on</a>: </span>

                                </li>
                                <br>
                                <button type="button" class="btn btn-sm btn-outline-success round">
                                    Deactivate
                                </button>
                            </ul>

                        </div>  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                            <ul class="no-list-style">
                                <li class="mb-2">
                                    <span class="grey line-height-0 display-block mb-2 text-bold-500"><a><i class="ft-h font-small-3"></i> Company</a>:  Uk Tech</span>
                                    <form>


                                    </form>
                                </li>  <br>
                                <li class="mb-2">
                                    <span class="grey line-height-0 display-block mb-2 text-bold-500"><a><i class="ft- font-small-3"></i> Phone</a>: 25470000789</span>

                                </li>  <br>
                                <form>
                                    <button type="button" class="btn btn-sm btn-outline-danger round">
                                        Delete
                                    </button>
                                </form>
                            </ul>

                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-warning">
                        <h4 class="card-title" id="horz-layout-colored-controls">Update User details</h4>
                    </div>

                </div>
                <div class="card-body">
                    <div class="px-3">
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <h4 class="form-section">
                                    <i class="icon-direction"></i> Owner Detail</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput1">First Name: </label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput1" class="form-control border-primary" name="firstname">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput2">Last Name: </label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput2" class="form-control border-primary" name="lastname">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput3">Email: </label>
                                            <div class="col-md-9">
                                                <input type="email" id="userinput3" class="form-control border-primary" name="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-md-3 label-control" for="userinput4">Mobile: </label>
                                            <div class="col-md-9">
                                                <input type="text" id="userinput4" class="form-control border-primary" name="mobile">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="form-section">
                                    <i class="ft-mail"></i> Company Info</h4>



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group col-md-12">
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                    <div class="custom-control custom-radio display-inline-block ml-1">
                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">UK</label>
                                                    </div></div></div> <div class="col-md-4">
                                                        <div class="form-group row">
                                                    <div class="custom-control custom-radio display-inline-block">
                                                        <input type="radio" id="customRadioInline2" checked name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Japanese Company</label>
                                                    </div></div></div>
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                    <div class="custom-control custom-radio display-inline-block">
                                                        <input type="radio" id="customRadioInline2" checked name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Flook</label>
                                                    </div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                                <h4 class="form-section">
                                    <i class="ft-mail"></i>Role Details</h4>



                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                <div class="input-group col-md-12">
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                    <div class="custom-control custom-radio display-inline-block ml-1">
                                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline1">Admin</label>
                                                    </div></div></div>
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                    <div class="custom-control custom-radio display-inline-block">
                                                        <input type="radio" id="customRadioInline2" checked name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Member</label>
                                                    </div></div></div>
                                                    <div class="col-md-4">
                                                        <div class="form-group row">
                                                    <div class="custom-control custom-radio display-inline-block">
                                                        <input type="radio" id="customRadioInline2" checked name="customRadioInline1" class="custom-control-input">
                                                        <label class="custom-control-label" for="customRadioInline2">Administrator</label>
                                                    </div></div></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <div class="form-actions right">
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

@endsection
