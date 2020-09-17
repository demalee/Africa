@extends('layouts.apps')
@section('content')
<home>
    <div class="card border-left my-lg-0 border-warning border-3">
        <div class="card-block pt-3">
            <p>App Name: Sandbox</p>
            <p>Username: sandbox</p>

        </div>
    </div>
    <section id="taskboard">
        <div class="row taskboard">
            <div class="col-md-6 col-12">

                <div class="card border-top my-4 border-warning border-3">
                    <div class="card-block pt-3">

                        <h5 class="text-bold-500 warning float-left">Bulk SMS</h5>
                        <div class="actions float-right">
                            <i class="ft-refresh-ccw mr-1 info"></i>
                            <i class="ft-maximize danger"></i>
                        </div>
                    </div>
                    <center> <p>No data to display</p></center>
                </div>
            </div>
            <div class="col-md-6 col-12">

                <div class="card border-top my-4 border-warning border-3">
                    <div class="card-block pt-3">
                        <h5 class="text-bold-500 warning float-left">Airtime</h5>

                        <div class="actions float-right">
                            <i class="ft-refresh-ccw mr-1 info"></i>
                            <i class="ft-maximize danger"></i>
                        </div>

                    </div>

                    <center> <p>No data to display</p></center>
                </div>
            </div>
            <div class="col-md-6 col-12">

                <div class="card border-top my-4 border-warning border-3">
                    <div class="card-block pt-3">

                        <h5 class="text-bold-500 warning float-left">USSD</h5>
                        <div class="actions float-right">
                            <i class="ft-refresh-ccw mr-1 info"></i>
                            <i class="ft-maximize danger"></i>
                        </div>
                    </div>
                    <center> <p>No data to display</p></center>
                </div>
            </div>
            <div class="col-md-6 col-12">

                <div class="card border-top my-4 border-warning border-3">
                    <div class="card-block pt-3">
                        <h5 class="text-bold-500 warning float-left">Payments</h5>

                        <div class="actions float-right">
                            <i class="ft-refresh-ccw mr-1 info"></i>
                            <i class="ft-maximize danger"></i>
                        </div>

                    </div>

                    <center> <p>No data to display</p></center>
                </div>
            </div>
        </div></section>

</home>




@endsection
