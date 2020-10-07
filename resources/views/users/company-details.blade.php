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
                                <p style="color: black">Company Details</p>
                            </div></div>
                            <div class="px">
                                
	                            <div class="col-md-12">
					            <button class="btn btn-primary mb-2" data-target="#topUp" data-toggle="modal">Top Up Company</button>
					            &nbsp;&nbsp;
					            <button class="btn btn-primary mb-2">Balance: 3,344,913 units</button>&nbsp;&nbsp;
					            <button class="btn btn-primary mb-2" data-target="#setRate" data-toggle="modal">Set Rate</button>
						        </div>

						         <hr>
						        <div class="row">
						        <div class="col-md-12">
						            <div class="card m-b-30">
						                <div class="card-body">
						                    <h4 class="mt-0 header-title">Company Details</h4>
						                    <div class="row">
						                        <div class="col-md-3" style="color: black">
						                            <strong>Name:</strong> {{$company->company_name}}
						                        </div>
						                        <div class="col-md-3" style="color: black">
						                            <strong>Users:</strong> {{count($system_users)}}
						                        </div>
						                         <div class="col-md-3" style="color: black">
						                            <strong>Status:</strong>Active </div>
						                        </div>

						                    </div>
						                    <hr>
						                </div>
						            </div>
						        </div>
						    </div>

						    <div class="row">
						        <div class="col-md-12">
						            <div class="card m-b-30">
						                <div class="card-body">
						                    <h4 class="mt-0 header-title">Users</h4>
						                    <div class="table-responsive">
						                      <table id="recent-orders" class="table table-hover table-xl mb-0 stripe">
			                                        <thead>
			                                        <tr>
			                                            <th class="border-top-0" style="color: black">Name</th>
			                                            <th class="border-top-0" style="color: black">Email</th>
			                                            <th class="border-top-0" style="color: black">Phone Number</th>
			                                            <th class="border-top-0" style="color: black">Date Created</th>
			                                        </tr>
			                                        </thead>
			                                        <tbody>
			                                            @foreach($system_users as $company_user)
			                                               <tr>
			                                                    <td class="text-truncate" style="color: black">

			                                                       {{ $company_user->full_name }}
			                                                    </td>
			                                                    <td class="text-truncate p-1" style="color: black">
			                                                         {{ $company_user->email }}
			                                                    </td>
			                                                    <td class="text-truncate p-1" style="color: black">
			                                                         {{ $company_user->msisdn }}
			                                                    </td>
			                                                     <td class="text-truncate p-1" style="color: black">
			                                                         {{ $company_user->created_at }}
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
                        </div>
                    </div>
                </div>

        </section>
    </inbox>
@endsection
