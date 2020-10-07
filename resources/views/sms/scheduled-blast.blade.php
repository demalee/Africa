@extends('layouts.apps')
@section('content')
 <div class="card-body">

    

            
    <div class="card-block">
        <div class="table-responsive">
                <table id="recent-orders" class="table table-hover table-xl mb-0 stripe">
                    <thead>
                        <tr>
                            <th class="border-top-0" style="color: black">Date</th>
                            <th class="border-top-0" style="color: black">Message</th>
                            <th class="border-top-0" style="color: black">Group Name</th>
                            <th class="border-top-0" style="color: black">Sender ID</th>
                            <th class="border-top-0" style="color: black">Target No</th>
                            <th class="border-top-0" style="color: black">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                           @php($count = 1)
                            @if(count($outboxSMSs) > 0)
                                @foreach($outboxSMSs as $outboxSMS)
                                 <tr>
                                 <td class="text-truncate" style="color: black"> {{ $outboxSMS->scheduled_time }} </td>
                                 <td class="text-truncate" style="color: black">{{ $outboxSMS->message }}</td>
                                 <td class="text-truncate" style="color: black">{{ $outboxSMS->group_name }}</td>
                                 <td class="text-truncate" style="color: black">{{ $outboxSMS->sender_id }}</td>
                                 <td class="text-truncate" style="color: black">{{ $outboxSMS->total_contacts }}</td>
                                 <td class="text-truncate" style="color: black">
                                     @if( $outboxSMS->status == 0 )
                                       Not Sent
                                     @elseif( $outboxSMS->status == 1 )
                                       Sent
                                     @elseif( $outboxSMS->status == 2 )
                                       Failed
                                     @endif
                                 </td>
                                 </tr>
                                 @php($count ++)
                                @endforeach 
                            @else
                                <tr>
                                    <td class="text-center" colspan="7" style="color: black">No Messages Found</td>
                                </tr>
                           @endif
                                 
                    </tbody> 
                </table>            
        </div>
    </div>
 </div>
@endsection
