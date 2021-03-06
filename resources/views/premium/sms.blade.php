@extends('layouts.apps')
@section('content')
    <section id="coming-soon">
        <div class="container-fluid">
            <div class="row full-height-vh">
                <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                    <div class="card p-3 box-shadow-2">
                        <div class="card-header text-center">
                            {{--                            <img alt="avtar" class="img-fluid mb-3" src="../app-assets/img/logos/logo-color-big.png" width="80">--}}
                            <h4 class="text-uppercase text-bold-400 grey darken-1">Coming Soon</h4>
                        </div>
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-text pb-2">WE ARE LAUNCHING SOON.</h5>
                                <div id="clockFlat" class="card-text getting-started pt-1 mt-2 display-inline-block white">
                                    <div class="clockCard px-3 py-3 mr-3 mb-3 bg-danger bg-darken-5 white box-shadow-2"> <span> </span> <br>
                                        <p class="lead mt-2 mb-0">2  Weeks </p>
                                    </div>
                                    <div class="clockCard px-3 py-3 mr-3 mb-3 bg-danger bg-darken-5 white box-shadow-2"> <span> </span> <br>
                                        <p class="lead mt-2 mb-0"> Days </p>
                                    </div>
                                    <div class="clockCard px-3 py-3 mr-3 mb-3 bg-danger bg-darken-5 white box-shadow-2"> <span> </span> <br>
                                        <p class="lead mt-2 mb-0"> Hours </p>
                                    </div>
                                    <div class="clockCard px-2 py-3 mr-3 mb-3 bg-danger bg-darken-5 white box-shadow-2"> <span> </span> <br>
                                        <p class="lead mt-2 mb-0"> Minutes </p>
                                    </div>
                                    <div class="clockCard px-2 py-3 mr-3 mb-3 bg-danger bg-darken-5 white box-shadow-2"> <span> </span> <br>
                                        <p class="lead mt-2 mb-0"> Seconds </p>
                                    </div>
                                </div>
                                <div class="col-12 pt-1">
                                    <p class="card-text lead"></p>
                                </div>
                                <div class="col-12 text-center pt-2">
                                    <p class="socialIcon card-text">
                                        <a class="grey darken-1"><i class="fa fa-facebook-square"></i></a>
                                        <a class="grey darken-1"><i class="fa fa-twitter-square"></i></a>
                                        <a class="grey darken-1"><i class="fa fa-google-plus-square"></i></a>
                                        <a class="grey darken-1"><i class="fa fa-linkedin-square"></i></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
