@extends('layouts.apps')
@section('content')
<inbox>
<section id="shopping-cart">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title-wrap bar-warning">
                        <h4 class="card-title">sms inbox</h4>

                    </div>
                </div>
                <div class="card-body">
                    <div class="card-block">
                        <div class="table-responsive">
                            <table id="recent-orders" class="table table-hover table-xl mb-0">
                                <thead>
                                <tr>
                                    <th class="border-top-0" style="color: black">Date</th>
                                    <th class="border-top-0" style="color: black">Text</th>
                                    <th class="border-top-0" style="color: black">From</th>
                                    <th class="border-top-0" style="color: black">To</th>

                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-truncate"><a href="#"></a></td>
                                    <td class="text-truncate">

                                        <span>

</span>
                                    </td>
                                    <td class="text-truncate p-1">

                                    </td>
                                    <td class="text-truncate p-1">

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
</section></inbox>
@endsection
