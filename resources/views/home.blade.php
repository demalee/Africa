@extends('layouts.apps')
@section('content')
<home>
    <div class="card border-left my-lg-0 border-warning border-3">
        <div class="card-block pt-3">
            <p style="color: black">App Name: Sandbox</p>
            <p style="color: black">Username: sandbox</p>

        </div>
    </div>
    <section id="taskboard">
        <div class="row taskboard">
            <div class="col-md-6 col-12">

                <div class="card border-top my-4 border-warning border-3">
                    <div class="card-block pt-3">

                        <p class="text-bold-300 warning float-left">Bulk SMS</p>
                        <div class="actions float-right">
                            <i class="ft-refresh-ccw mr-1 info"></i>
                            <i class="ft-maximize danger"></i>
                        </div>
                    </div>
                    <center> <p style="color: black">No data to display</p></center>
                </div>
            </div>
            <div class="col-md-6 col-12">

                <div class="card border-top my-4 border-warning border-3">
                    <div class="card-block pt-3">
                        <p class="text-bold-300 warning float-left">Airtime</p>

                        <div class="actions float-right">
                            <i class="ft-refresh-ccw mr-1 info"></i>
                            <i class="ft-maximize danger"></i>
                        </div>

                    </div>

                    <center> <p style="color: black">No data to display</p></center>
                </div>
            </div>
            <div class="col-md-6 col-12">

                <div class="card border-top my-4 border-warning border-3">
                    <div class="card-block pt-3">

                        <p class="text-bold-300 warning float-left">USSD</p>
                        <div class="actions float-right">
                            <i class="ft-refresh-ccw mr-1 info"></i>
                            <i class="ft-maximize danger"></i>
                        </div>
                    </div>
                    <center> <p style="color: black">No data to display</p></center>
                </div>
            </div>
            <div class="col-md-6 col-12">

                <div class="card border-top my-4 border-warning border-3">
                    <div class="card-block pt-3">
                        <p class="text-bold-300 warning float-left">Payments</p>

                        <div class="actions float-right">
                            <i class="ft-refresh-ccw mr-1 info"></i>
                            <i class="ft-maximize danger"></i>
                        </div>

                    </div>

                    <center> <p style="color: black">No data to display</p></center>
                </div>
            </div>
        </div></section>

</home>
@endsection
