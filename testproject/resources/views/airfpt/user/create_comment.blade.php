@extends('airfpt.layout.layout')
@section('title', 'Term & Conditions')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container" style="padding-top: 70px; padding-bottom: 70px;">
    <br>
    <center>
        <h2>Customer Care</h2>
        <hr>
    </center>
    <div class="container">
        <div class="row">
            <div class="paragraph">
                <div>
                    <p><span style="font-size:17px;">We are continuously improving our
                            products and services offered, and your feedback is imvaluable.</span></p>
                    <p><span style="font-size:17px;">If your experience with us does not meet
                            your expectations, our Customer Services team </span><span style="color:#005caa;font-size:17px;"><strong>(028)38460846</strong></span><span style="font-size:17px;">
                            are on hand to resolve any issues as quickly as possible.</span>
                    </p>
                    <p><span style="font-size:17px;"><strong>Contact our Customer Service
                                team</strong></span></p>
                    <p><span style="font-size:17px;">• Email:&nbsp;</span><a href="mailto:customerservices@vietravelairlines.vn"><span style="font-size:17px;">customerservice@airfpt.vn</span></a><span style="font-size:17px;">&nbsp;</span>
                    </p>
                    <p><span style="font-size:17px;">• Facebook:&nbsp; </span><a href="https://www.facebook.com/VietravelAirlines.vn/"><span style="font-size:17px;">https://www.facebook.com/airfpt.vn/</span></a></p>
                    <hr>

                    <legend>Give Us Feedback</legend>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form role="form" action="{{ Route('airfpt.user.postCreate_comment') }}" method="post">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="comments">Feedback</label>
                            <textarea rows="4" id="comment" name="comment" class="form-control" placeholder="Input message"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="post_date">Post Date:</label>
                            <input type="date" id="created_at" name="created_at">

                        </div>

                        <div>
                            <button type="submit" class="btn btn-success" style=" margin-bottom: 3rem;">Send feedbacks</button>

                        </div>

                        <br>

                    </form>



                </div>
                <br>
                <!-- <p><span style="font-size:20px;"><strong>All Feedback</strong></span></p>
                @foreach($comments as $c)
                <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
                    <div class="col-sm-2 " style=" text-align: right;">
                        <div class="well">
                            <img src="{{ asset('./images/comment.png') }}" class="img-circle" width="40%" alt="Avatar">
                            <p style="color: green;">@ {{ $c->user_name }}</p>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="well">
                            <p>{{ $c->comment }}</p>
                        
                            <div class="row" style="padding-top: 20px; padding-bottom: 20px;">
                                <div class="col-sm-2 " style=" text-align: right;">
                                    <div class="well">
                                        <img src="{{ asset('./images/comment2.png') }}" class="img-circle" width="40%" alt="Avatar">
                                        <p style="color: green;">@ Admin</p>
                                    </div>
                                </div>
                                <div class="col-sm-10">
                                    <div class="well">

                                        <p>{{ $c->reply }}</p>
                                    </div>

                                </div>
                                <br>
                            </div>
                        
                        </div>

                    </div>
                    <br>
                </div>
                @endforeach -->


                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">

                                    <h4>Display Comments</h4>
                                    @foreach($comments as $c)
                                    <div class="display-comment">
                                        <strong>{{ $c->user_name }}</strong>
                                        <p>{{ $c->comment }}
                                        <form method="post">
                                            <div class="form-group">
                                                <input type="text" name="comment_body" class="form-control" />
                                                {{ $c->reply }}
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-warning" value="Add Comment" />
                                            </div>
                                        </form>
                                        </p>

                                    </div>
                                    @endforeach
                                    <hr />
                                    <h4>Add comment</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <br>

            <div style="padding-top: 20px; padding-bottom: 20px;">

            </div>

        </div>
    </div>
</div>


</div>

@endsection
@section('script-section')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
@endsection