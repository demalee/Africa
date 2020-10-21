@extends('layouts.apps')
@section('content')
    <inbox>
        <section id="shopping-cart">
            <div class="px">

                <div class="form-body">

                    <div class="form-actions">
                        <button type="button" class="btn btn-success mr-1" data-toggle="modal" data-target="#topup">
                            <i class="icon-user "></i>  Top Up
                        </button>

                        <button type="button" class="btn btn-success mr-1">
                            <i class="icon"></i> <a href="#">Safaricom: 2</a>
                        </button>
                        <button type="button" class="btn btn-success mr-1">
                            <i class="icon"></i> <a href="#">Airtel: 0</a>
                        </button>
                        <button type="button" class="btn btn-success mr-1">
                            <i class="icon"></i> <a href="#">Telkom: 0</a>
                        </button>
                    </div>

                </div>


            </div>
            <div class="row" style="color: black">
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card" >
                        <div class="card-body">
                            <div class="px-3 py-3">
                                <div class="media">
                                    <div class="media-body text-left align-self-center">
                                        <i class="icon-wallet info font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>278</h3>
                                        <span>Total Balance</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="px-3 py-3">
                                <div class="media">
                                    <div class="media-body text-left align-self-center">
                                        <i class="icon-users warning font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>156</h3>
                                        <span>Companies</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="px-3 py-3">
                                <div class="media">
                                    <div class="media-body text-left align-self-center">
                                        <i class="icon-wallet success font-large-2 float-left"></i>
                                    </div>
                                    <div class="media-body text-right">
                                        <h3>64 units</h3>
                                        <span>Total Shared</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="form-body">

                                <div class="form-actions">

                                    <button type="submit"class="btn btn-success"  id="btnSubmit"  >
                                        <i class="icon-user m-1"></i><a href="#"> Generate report</a>
                                    </button>

                                </div>

                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0 stripe">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0" style="color: black">Date</th>
                                            <th class="border-top-0" style="color: black">Company</th>
                                            <th class="border-top-0" style="color: black">Amount loaded</th>
                                            <th class="border-top-0" style="color: black">Network</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate" style="color: black">
                                                2020-03-22 14:34:20
                                                
                                            </td>
                                             <td class="text-truncate p-1" style="color: black">
                                                Tester
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                               600
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                Safaricom
                                            </td>
                                           
                                        </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
                         <form method="post" method="post" action="{{(url('top-up-units'))}}" >
                                                                                {{ csrf_field() }}
                            <div class="modal-body">
                               

                               <div class="row">
                                 <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="network">Network</label>
                                        <select name="network" class="form-control" id="network" required>
                                            <option value="" diasbled selected>Select Network</option>
                                             @foreach($networks as $network)
                                                <option value="{{ $network->id }}" >{{ $network->name }}</option>
                                              @endforeach  
                                        </select>
                                    </div>
                                 </div>
                                </div>

                               <!--  <fieldset class="form-group floating-label-form-group">
                                    <label for="title">Network</label>
                                    <input type="text" class="form-control" name="network" id="network" placeholder="Network">
                                </fieldset> -->


                                <br>
                                <fieldset class="form-group floating-label-form-group">
                                    <label for="title">Amount</label>
                                    <input type="text" class="form-control" name="amount"  placeholder="Amount">
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

