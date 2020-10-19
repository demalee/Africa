@extends('layouts.apps')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@section('content')
    <section id="coming-soon">
        <div class="container-fluid"><!-- Basic form layout section start -->
            <section id="basic-form-layouts">
                <div class="row">
                    <div class="col-sm-12">
                    @include('message/message')
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-success">
                                    <h4 class="card-title" id="basic-layout-form">Send Bulk</h4>
                                </div>
                                {{--                                <p class="mb-0">This is the most basic and cost estimation form is the default position.</p>--}}
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form method="post" method="post" action="{{(url('post-bulk'))}}" >
                                                                                {{ csrf_field() }}
                                        <div class="form-body">

                                            <!-- <input type="hidden" name="sender_id" value="sender_id"> -->
                                            <!-- <input type="hidden" name="sender_id" value=""> -->


                                                <div class="form-group">
                                                    <label for="issueinput5">Select short code</label>
                                                    <select id="issueinput5" name="code" class="form-control" required data-toggle="tooltip" data-trigger="hover" data-placement="top"
                                                            data-title="Priority">
                                                            <option value="">Select Shortcode</option>
                                                            @foreach($senders as $sender)
                                                             <option  name="sender_id" value="{{ $sender->sender_id }}">{{ $sender->sender_id }}</option>
                                                            @endforeach
                                                    </select>
                                                    
                                                </div>






                                            
                                            <div class="form-group ">
                                                <label  id="messageLabel" for="message">Message Brief</label>
                                                <textarea required rows="5" type="textarea" id="message" class="form-control input-sm " name="message" placeholder="Message" maxlength="140"></textarea>


                                                <span class="help-block" style="color: black"><p id="characterLeft" class="help-block " style="color: black">You have reached the limit</p></span>

                                            </div>
                                            <div class="row">
                                                 <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="timesheetinput5">Scheduled date</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" name="date" id="scheduledate" class="form-control" value={{\Carbon\Carbon::now()->toDateString()}}>
                                                                <div class="form-control-position">
                                                                    <i class="ft-clock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="timesheetinput6">scheduled time</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="time" name="time" id="timesheetinput6" class="form-control" value={{\Carbon\Carbon::now()->toTimeString()}} >
                                                                <div class="form-control-position">
                                                                    <i class="ft-clock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div class="form-group">
                                                    <span style="color: black">Select a group or multiplegroups by checking below</span>
                                                  <br>   <br>

                                                    @foreach($groups as $group)
                                                      <div class="checkbox">
                                                        <div class="custom-control custom-checkbox m-0">
                                                            <input type="checkbox" name="group_id[]" value="{{ $group->id }}" class="custom-control-input" id="staffing{{ $group->id }}">
                                                            <label class="custom-control-label" for="staffing{{ $group->id }}">{{ $group->group_name }}</label>
                                                        </div>
                                                      </div>
                                                    @endforeach
                                                    

                                                </div>

                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-danger mr-1">
                                                    <i class="icon-trash"></i> Cancel
                                                </button>
                                                <button type="submit"class="btn btn-success"  id="btnSubmit"  >
                                                    <i class="icon-note"></i> Send Message
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
                        </div>
                    </div>

                </div>



            </section>
            <!-- // Basic form layout section end -->
        </div>
    </section>
    <script>
        $(document).ready(function(){
            $('#characterLeft').text('Input a maximum of 160 characters');
            $('#message').keyup(function () {
                var max = 140;
                var len = $(this).val().length;
                if (len >= max) {
                    $('#characterLeft').text('You have reached the limit');
                    $('#characterLeft').addClass('red');
                    $('#btnSubmit').addClass('disabled');
                }
                else {
                    var ch = max - len;
                    $('#characterLeft').text(ch + ' characters left');
                    $('#btnSubmit').removeClass('disabled');
                    $('#characterLeft').removeClass('red');
                }
            });
        });

    </script>
    <style>
        .red{
            color:red;
        }
    </style>
@endsection
