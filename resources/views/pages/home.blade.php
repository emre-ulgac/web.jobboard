@extends('master')

@section('title')
    Günlük İşler Anasayfa
@stop

@section('content')
    @include('layouts.transheader')
    @php @session_start(); @endphp

    <div class="clearfix"></div><div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section id="intro-hero" style="background:  url(wp-content/uploads/2018/10/anasayfa.jpg) no-repeat scroll center center / cover"><div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                    <div class="hero-text-box">
                                        <h3 class="hero-title"></h3>
                                        <h1>İstediğin iş, İstediğin zaman.</h1>

                                        <p> Topluluğumuza katılın, çevrenizdeki en kaliteli çalışanlara kolayca ulaşın.</p>
                                    </div>

                                </div>
                                <div class="col-lg-4 col-md-5 col-sm-8 col-xs-12 col-md-offset-0 col-sm-offset-2 col-lg-offset-1">
                                    <form class="form-join" method="get" action="http://OFFLINEZIP.wpsho/search-page/">
                                        <h4>Hadi! Hemen Başla!</h4>
                                        <div class="form-group">
                                            <label>Anahtar Kelime</label>
                                            <input type="text" class="form-control" name="job_title" placeholder="Anketör,Garson,Grafiker"></div>
                                        <div class="form-group m--margin-top-30">
                                            <button type="submit" class="btn n-btn-flat btn-block">Ara<i class="fa fa-search"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </section></div></div></div></div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section class="how-it-works style-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title black">
                                        <h2>Nasıl Çalışır?</h2>
                                        <p>Geçici işleriniz için çevrenizdeki en kaliteli çalışanlara kolayca ulaşın.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="h-i-w-box" style="background:url(wp-content/uploads/2018/08/how-it-works-1-1.png) no-repeat;-webkit-background-size:contain;-moz-background-size:contain;-o-background-size:contain;background-size:contain;background-position:center center;background-attachment:scroll">
                                            <div class="work-points">




                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="h-i-w-content-box">
                                                        <img src="../wp-content/uploads/2018/08/h-i-w-4-1.png" class="img-responsive main-img" alt="image"><h4>İlan Verin</h4>
                                                        <p>Yapılacak olan işinizin ücretini, tarihini ve konumunu belirleyip ilanınızı paylaşın.

                                                        </p>
                                                    </div>

                                                </div>

                                                <div class="col-md-3 col-sm-6 col-xs-12">

                                                    <div class="h-i-w-content-box">
                                                        <img src="../wp-content/uploads/2018/08/h-i-w-3-1.png" class="img-responsive main-img" alt="image"><h4>Adayları Seçin</h4>
                                                        <p>İlanlarınıza başvuran adaylar arasından dilediğinizi seçin.

                                                        </p>
                                                    </div>
                                                </div><div class="col-md-3 col-sm-6 col-xs-12">

                                                    <div class="h-i-w-content-box">
                                                        <img src="../wp-content/uploads/2018/08/h-i-w-2-1.png" class="img-responsive main-img" alt="image"><h4>Kolayca Yönetin</h4>
                                                        <p> Çalışanlarınızı ve işinizi yönetin.

                                                        </p>
                                                    </div>


                                                </div>

                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="h-i-w-content-box">
                                                        <img src="../wp-content/uploads/2018/08/favorite.png" class="img-responsive main-img" alt="image"><h4>Puanlayın</h4>
                                                        <p>İş bittikten sonra taraflar olarak birbirinizi puanlayın.

                                                        </p>
                                                    </div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section></div></div></div></div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section class="n-call-to-action" style="background:rgba(0,0,0,.6) url(/wp-content/uploads/2018/08/calltoaction-1.png) 0 0 no-repeat;-webkit-background-size:cover;-moz-background-size:cover;-o-background-size:cover;background-size:cover;background-position:center center;background-attachment:scroll">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title black">
                                        <h2>Your Dream Jobs Are Waiting</h2>
                                        <p>Over 1 million interactions, 50,000 success stories Make yours now.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="n-extra-btn-section">
                                        <a href="#%20" class="btn n-btn-flat btn-mid btn-clear"> Search Jobs </a>
                                        <a href="#%20" class="btn n-btn-flat btn-mid"> Apply Job Now </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section></div></div></div></div>
    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section class="how-it-works style-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title black">
                                        <h2>Nasıl Çalışır?</h2>
                                        <p>Çevrenizdeki en kaliteli çalışanlara kolayca ulaşın.</p>
                                    </div>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="h-i-w-box" style="background:url(wp-content/uploads/2018/08/how-it-works-1-1.png) no-repeat;-webkit-background-size:contain;-moz-background-size:contain;-o-background-size:contain;background-size:contain;background-position:center center;background-attachment:scroll">
                                            <div class="work-points">




                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="h-i-w-content-box">
                                                        <img src="../wp-content/uploads/2018/08/h-i-w-4-1.png" class="img-responsive main-img" alt="image"><h4>Profilinizi Oluşturun</h4>
                                                        <p>Profilinizde sizden istediğimiz kısa bilgileri tamamlayın.

                                                        </p>
                                                    </div>

                                                </div>

                                                <div class="col-md-3 col-sm-6 col-xs-12">

                                                    <div class="h-i-w-content-box">
                                                        <img src="../wp-content/uploads/2018/08/h-i-w-3-1.png" class="img-responsive main-img" alt="image"><h4>İşlere Başvurun</h4>
                                                        <p>Farklı filtreleme seçenekleri ile size en uygun işleri keşfedin; başvurun.

                                                        </p>
                                                    </div>
                                                </div><div class="col-md-3 col-sm-6 col-xs-12">

                                                    <div class="h-i-w-content-box">
                                                        <img src="../wp-content/uploads/2018/08/kutu.png" class="img-responsive main-img" alt="image"><h4>İşi Gerçekleştirin</h4>
                                                        <p>İşveren ile anlaştıktan sonra istenen yerde ve zamanda işi gerçekleştirin.

                                                        </p>
                                                    </div>


                                                </div>

                                                <div class="col-md-3 col-sm-6 col-xs-12">
                                                    <div class="h-i-w-content-box">
                                                        <img src="../wp-content/uploads/2018/08/favorite.png" class="img-responsive main-img" alt="image"><h4>Puanlayın</h4>
                                                        <p>İş bittikten sonra taraflar olarak birbirinizi puanlayın.

                                                        </p>
                                                    </div></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section></div></div></div></div>


    <div class="vc_row wpb_row vc_row-fluid">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <section class="n-featured-jobs"><div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title black">
                                        <h2>Güncel İlanlar</h2>
                                        <p>Know your worth and find the job that qualify your life</p>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                                    <div class="n-featured-job-boxes">
                                        @if(count($jobs)==0)
                                            <p>Güncel İş İlanı Bulunmamaktadır.</p>
                                        @else
                                            @foreach($jobs as $job)
                                                <div class="n-job-single"  id="featured-box">
                                                    <div class="n-job-img">
                                                        <img src="../wp-content/themes/nokri/images/candidate-dp.jpg" alt="logo" class="img-responsive"></div>
                                                    <div class="n-job-detail">
                                                        <div class="features-star-2"><i class="fa fa-star"></i></div>
                                                        <ul class="list-inline"><li class="n-job-title-box">
                                                                <h4> <a href="/is-ilani/{{$job->slug}}">{{$job->title}}</a></h4>
                                                                <p><span><i class="ti-location-pin"></i> <a href="#">{{$job->addressDetails->city}}</a></span>
                                                                    <span><i class="ti-tag"></i> <a href="#">{{$job->categoryDetails->name}}</a></span></p>
                                                                <ul class="featured-badge-list"><li style=" background-color: #00aec3 !important;"><a href="#" class="job-class-tags-anchor" style="color: #ffffff!important; font-weight: bold">{{$job->fee}}TL</a></li></ul></li>
                                                            <li class="n-job-short">
                                                                <span> <strong>Çalışma Şekli</strong>{{$job->work_style}}</span>
                                                                <span> <strong>Zaman:</strong>{{$job->timeDetails->time}}</span>
                                                            </li>
                                                            <li class="n-job-btns">
                                                                @php @session_start(); @endphp
                                                                @if (isset($_SESSION['me']))
                                                                     @if($_SESSION['me']->type==0)
                                                                    <a href="/is-ilani/{{$job->slug}}" class="btn n-btn-rounded apply_job">İlanı Görüntüle </a>
                                                                    @endif
                                                                     @if($_SESSION['me']->type==1)
                                                                    <a></a>
                                                                         @endif


                                                                    @else
                                                                    <a href="/giris" class="btn n-btn-flat btn-mid btn-clear apply_job"  id="applying_job">Başvur</a>
                                                                @endif

                                                            </li>
                                                        </ul></div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>

                                    <div class="n-extra-btn-section">
                                    </div>
                                </div>

                            </div>

                            <div class="n-extra-btn-section"><a href="#%20" class="btn n-btn-flat btn-mid btn-clear"> Tüm İlanları Görüntüle </a></div>

                        </div>
                    </section></div></div></div></div>
    <div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><section class="n-blog-section "><div class="container">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="heading-title black">
                                        <h2>Blog</h2>
                                        <p>Lorem ipsum dolor sit amet elit, sed do eiusmod tempor.</p>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="n-blog-box">

                                                <div class="n-blog-bottom">
                                                    <ul><li>December 21, 2018</li>
                                                    </ul><h4> <a href="../2018/12/21/hello-world/index.html">Hello world! </a></h4>
                                                    <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
                                                    <a href="../2018/12/21/hello-world/index.html" class="read-more">Read More</a>
                                                    <a href="javascript:void(0)" class="author-icon"><img alt="" src="http://0.gravatar.com/avatar/?s=45&d=mm&r=g" srcset="http://0.gravatar.com/avatar/?s=90&d=mm&r=g 2x" class="avatar avatar-45 photo avatar-default img-responsive img-circle" height="45" width="45"></a>
                                                </div>
                                            </div>
                                        </div><div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="n-blog-box">

                                                <div class="n-blog-bottom">
                                                    <ul><li>November 20, 2018</li>
                                                    </ul><h4> <a href="../2018/11/20/hello-world-2/index.html">Hello world! </a></h4>
                                                    <p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing! </p>
                                                    <a href="../2018/11/20/hello-world-2/index.html" class="read-more">Read More</a>
                                                    <a href="javascript:void(0)" class="author-icon"><img alt="" src="http://2.gravatar.com/avatar/?s=45&d=mm&r=g" srcset="http://1.gravatar.com/avatar/?s=90&d=mm&r=g 2x" class="avatar avatar-45 photo avatar-default img-responsive img-circle" height="45" width="45"></a>
                                                </div>
                                            </div>
                                        </div><div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="n-blog-box">
                                                <div class="n-blog-top">
                                                    <a href="../2018/08/31/what-to-do-if-your-new-job-isnt-working-out/index.html"> <img width="750" height="360" src="../wp-content/uploads/2018/08/pexels-photo-313690-1.jpeg" class="img-responsive wp-post-image" alt="" srcset="../wp-content/uploads/2018/08/pexels-photo-313690-1.jpeg 750w,../wp-content/uploads/2018/08/pexels-photo-313690-1-300x144.jpeg 300w,../wp-content/uploads/2018/08/pexels-photo-313690-1-600x288.jpeg 600w" sizes="(max-width: 750px) 100vw, 750px"></a>
                                                </div>
                                                <div class="n-blog-bottom">
                                                    <ul><li>August 31, 2018</li>
                                                    </ul><h4> <a href="../2018/08/31/what-to-do-if-your-new-job-isnt-working-out/index.html">What If New Job Isn’t Working </a></h4>
                                                    <p>Bad Luck or Good Luck? Here’s an example: Maureen Nelson. Maureen worked for Employer A, which was loca... </p>
                                                    <a href="../2018/08/31/what-to-do-if-your-new-job-isnt-working-out/index.html" class="read-more">Read More</a>
                                                    <a href="javascript:void(0)" class="author-icon"><img alt="" src="http://0.gravatar.com/avatar/?s=45&d=mm&r=g" srcset="http://1.gravatar.com/avatar/?s=90&d=mm&r=g 2x" class="avatar avatar-45 photo avatar-default img-responsive img-circle" height="45" width="45"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="n-extra-btn-section"><a href="#%20" class="btn n-btn-flat btn-mid btn-clear"> View All </a></div>
                                </div>
                            </div>
                        </div>
                    </section></div></div></div></div>


    @include('layouts.footer')

    <a href="#" class="scrollup"><i class="fa fa-chevron-up"></i></a>


@endsection
