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
                        <img src="{{$employer->image}}" class="img-responsive" alt="company profile image">
                    </div>
                    <div class="n-candidate-meta-box">
                        <h4>{{$employer->name}}</h4>
                        <p>Puan Gelicek</p>
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
                        <h4 class="widget-heading">İşveren Detayı </h4>
                        <ul>
                            <li>
                                <i class="la la-calendar la-3x"></i>
                                <div class="resume-detail-meta"><small>Kayıt Olduğu Tarih:</small> <strong>{{$employer->created_at}}</strong></div>
                            </li>
                            <li>
                                <i class="la la-map-marker la-3x "></i>
                                <div class="resume-detail-meta"><small>Konum:</small> <strong></strong></div>
                            </li>
                            <li>
                                <i class="la la-users la-3x"></i>
                                <div class="resume-detail-meta"><small>İş Sayısı </small><strong>30+</strong></div>
                            </li>
                            <li>
                                <i class="la la-envelope la-3x"></i>
                                <div class="resume-detail-meta"><a href="mailto:peakstel@gmail.com"><small>Email </small><strong>{{$employer->email}}</strong></a></div>
                            </li>
                            <li>
                                <i class="la la-globe la-3x"></i>
                                <div class="resume-detail-meta"><a href="http://www.company.com" target="_blank"><small>Websitesi URL </small><strong>www.company.com</strong></a></div>
                            </li>
                            <li>
                                <i class="la la-mobile la-3x"></i>
                                <div class="resume-detail-meta"><a href="tel:123456789"> <small>Telefon Numarası </small><strong>{{$employer->phone}}</strong></a></div>
                            </li>

                        </ul>
                    </div>

                </aside>
            </div>
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="resume-3-detail">
                    <div class="resume-3-box">
                        <h4>İşveren Hakkında</h4>
                        <p>{{$employer->employer_info}}<br></p>
                    </div>
                    <div class="n-related-jobs">
                        <div class="heading-title left">
                            <h4>Açık Pozisyonlar</h4>
                        </div>
                        <div class="n-search-listing n-featured-jobs">
                            <div class="n-featured-job-boxes">
                                @if(count($active_jobs->data) == 0)
                                    <p> Açık pozisyon bulunmamaktadır.</p>
                                @else
                                @foreach($active_jobs->data as $job)
                                <div class="n-job-single">
                                    <div class="n-job-img"><img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/01-1.png" alt="logo" class="img-responsive img-circle"></div>                  <div class="n-job-detail">
                                        <ul class="list-inline">
                                            <li class="n-job-title-box">
                                                <h4><a href="https://jobs.nokriwp.com/job/sr-mobile-application-developer/" class="job-title">{{$job->title}}</a></h4>
                                                <p><i class="ti-location-pin"></i> <a href="https://jobs.nokriwp.com/search-page/?job_location=66">{{$job->city}}</a></p>
                                            </li>
                                            <li class="n-job-short">
                                                <span> <strong> İş Tipi:</strong>{{$job->work_style}}</span>
                                                <span> <strong>Son Tarih: </strong>{{$job->begin_date}} </span>
                                            </li>
                                            <li class="n-job-btns">
                                                <a href="javascript:void(0)" class="btn n-btn-rounded apply_job" data-job-id="285" data-toggle="modal" data-target="#myModal">Başvur</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                    @endforeach
                                    @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    @include('layouts.footer')
    @endsection