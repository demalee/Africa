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
                            <th class="border-top-0" style="color: black">Msisdn</th>
                            <th class="border-top-0" style="color: black">Shortcode</th>
                        </tr>
                    </thead>
                    <tbody>
                           @php($count = 1)
                            @if(count($inboxSMSs) > 0)
                                @foreach($inboxSMSs as $outboxSMS)
                                 <tr>
                                 <td class="text-truncate" style="color: black"> {{ $outboxSMS->created_at }} </td>
                                 <td class="text-truncate" style="color: black">{{ $outboxSMS->message }}</td>
                                 <td class="text-truncate" style="color: black">{{ $outboxSMS->msisdn }}</td>
                                 <td class="text-truncate" style="color: black">{{ $outboxSMS->shortcode }}</td>
                                 
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

