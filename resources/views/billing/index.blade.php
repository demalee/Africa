@extends('layouts.apps')
@section('content')
    <inbox>
        <section id="shopping-cart">
            <div class="px">

                <div class="form-body">

                    <div class="form-actions">
                        <button type="submit"class="btn btn-success"  id="btnSubmit"  >
                            <i class="icon-user "></i><a href="#"> Top up your wallet</a>
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
                                            <th class="border-top-0" style="color: black">Company</th>
                                            <th class="border-top-0" style="color: black">Amount loaded</th>
                                            <th class="border-top-0" style="color: black">Network</th>
                                            <th class="border-top-0" style="color: black">Added</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate" style="color: black">

                                                Tester
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                               600
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                Safaricom
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                2020-03-22 14:34:20
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
        </section>
    </inbox>
@endsection

