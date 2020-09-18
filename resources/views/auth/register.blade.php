@extends('layouts.app')

@section('content')

    <section id="regestration">
        <div class="container-fluid">
            <div class="row full-height-vh">
                <div class="col-12 d-flex align-items-center justify-content-center gradient-aqua-marine">
                    <div class="card px-4 py-2 box-shadow-2">
                        <div class="card-header text-center">
{{--                            <img src="../app-assets/img/logos/logo-color-big.png" alt="company-logo" class="mb-3" width="80">--}}
                            <h4 class="text-uppercase text-bold-400 grey darken-1">Signup</h4>
                        </div>
                        <div class="card-body">
                            <div class="card-block mx-auto">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="name" class="">{{ __('Name') }}</label>

                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="email" class="">{{ __('E-Mail Address') }}</label>

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="password" class="">{{ __('Password') }}</label>

                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label for="password-confirm" class="">{{ __('Confirm Password') }}</label>

                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                            @enderror                                        </div>
                                    </div>
                                    <div class="form-group col-sm-offset-1">
                                        <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                            <input type="checkbox" class="custom-control-input" checked id="terms">
                                            <label class="custom-control-label pl-2" for="terms">I agree <a>terms and conditions</a></label>
                                        </div>
                                    </div>
                                    <div class="form-group text-center">
                                        <button type="submit"  class="btn btn-warning px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">                                    {{ __('Register') }}
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
