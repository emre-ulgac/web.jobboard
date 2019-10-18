@extends('master')
@section('title')
    Kullanıcı Girişi
@stop

@section('content')
    @include('layouts.header')


<div class="clearfix"></div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner">
            <div class="wpb_wrapper">
                <section class="n-pages-breadcrumb" style="background:rgba(0,0,0,.6) url(/wp-content/uploads/2018/08/slider-image-1.png) 0 0 no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-position:center center;background-attachment:scroll">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                <div class="n-breadcrumb-info">
                                    <h1>Giriş Yap</h1>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="n-job-pages-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12 col-md-offset-1 col-lg-offset-1">
                                <div class="row">
                                    <div class="n-job-pages">
                                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                            <div class="row">
                                                <div class="n-page-left-side">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="post-job-heading">
                                                            <h3></h3>
                                                        </div>
                                                    </div>
                                                    <form id="sb-login-form-data" action="{{route('login')}}" method="POST">
                                                        @csrf
                                                        {{ method_field('POST') }}
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <input placeholder="Email" class="form-control" type="email" data-parsley-type="email" data-parsley-required="true" data-parsley-error-message="Uygun bir mail giriniz" data-parsley-trigger="change" name="email"
                                                                       id="sb_reg_email"></div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="form-group">
                                                                <input placeholder="Parola" class="form-control" type="password" data-parsley-required="true" data-parsley-error-message="Parolanızı Giriniz" name="password"></div>
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                                            <div class="form-group">
                                                                <label>
                                                                    <input class="form-check-input" type="checkbox">
                                                                    Beni Hatırla
                                                                </label>
                                                                <button class="btn n-btn-flat btn-mid pull-right" type="submit" >Giriş Yap</button>
                                                            </div>


                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="signup-area">
                                                                Hesabınız yok mu?<a href="{{url('kayit-ol')}}"> Şimdi Kayıt ol</a><br><br>
                                                                <a href="#"  data-target="#myModal" data-toggle="modal">Şifremi Unuttum</a>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopadding">
                                            <div class="n-page-right-side">
                                                <div class="post-job-heading">
                                                    <h3>İstediğiniz iş, istediğiniz zaman</h3>
                                                </div>
                                                <div class="form-group">
                                                    <p></p>
                                                </div>
                                                <div class="social-buttons">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>


            <div class="custom-modal">
                <div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <div class="cp-spinner cp-skeleton"></div>
                            <div class="modal-header rte">
                                <h2 class="modal-title">Forgot Your Password ?</h2>
                            </div>

                            <form id="sb-forgot-form">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input placeholder="Your Email Where We Send You New Password" class="form-control" type="email" data-parsley-type="email" data-parsley-required="true" data-parsley-error-message="Please enter valid email." data-parsley-trigger="change"
                                               name="sb_forgot_email" id="sb_forgot_email"></div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn n-btn-flat btn-mid btn-block" type="submit" id="sb_forgot_submit">Reset My Account</button>
                                    <button class="btn btn-default" type="button" id="sb_forgot_msg">Processing...</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



    @include('layouts.footer')

    @endsection