@extends('master')


@section('content')
    @include('layouts.transheader')

<div class="clearfix"></div>
<section class="n-breadcrumb-big resume-3-brreadcrumb" style=" background: url(https://jobs.nokriwp.com/wp-content/uploads/2018/09/4.png);  background-repeat: no-repeat; background-size: cover;  background-position: center center;  background-attachment: scroll; ">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            </div>
        </div>
    </div>
</section>
<section class="user-resume-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="n-candidate-info">
                    <div class="n-candidate-img-box">
                        <img src="{{$candidate->image}}" class="img-responsive" alt="image">
                    </div>
                    <div class="n-candidate-meta-box">
                        <h4>{{$candidate->name}}</h4>
                        <p>puan</p>
                        <ul class="social-links list-inline">
                            <li> <a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="Link"></a></li>
                            <li> <a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="Link"></a></li>
                            <li> <a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="Link"></a></li>
                            <li> <a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="Link"></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="n-candidate-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <aside class="resume-3-sidebar">
                    <div class="n-candidate-info">
                        <h4 class="widget-heading">İşçi Detayı</h4>
                        <ul>
                            <li>
                                <i class="la la-calendar la-3x"></i>
                                <div class="resume-detail-meta"><small>Doğum Tarihi:</small> <strong>October 1, 2018</strong></div>
                            </li>
                            <li>
                                <i class="la la-map-marker la-3x "></i>
                                <div class="resume-detail-meta"><small>Konum:</small> <strong>{{$candidate->addressDetails->city}}</strong></div>
                            </li>

                            <li>
                                <i class="la la-envelope la-3x"></i>
                                <div class="resume-detail-meta"><small>Email </small><strong>{{$candidate->email}}</strong></div>
                            </li>
                            <li>
                                <i class="la la-arrows la-3x"></i>
                                <div class="resume-detail-meta"> <small>Kayıt Olduğu Tarih</small><strong>{{$candidate->created_at}}</strong></div>
                            </li>
                        </ul>
                    </div>


                </aside>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="resume-3-detail">
                    <div class="resume-3-box">
                        <h4>Hakkımda</h4>
                        <p><span style="color: rgb(119, 119, 119); font-family: Poppins, sans-serif; font-size: 15px;">{{$candidate->personal_info}}</span></p>
                    </div>


                    <div class="resume-3-box resume-skills">
                        <div class="n-job-tags">
                            <h3>Yetkinlikler:</h3>
                            <ul class="job-tag-list"><a href="../../job_tag/marketting/index.html">#marketting</a><a href="../../job_tag/sales/index.html">#sales</a><a href="../../job_tag/working/index.html">#working</a> </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @include('layouts.footer')
    @endsection