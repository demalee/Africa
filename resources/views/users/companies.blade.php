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
                            </div></div>
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
                                            <th class="border-top-0" style="color: black">Action</th>
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

        </section>
    </inbox>
@endsection
