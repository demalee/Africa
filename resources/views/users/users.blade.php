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
                                            <button type="button" class="btn btn-success mr-1">
                                                <i class="icon-pencil"></i> <a href="{{url('users/userdetails')}}">View User details</a>
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

                                        @foreach( $users as $user )
                                                <tr>
                                                    <td class="text-truncate" style="color: black">{{ $user->full_name }}</td>
                                                    <td class="text-truncate p-1" style="color: black">{{ $user->msisdn }}</td>
                                                    <td class="text-truncate p-1" style="color: black">{{ $user->email }}</td>
                                                    <td class="text-truncate p-1">
                                                     @if( $user->active_status == 0 )
                                                      <button type="button" class="btn btn-sm btn-outline-error round">Inactive</button>
                                                     @elseif( $user->active_status == 1 )
                                                        <button type="button" class="btn btn-sm btn-outline-success round">Active</button>
                                                     @endif
                                                    </td>
                                                    <td class="text-truncate p-1" style="color: black">
                                                      {{ $user->company_id }}
                                                    </td>
                                                    <td class="text-truncate p-1" style="color: black">
                                                        {{ $user->created_at }}
                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <button type="button" class="btn btn-sm btn-outline-success round">
                                                           View
                                                        </button>

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
            </div>
        </section>
    </inbox>
@endsection
