@extends('layouts.apps')
@section('content')
    <inbox>
        <section id="shopping-cart">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title-wrap bar-warning">
                                <h4 class="card-title"></h4>
                                <p style="
color: black">
                                </p>
                            </div>
                            <div class="px">

                                    <div class="form-body">

                                        <div class="form-actions">
                                            <button type="submit"class="btn btn-success"  id="btnSubmit"  >
                                                <i class="icon-user m-1"></i><a href="{{url('users/usercreate')}}"> Add User</a>
                                            </button>
                                            <button type="button" class="btn btn-success mr-1">
                                                <i class="icon-pencil"></i> <a href="{{url('users/report')}}">Generate report</a>
                                            </button>

                                        </div>

                                    </div>


                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0 stripe">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0" style="color: black">Name</th>
                                            <th class="border-top-0" style="color: black">Phone Number</th>
                                            <th class="border-top-0" style="color: black">Email</th>
                                            <th class="border-top-0" style="color: black">Status</th>
                                            <th class="border-top-0" style="color: black">Company</th>
                                            <th class="border-top-0" style="color: black">Added</th>
                                            <th class="border-top-0" style="color: black">Action</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate" style="color: black">

                                                Tester
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                254706255455
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                               test@admin.com
                                            </td>
                                            <td class="text-truncate p-1">
                                                <button type="button" class="btn btn-sm btn-outline-success round">
                                                   Active
                                                </button>

                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                Guardo
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                2 weeks ago
                                            </td>
                                            <td class="text-truncate p-1">
                                                <button type="button" class="btn btn-sm btn-outline-success round">
                                                   View
                                                </button>

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
