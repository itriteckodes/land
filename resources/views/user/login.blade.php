@extends('layouts.front')

@section('content')



<!--===== PAGE TITLE =====-->
<div class="page-title page-main-section parallaxie">
    <div class="container padding-bottom-top-120 text-uppercase text-center">
        <div class="main-title">
            <h1>Login & Register</h1>
            <h5>10 Years Of Experience!</h5>
            <div class="line_4"></div>
            <div class="line_5"></div>
            <div class="line_6"></div>
            <a href="index_1.html">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a
                href="login.html">Login & Register</a>
        </div>
    </div>
</div>
<!--===== #/PAGE TITLE =====-->


<!--===== LOGIN =====-->
<section id="login" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="profile-login">
                    <div class="login_detail">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab"
                                    data-toggle="tab">Login</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab"
                                    data-toggle="tab">Register</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content padding_b40 padding_t40">
                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                <h2>Welcome Back!</h2>
                                <div class="agent-p-form">
                                    <div class="row">
                                        <form class="callus" method="POST" action="{{route('user.login')}}">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="single-query">
                                                    <input type="text" name="email" class="keyword-input"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="single-query">
                                                    <input type="password" name="password" class="keyword-input" placeholder="password">
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="query-submit-button">
                                                    <button type="submit" class="btn_fill">submit now</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                <h2>Sign Up for Free</h2>
                                <div class="agent-p-form">
                                    <div class="row">
                                        <form class="callus" method="POST" action="{{route('user.register')}}">
                                            @csrf
                                            <div class="col-md-12">
                                                <div class="single-query">
                                                    <input type="text" name="name"  class="keyword-input" placeholder="name"
                                                        required>
                                                </div>
                                                <div class="single-query">
                                                    <input type="text" name="email" class="keyword-input"
                                                        placeholder="Email Address">
                                                </div>
                                                <div class="single-query">
                                                    <input type="password" name="password" class="keyword-input" placeholder="Password">
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                                <div class="query-submit-button">
                                                    <button type="submit" class="btn_fill">Creat an Account</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<!--===== HEADER =====-->

<!--===== #/CONTACT =====-->


<!--===== FOOTER =====-->