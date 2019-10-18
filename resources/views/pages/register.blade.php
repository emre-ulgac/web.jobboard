@extends('master')

@section('title')
    Kayıt Ol
@stop
@section('content')

    @include('layouts.header')


    <div class="clearfix"></div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section class="n-pages-breadcrumb" style="background:rgba(0,0,0,.6) url({{'/wp-content/uploads/2018/08/slider-image-1.png'}}) 0 0 no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-position:center center;background-attachment:scroll">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 col-lg-offset-2 col-md-offset-2 col-sm-offset-2">
                                    <div class="n-breadcrumb-info">
                                        <h1>Hesap Oluştur</h1>
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
                                        <div class="n-job-pages register-page">
                                            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                                <div class="row">
                                                    <div class="n-page-left-side">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="post-job-heading">
                                                                <h3></h3>
                                                            </div>
                                                        </div>
                                                        <form id="sb-signup-form" action="{{route('kayit')}}" method="POST">
                                                          @csrf
                                                            {{ method_field('POST')}}

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="btn-group" id="status" data-toggle="buttons">
                                                                    <label class="btn btn-default btn-md active"  id="employer">
                                                                        <input type="radio" value="1" name="sb_reg_type"  checked="checked" data-parsley-multiple="sb_reg_type">Employer</label>

                                                                    <label class="btn btn-default btn-md" id="candidate">
                                                                        <input type="radio" value="0" name="sb_reg_type"  data-parsley-multiple="sb_reg_type" >Candidate</label>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input placeholder="İsminiz" class="form-control" type="text" data-parsley-required="true" data-parsley-error-message="İsminizi Giriniz" name="name" id="signup--firstname"></div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="surname">
                                                                <div class="form-group">
                                                                    <input placeholder="Soyisminiz" class="form-control" type="text"  data-parsley-error-message="Soyisminizi Giriniz" name="surname" id="signup--lastname"></div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input placeholder="Email" class="form-control" type="email" data-parsley-type="email" data-parsley-required="true" data-parsley-error-message="Geçerli bir email girin." name="email" data-parsley-trigger="change" id="signup--email"></div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input placeholder="Parola"  class="form-control" type="password" data-parsley-minlength="8"
                                                                           data-parsley-errors-container=".errorspannewpassinput"
                                                                           data-parsley-required-message="Please enter your new password."
                                                                           data-parsley-required="true" data-parsley-error-message="Parolanızı giriniz." name="password" id="signup--password">
                                                                    <span class="errorspannewpassinput"></span></div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="form-group">
                                                                    <input placeholder="Parola Tekrar" class="form-control" type="password"  data-parsley-required="true" data-parsley-minlength="8"
                                                                           data-parsley-required-message="Please re-enter your new password."
                                                                           data-parsley-equalto="#signup--password"
                                                                            data-parsley-error-message="Parolanızı Tekrar" name="password-confitmation" id="signup--password">
                                                                    <span class="errorspanconfirmnewpassinput"></span></div>
                                                            </div>




                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="buttons-area">
                                                                    <div class="form-group">
                                                                        <input type="checkbox" name="terms" class="input-icheck-others" data-parsley-required="true" data-parsley-error-message=".....">
                                                                        <p>  <a href="#" target="_blank">Sözleşme ve şartnameyi okudum kabul ediyorum.</a></p>
                                                                    </div>

                                                                    <button type="submit" class="btn n-btn-flat btn-mid pull-right" >Kayıt Ol</button>
                                                                    </a>

                                                                </div>
                                                            </div>

                                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                                <div class="signup-area">
                                                                     Hesabınız var mı? <a href="{{url('giris')}}">Giriş Yap</a>
                                                                </div>
                                                            </div>
                                                            <input type="hidden" class="get_action" value="register"><input type="hidden" id="verify_account_msg" value="Verificaton email has been sent to your email."><input type="hidden" id="nonce" value="1553436110">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopadding" id="employer2">
                                                <div class="n-page-right-side">
                                                    <div class="post-job-heading">
                                                        <h3>Topluluğumuza katılın ve çevrenizdeki en kaliteli çalışanlara kolayca ulaşın.</h3>
                                                    </div>
                                                    <div class="form-group">
                                                        <p></p>
                                                    </div>
                                                    <ul>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul><a href="#" class="btn n-btn-flat btn-mid btn-block">İş İlanı Oluşturmak için Giriş Yap</a>
                                                </div>
                                            </div>

                                            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 nopadding" id="candidate2">
                                                <div class="n-page-right-side">
                                                    <div class="post-job-heading">
                                                        <h3>Topluluğumuza katılın, size en yakın geçici iş fırsatlarına ve işverenlere kolayca ulaşın.</h3>
                                                    </div>
                                                    <div class="form-group">
                                                        <p></p>
                                                    </div>
                                                    <ul>
                                                        <li></li>
                                                        <li></li>
                                                        <li></li>
                                                    </ul><a href="#" class="btn n-btn-flat btn-mid btn-block">Hesabınız var mı?  Giriş Yap</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>



    @include('layouts.footer')


@endsection