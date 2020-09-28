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
                        <center><h2 class="content-header"></h2></center>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title-wrap bar-success">
                                    <h4 class="card-title" id="basic-layout-form">Send Bulk Sms</h4>
                                </div>
{{--                                <p class="mb-0">This is the most basic and cost estimation form is the default position.</p>--}}
                            </div>
                            <div class="card-body">
                                <div class="px-3">
                                    <form action="#" >
{{--                                        {{ csrf_field() }}--}}
                                        <div class="form-body">
                                            <h4 class="form-section">
                                                <input type="hidden" name="sender_id" value="sender_id">
                                                <input type="hidden" name="sender_id" value="">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Create Short code</label>
                                                            <input type="text" id="code" class="form-control" name="code" placeholder="12345">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="donationinput3">Phone number</label>
                                                    <input type="tel" id="msisdn" class="form-control square" name="msisdn">
                                                </div>
                                                    </div></div>


{{--                                            <br style="clear:both">--}}
                                            <div class="form-group ">
                                            <label  id="messageLabel" for="message">Message Brief</label>
                                                <textarea  rows="5" type="textarea" id="message" class="form-control input-sm " name="message" placeholder="Message" maxlength="140"></textarea>


                                                <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>

                                            </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="timesheetinput5">Scheduled date</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="date" id="scheduledate" class="form-control" name="scheduledate">
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
                                                                <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                                                <div class="form-control-position">
                                                                    <i class="ft-clock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
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
                                            </h4>
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
