@extends('layouts.apps')
@section('content')
    <inbox>
        <section id="shopping-cart">

            <div class="row">
                <div class="col-sm-12">
                @include('message/message')
                </div>
            </div>



            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title-wrap bar-warning">
                                <h4 class="card-title"></h4>
                                <p style="color: black">Companies</p>
                            </div>
                            <div class="px">

                                <div class="form-body">

                                    <div class="form-actions">
                                        <button type="button" class="btn btn-outline-success btn-block btn-small" data-toggle="modal" data-target="#topup">
                                           Top Up
                                        </button>

                                    </div>

                                </div>


                            </div>
                        </div>
                            <div class="px">
                                <form method="post" action="{{(url('post-company'))}}" >
                                    <div class="form-body">



                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Company name</label>
                                                        <input type="text" id="company" class="form-control" name="company" placeholder="Test Company">
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="projectinput1">SMS Rate</label>
                                                        <input type="text" id="company_sms_rate" class="form-control" name="company_sms_rate" placeholder="2.0">
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-actions">
                                                <button type="submit"class="btn btn-success"  id="btnSubmit"  >
                                                    <i class="icon-note"></i> Add company
                                                </button>
                                                <button type="button" class="btn btn-danger mr-1">
                                                    <i class="icon-trash"></i> Cancel
                                                </button>

                                            </div>

                                    </div>

                                    <div class="user-login-reg__error">
                                        @if(Session::has('errors'))
                                            {{Session::get('errors')}}
                                        @endif

                                    </div>


                                </form>



                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0 stripe">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0" style="color: black">Company Name</th>
                                            <th class="border-top-0" style="color: black">SMS rates</th>
                                            <th class="border-top-0" style="color: black">Created</th>
                                            <th class="border-top-0" style="color: black">View</th>
                                            <th class="border-top-0" style="color: black">Edit</th>
                                            <th class="border-top-0" style="color: black">Delete</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($companies as $company)
                                               <tr>
                                                    <td class="text-truncate" style="color: black">

                                                       {{ $company->company_name }}
                                                    </td>
                                                    <td class="text-truncate p-1" style="color: black">
                                                        {{ $company->company_sms_rate }}
                                                    </td>
                                                    <td class="text-truncate p-1" style="color: black">
                                                        {{ $company->created_at }}
                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <a href="{{ url('company/company-details') }}/{{$company->id}}" class="btn btn-sm btn-outline-success round">
                                                            View
                                                        </a>

                                                    </td>
                                                   <td class="text-truncate p-1">
                                                       <button type="button" class="btn btn-outline-success btn-block btn-small" data-toggle="modal" data-target="#bootstrap">
                                                      Edit
                                                       </button>


                                                   </td>
                                                    <td class="text-truncate p-1">
                                                        <a href="{{ url('deletecompany') }}/{{$company->id}}" class="btn btn-sm btn-outline-danger round">
                                                            Delete
                                                        </a>

                                                    </td>
                                                </tr>

                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="modal fade text-left" id="bootstrap" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel35"> Edit Flooks</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="email">Company name</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="name">
                                </fieldset>
                                <br>
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="title">Company Phone</label>
                                    <input type="tel" class="form-control" name="msisdn" id="phone" placeholder="phone">
                                </fieldset>
                                <br>
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="title">Company Address</label>
                                    <input type="text" class="form-control" name="address"  placeholder="address">
                                </fieldset>
                                <br>
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="title">Town</label>
                                    <input type="text" class="form-control" name="town"  placeholder="Town">
                                </fieldset>
                                <br>
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="title1">Comment</label>
                                    <textarea class="form-control" name="comment" id="title1" rows="3" placeholder="Description"></textarea>
                                </fieldset>
                            </div>
                            <div class="modal-footer">
                                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                <input type="submit" class="btn btn-outline-primary btn-lg" value="Save changes">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="modal fade text-left" id="topup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel35" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h3 class="modal-title" id="myModalLabel35"> Top Up Company</h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form>
                            <div class="modal-body">
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="email">Company name</label>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="name">
                                </fieldset>
                                <br>
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="title">Company Phone</label>
                                    <input type="tel" class="form-control" name="msisdn" id="phone" placeholder="phone">
                                </fieldset>
                                <br>
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="title">Amount</label>
                                    <input type="text" class="form-control" name="amount"  placeholder="address">
                                </fieldset>
                                <br>

                            </div>
                            <div class="modal-footer">
                                <input type="reset" class="btn btn-outline-secondary btn-lg" data-dismiss="modal" value="close">
                                <input type="submit" class="btn btn-outline-primary btn-lg" value="Top Up">
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </section>
    </inbox>
    <script src="../app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="../app-assets/vendors/js/core/popper.min.js"></script>
    <script src="../app-assets/vendors/js/core/bootstrap.min.js"></script>


    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="../app-assets/js/app-sidebar.js"></script>
    <script src="../app-assets/js/notification-sidebar.js"></script>
    <script src="../app-assets/js/customizer.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="../app-assets/js/components-modal.min.js"></script>
@endsection
