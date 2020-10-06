@extends('layouts.apps')
@section('content')
 <div class="card-body">

     <div class="row">
        <div class="col-sm-12">
        @include('message/message')
        </div>
    </div>

            
    <div class="card-block">
        <div class="table-responsive">
                <table id="recent-orders" class="table table-hover table-xl mb-0 stripe">
                    <thead>
                        <tr>
                            <th class="border-top-0" style="color: black">#</th>
                            <th class="border-top-0" style="color: black">Phone Numbers</th>
                            <th class="border-top-0" style="color: black">Date Created</th>
                            <th class="border-top-0" style="color: black">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            @php($count = 1)
                            @if(count($groupscontacts) > 0)
                                @foreach($groupscontacts as $groupcontact)
                                 <tr>
                                 <td class="text-truncate" style="color: black"> {{ $count }} </td>
                                 <td class="text-truncate" style="color: black">{{ $groupcontact->msisdn }}</td>
                                 <td class="text-truncate" style="color: black">{{ $groupcontact->created_at }}</td>
                                 <td><a  href="{{ url('group/deletecontacts_group') }}/{{$groupcontact->id}}/{{$groupcontact->group_id}}" class="btn btn-sm btn-danger">Delete</a></td>
                                 </tr>
                                 @php($count ++)
                                @endforeach 
                            @else
                                <tr>
                                    <td class="text-center" colspan="7" style="color: black">No contacts are available</td>
                                </tr>
                           @endif
                                 
                    </tbody> 
                </table>            
        </div>
    </div>
 </div>
@endsection
