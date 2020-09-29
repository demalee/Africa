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
color: black">Report
                                </p>
                            </div></div>
                        <div class="card-body">

                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="recent-orders" class="table table-hover table-xl mb-0 stripe">
                                        <thead>
                                        <tr>
                                            <th class="border-top-0" style="color: black"> Date</th>
                                            <th class="border-top-0" style="color: black">Group Name</th>
                                            <th class="border-top-0" style="color: black">Message</th>
                                            <th class="border-top-0" style="color: black">Promotional</th>
                                            <th class="border-top-0" style="color: black">No of Characters</th>
                                            <th class="border-top-0" style="color: black">No of texts in message</th>
                                            <th class="border-top-0" style="color: black">Sent to SDP</th>
                                            <th class="border-top-0" style="color: black">Delivered</th>
                                            <th class="border-top-0" style="color: black">Failed</th>
                                            <th class="border-top-0" style="color: black">Bounced</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="text-truncate" style="color: black">

                                                2020-03-22 14:34:20
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                               Euro Group
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                               testing
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                Flooks
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                             157
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                1
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                123
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                                4
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                               yes
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                              0
                                            </td>
                                            <td class="text-truncate p-1" style="color: black">
                                               1
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

