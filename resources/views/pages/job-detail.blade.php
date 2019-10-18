@extends('master')


@section('content')
    @include('layouts.transheader')

@php  @session_start(); @endphp
<div class="clearfix"></div>
<section class="n-single-job n-single-job-transparent" style="background:url(/wp-content/themes/nokri/images/footer.png);background-repeat:no-repeat;background-size:cover;background-position:center center;background-attachment:fixed">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <ul class="featured-badge-list">
                    <li style=" background-color: rgba(250,122,86,0.2) !important;"><a href="../../search-page/index.html" class="job-class-tags-anchor" style="color: #fa7a56 !important;">Feature</a></li>
                </ul>
                <div class="n-single-title">
                    <h4>{{$job->title}}</h4>
                    <ul>
                        <li> <i class="fa fa-map-marker"></i><a href="../../search-page/index.html">{{$job->addressDetails->city}} / {{$job->addressDetails->province}}</a></li>
                        <li> <i class="fa fa-hand-o-right"></i>{{$job->work_style}}</li>
                        <li> <i class="fa fa-clock-o"></i>{{$job->timeDetails->time}}</li>
                        <li ><i class="fa fa-money"></i>{{$job->fee}}TL</li>
                    </ul>
                </div>
            </div>
            @if(isset($_SESSION['me']) && $_SESSION['me']->type==0)
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="n-single-sidebar">
                    <div class="apply-buttons">
                    </div>
                    <div class="apply-buttons">
                    @foreach($user->jobs as $job2)
                        @if($job2->id == $job->identifier)
                            <a  type="button" href="{{url('cancel/'.$job->identifier.'/users/'.$_SESSION['me']->id)}}" class="btn n-btn-flat btn-mid btn-clear apply_job" data-job-id="268" data-author-id="1" data-toggle="modal" data-target="#myModal" id="applying_job">
                                Başvuruyu İptal Et
                            </a>
                            @else   <a  type="button" href="{{url('basvur/'.$job->identifier.'/users/'.$_SESSION['me']->id)}}" class="btn n-btn-flat btn-mid btn-clear apply_job" data-job-id="268" data-author-id="1" data-toggle="modal" data-target="#myModal" id="applying_job">

                                Başvur
                            </a>

                        @endif
                    @endforeach

                        @if(count($user->jobs)==0)
                            <a  type="button" href="{{url('basvur/'.$job->identifier.'/users/'.$_SESSION['me']->id)}}" class="btn n-btn-flat btn-mid btn-clear apply_job" data-job-id="268" data-author-id="1" data-toggle="modal" data-target="#myModal" id="applying_job">

                                Başvur
                            </a>
                            @endif


                    </div>


                </aside>
            </div>
                @elseif(isset($_SESSION['me']) && $_SESSION['me']->type==1)
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12"></div>
                @else
                <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="n-single-sidebar">
                    <div class="apply-buttons">
                    </div>
                    <div class="apply-buttons">
                        <a href="javascript:void(0)" class="btn n-btn-flat btn-mid btn-clear apply_job" data-job-id="268" data-author-id="1" data-toggle="modal" data-target="#myModal" id="applying_job">Başvur</a>
                    </div>
                </aside>
            </div>

                @endif

        </div>
    </div>
</section>
<section class="n-single-job light-grey n-detail-transparent">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                <div class="n-single-meta-2">
                    <h4> İş Bilgileri</h4>
                    <ul class="">
                        <li>
                            <div class="short-detail-icon">
                                <img src="../../wp-content/themes/nokri/images/icons/tick-icon.png" class="img-responsive" alt="icon"></div>
                            <div class="short-detail-meta">
                                <small>Kategori</small>
                                <strong>{{$job->categoryDetails->name}}</strong>
                            </div>
                        </li>
                        <li>
                            <div class="short-detail-icon">
                                <img src="../../wp-content/themes/nokri/images/icons/tick-icon.png" class="img-responsive" alt="icon"></div>
                            <div class="short-detail-meta">
                                <small>Shift</small>
                                <strong>Morning</strong>
                            </div>
                        </li>
                        <li>
                            <div class="short-detail-icon">
                                <img src="../../wp-content/themes/nokri/images/icons/tick-icon.png" class="img-responsive" alt="icon"></div>
                            <div class="short-detail-meta">
                                <small>İş Oluşturma Tarihi</small>
                                <strong>{{$job->created_at}}</strong>
                            </div>
                        </li>
                        <li>
                            <div class="short-detail-icon">
                                <img src="../../wp-content/themes/nokri/images/icons/tick-icon.png" class="img-responsive" alt="icon"></div>
                            <div class="short-detail-meta">
                                <small>Kişi Sayısı</small>
                                <strong>{{$job->person_count}}</strong>
                            </div>
                        </li>
                        <li>
                            <div class="short-detail-icon">
                                <img src="../../wp-content/themes/nokri/images/icons/tick-icon.png" class="img-responsive" alt="icon"></div>
                            <div class="short-detail-meta">
                                <small>Ekipman</small>
                                <strong>{{$job->tool}}</strong>
                            </div>
                        </li>
                        <li>
                            <div class="short-detail-icon">
                                <img src="../../wp-content/themes/nokri/images/icons/tick-icon.png" class="img-responsive" alt="icon"></div>
                            <div class="short-detail-meta">
                                <small>Kıyafet </small>
                                <strong>{{$job->wear}}</strong>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="n-single-detail">
                    <h4>İş Hakkında</h4>
                    <p>{!! $job->description !!}<br></p>


                    <p><br></p>
                </div>
                <div class="n-skills">
                    <h5><i class="fa fa-tags"></i>Yetkinlikler:</h5>
                    <div class="n-skills-tags">
                        @foreach($job->skills as $skill)
                       <a href="../../job_tag/marketting/index.html">#{{$skill->name}}</a>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-4 col-sm-12 col-xs-12">
                <aside class="n-single-sidebar">
                    <div class="app-deadline">
                        <div class="short-detail-icon">
                            <i class="ti-timer"></i>
                        </div>
                        <div class="short-detail-meta">
                            <small>Son Tarih</small>
                            <strong>{{$job->begin_date}}</strong>
                        </div>
                        <span class="ab-iocn"><i class="ti-alarm-clock"></i></span>
                    </div>
                    <div class="n-single-job-company">
                        <div class="dingle-job-company-meta">
                            <ul class="social-links"></ul>
                            <div class="contact-img">
                                <img src="../../wp-content/themes/nokri/images/candidate-dp.jpg" class="img-responsive img-circle" alt="company profile image"></div>
                            <div class="contact-caption">
                                <h4>{{$job->employer->name}}</h4>
                                <a href="" target="_blank">Websitesine Git</a>
                            </div>
                        </div>
                        <a class="view-profile" href="{{url('isveren/'.$job->employer->slug)}}">Profili Görüntüle </a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</section>

@include('layouts.footer')
    @endsection