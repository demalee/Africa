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
                                <p style="color: black">Groups</p>
                            </div></div>
                            <div class="px">
                                <form method="post" action="{{(url('create-group'))}}" >
                                    <div class="form-body">



                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="projectinput1">Group name</label>
                                                        <input type="text" id="group" class="form-control" name="group" placeholder="Test">
                                                    </div>
                                                </div>

                                            </div>


                                            <div class="form-actions">
                                                <button type="submit"class="btn btn-success"  id="btnSubmit"  >
                                                    <i class="icon-note"></i> Add group
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
                                            <th class="border-top-0" style="color: black">Group Name</th>
                                            <th class="border-top-0" style="color: black">Created_at</th>
                                            <th class="border-top-0" style="color: black">No of contacts</th>
                                            <th class="border-top-0" style="color: black">View Contacts</th>
                                            <th class="border-top-0" style="color: black">Delete</th>


                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($groups as $group)
                                               <tr>
                                                    <td class="text-truncate" style="color: black">

                                                       {{ $group->group_name }}
                                                    </td>
                                                    <td class="text-truncate p-1" style="color: black">
                                                        {{ $group->created_at }}
                                                    </td>
                                                    <td class="text-truncate p-1" style="color: black">
                                                        {{ $group->total_contacts }}
                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <a href="{{ url('group/group-contacts') }}/{{$group->id}}" class="btn btn-sm btn-outline-success round">
                                                            View
                                                        </button>

                                                    </td>
                                                    <td class="text-truncate p-1">
                                                        <a href="{{ url('group/deletegroup') }}/{{$group->id}}" class="btn btn-sm btn-outline-danger round">
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
