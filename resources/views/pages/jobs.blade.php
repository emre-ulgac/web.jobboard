@extends('master')
@section('title')
    İlan Arama
@stop

@section('content')

    @include('layouts.header')




<div class="clearfix"></div>
<section class="n-search-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <aside class="new-sidebar">
                            <div class="heading">
                                <h4> Arama Filtreleri</h4>
                                <a href="https://jobs.nokriwp.com/search-page/">Tümünü Temizle</a>
                            </div>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab">
                                        <a role="button" data-toggle="collapse" href="#search-widget">
                                            Anahtar Kelime ile Arama </a>
                                    </div>
                                    <div id="search-widget" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <form role="search" method="get" action="https://jobs.nokriwp.com/search-page/">
                                                <div class="form-group">

                                                    <input type="text" class="form-control" value="" name="job_title" placeholder="">
                                                </div>
                                                <div class="form-group form-action">
                                                    <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab">
                                        <a role="button" data-toggle="collapse" href="#collapse-job_category">
                                            Kategori ile Arama </a>
                                    </div>
                                    <div id="collapse-job_category" class="panel-collapse collapse in" role="tabpanel">
                                        <div class="panel-body">
                                            <form method="get" id="search_form" action="https://jobs.nokriwp.com/search-page/">
                                                <div class="cp-loader"></div>
                                                <div class="form-group">
                                                    <select class="questions-category form-control" data-parsley-required="true" id="make_id">
                                                        <option value="asa">Kategori Seçiniz</option>
                                                        @foreach($categories as $category)
                                                        <option value="80">{{$category->name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>
                                                <div class="form-group" id="select_modal">

                                                </div>
                                                <div id="select_modals" class="form-group">

                                                </div>
                                                <div id="select_forth_div" class="margin-top-10">

                                                </div>
                                                <div class="form-group form-action">
                                                </div>
                                                <input type="button" class="btn n-btn-flat btn-mid" id="category_search" value="Search">
                                                <input type="hidden" name="cat_id" id="cat_id" value="" />
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab">
                                        <h4 class="panel-title">
                                            <a class="" role="button" data-toggle="collapse" href="#collapse-job_type"> Çalışma Şekli
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-job_type" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form method="get" action="https://jobs.nokriwp.com/search-page/">
                                                <ul class="list">
                                                    <li class=""><input class="input-icheck-search change_select" value="19" name="job_type" type="radio"><label>Günlük</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="20" name="job_type" type="radio"><label>Full time</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="21" name="job_type" type="radio"><label>Part Time</label></li>
                                                    <li class="hide_nexts hide_nexts-job_type"><input class="input-icheck-search change_select" value="22" name="job_type" type="radio"><label>Internship</label></li>
                                                    <li class="show-more"><small><a href="javascript:void(0);" class="show_next" data-tax-id="job_type">Show more</a></small>
                                                    <li>
                                                </ul>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab">
                                        <h4 class="panel-title">
                                            <a class="" role="button" data-toggle="collapse" href="#collapse-job_salary"> Ücret Aralığı
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-job_salary" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form method="get" action="https://jobs.nokriwp.com/search-page/">
                                                <ul class="list">
                                                    <li class=""><input class="input-icheck-search change_select" value="29" name="job_salary" type="radio"><label>0-1000</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="30" name="job_salary" type="radio"><label>1000-2000</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="31" name="job_salary" type="radio"><label>2000-3000</label></li>
                                                    <li class="hide_nexts hide_nexts-job_salary"><input class="input-icheck-search change_select" value="32" name="job_salary" type="radio"><label>3000-4000</label></li>
                                                    <li class="hide_nexts hide_nexts-job_salary"><input class="input-icheck-search change_select" value="33" name="job_salary" type="radio"><label>4000-5000</label></li>
                                                    <li class="show-more"><small><a href="javascript:void(0);" class="show_next" data-tax-id="job_salary">Show more</a></small>
                                                    <li>
                                                </ul>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab">
                                        <h4 class="panel-title">
                                            <a class="" role="button" data-toggle="collapse" href="#collapse-job_skills"> Yetkinlikler
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-job_skills" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form method="get" action="https://jobs.nokriwp.com/search-page/">
                                                <ul class="list">
                                                    <li class=""><input class="input-icheck-search change_select" value="38" name="job_skills" type="radio"><label>Php</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="39" name="job_skills" type="radio"><label>JS</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="40" name="job_skills" type="radio"><label>Designing</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="41" name="job_skills" type="radio"><label>Application development</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="42" name="job_skills" type="radio"><label>Arts</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="43" name="job_skills" type="radio"><label>Painting</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="44" name="job_skills" type="radio"><label>Development</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="45" name="job_skills" type="radio"><label>Modeling</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="46" name="job_skills" type="radio"><label>Architecture</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="114" name="job_skills" type="radio"><label>Management</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="127" name="job_skills" type="radio"><label>SEO</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="128" name="job_skills" type="radio"><label>SMM</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="144" name="job_skills" type="radio"><label>Culinary Arts</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="145" name="job_skills" type="radio"><label>Peruvian Cuisine</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="151" name="job_skills" type="radio"><label>Team Management</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="152" name="job_skills" type="radio"><label>patience</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="153" name="job_skills" type="radio"><label>Commitment</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="154" name="job_skills" type="radio"><label>Team Work</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="155" name="job_skills" type="radio"><label>Flexibility</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="156" name="job_skills" type="radio"><label>Stress Management</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="163" name="job_skills" type="radio"><label>Education</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="171" name="job_skills" type="radio"><label>Analytical skills</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="172" name="job_skills" type="radio"><label>trainings</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="173" name="job_skills" type="radio"><label>communication skills</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="191" name="job_skills" type="radio"><label>Food Products</label></li>
                                                    <li class="hide_nexts hide_nexts-job_skills"><input class="input-icheck-search change_select" value="198" name="job_skills" type="radio"><label>cooking</label></li>
                                                    <li class="show-more"><small><a href="javascript:void(0);" class="show_next" data-tax-id="job_skills">Show more</a></small>
                                                    <li>
                                                </ul>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading " role="tab">
                                        <h4 class="panel-title">
                                            <a class="" role="button" data-toggle="collapse" href="#collapse-job_shift"> Job Shift
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-job_shift" class="panel-collapse collapse ">
                                        <div class="panel-body">
                                            <form method="get" action="https://jobs.nokriwp.com/search-page/">
                                                <ul class="list">
                                                    <li class=""><input class="input-icheck-search change_select" value="58" name="job_shift" type="radio"><label>Morning</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="59" name="job_shift" type="radio"><label>Evening</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="60" name="job_shift" type="radio"><label>Night</label></li>
                                                    <li class="hide_nexts hide_nexts-job_shift"><input class="input-icheck-search change_select" value="61" name="job_shift" type="radio"><label>Round</label></li>
                                                    <li class="show-more"><small><a href="javascript:void(0);" class="show_next" data-tax-id="job_shift">Show more</a></small>
                                                    <li>
                                                </ul>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab">
                                        <h4 class="panel-title">
                                            <a class="" role="button" data-toggle="collapse" href="#collapse-ad_location"> Konum
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse-ad_location" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <form method="get" action="https://jobs.nokriwp.com/search-page/">
                                                <ul class="list">
                                                    <li class=""><input class="input-icheck-search change_select" value="66" name="ad_location" type="radio"><label>USA</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="70" name="ad_location" type="radio"><label>India</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="72" name="ad_location" type="radio"><label>New delhi</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="73" name="ad_location" type="radio"><label>UAE</label></li>
                                                    <li class=""><input class="input-icheck-search change_select" value="76" name="ad_location" type="radio"><label>Germany</label></li>
                                                    <li class="hide_nexts hide_nexts-ad_location"><input class="input-icheck-search change_select" value="116" name="ad_location" type="radio"><label>Australia</label></li>
                                                    <li class="hide_nexts hide_nexts-ad_location"><input class="input-icheck-search change_select" value="132" name="ad_location" type="radio"><label>Pakistan</label></li>
                                                    <li class="show-more"><small><a href="javascript:void(0);" class="show_next" data-tax-id="ad_location">Show more</a></small>
                                                    <li>
                                                </ul>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="n-search-main">
                            <div class="n-bread-crumb">
                                <ol class="breadcrumb">
                                    <li> <a href="">Anasayfa</a></li>
                                    <li class="active"><a href="javascript:void(0);" class="active"> Arama Sayfası</a></li>
                                </ol>
                            </div>
                            <div class="heading-area">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <h4>Uygun İşler (11)</h4>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <form method="GET" id="job_order_search">
                                            <select class="js-example-basic-single form-control change_order" data-allow-clear="true" data-placeholder="Select Option" style="width: 100%" name="order_job">
                                                <option value="">Select Option</option>
                                                <option value="ASC">Ascending</option>
                                                <option value="DESC" selected>Descending </option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="n-search-listing n-featured-jobs featured">
                                <h3>Premium İşler</h3>
                                <div class="n-featured-job-boxes">
                                    <div class="n-job-single featured-box">
                                        <div class="n-job-img"><img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/05-1.png" alt="image" class="img-responsive"></div>
                                        <div class="n-job-detail">
                                            <div class="features-star-2"><i class="fa fa-star"></i></div>
                                            <ul class="list-inline">
                                                <li class="n-job-title-box">
                                                    <h4><a href="https://jobs.nokriwp.com/job/account-executive-direct-sales/">Account Executive, Direct Sales</a></h4>
                                                    <p>
                                                        <span><i class="ti-location-pin"></i> <a href="https://jobs.nokriwp.com/search-page/?job_location=66">USA</a></span><span><i class="ti-tag"></i> <a href="https://jobs.nokriwp.com/search-page/?cat_id=18">Consultant</a></span>
                                                    </p>
                                                    <ul class="featured-badge-list">
                                                        <li style=" background-color: rgba(250,122,86,0.2) !important;"><a href="https://jobs.nokriwp.com/search-page/?job_class=63" class="job-class-tags-anchor" style="color: #fa7a56 !important;">Feature</a></li>
                                                    </ul>
                                                </li>
                                                <li class="n-job-short">
                                                    <span> <strong>Type:</strong>Full time</span>
                                                    <span> <strong>Posted:</strong> 7 months ago</span>
                                                </li>
                                                <li class="n-job-btns">
                                                    <a href="javascript:void(0)" class="btn n-btn-rounded apply_job" data-toggle="modal" data-target="#myModal" data-job-id=268>Apply Now </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="n-job-single featured-box">
                                        <div class="n-job-img"><img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/05-1.png" alt="image" class="img-responsive"></div>
                                        <div class="n-job-detail">
                                            <div class="features-star-2"><i class="fa fa-star"></i></div>
                                            <ul class="list-inline">
                                                <li class="n-job-title-box">
                                                    <h4><a href="https://jobs.nokriwp.com/job/data-entry-clerk-work-from-home/">Data Entry Clerk &#8211; Work from Home</a></h4>
                                                    <p>
                                                        <span><i class="ti-location-pin"></i> <a href="https://jobs.nokriwp.com/search-page/?job_location=69">Chickasaw</a></span><span><i class="ti-tag"></i> <a href="https://jobs.nokriwp.com/search-page/?cat_id=84">Digital
                                  Service</a></span>
                                                    </p>
                                                    <ul class="featured-badge-list">
                                                        <li style=" background-color: rgba(250,122,86,0.2) !important;"><a href="https://jobs.nokriwp.com/search-page/?job_class=63" class="job-class-tags-anchor" style="color: #fa7a56 !important;">Feature</a></li>
                                                        <li style=" background-color: rgba(39,209,0,0.2) !important;"><a href="https://jobs.nokriwp.com/search-page/?job_class=64" class="job-class-tags-anchor" style="color: #27d100 !important;">Urgent</a></li>
                                                    </ul>
                                                </li>
                                                <li class="n-job-short">
                                                    <span> <strong>Type:</strong>Part time</span>
                                                    <span> <strong>Posted:</strong> 7 months ago</span>
                                                </li>
                                                <li class="n-job-btns">
                                                    <a href="javascript:void(0)" class="btn n-btn-rounded apply_job" data-toggle="modal" data-target="#myModal" data-job-id=269>Apply Now </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="n-job-single featured-box">
                                        <div class="n-job-img"><img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/00179-education-logo-design-real-estate-free-logos-online-02-1-150x150.png" alt="image" class="img-responsive"></div>
                                        <div class="n-job-detail">
                                            <div class="features-star-2"><i class="fa fa-star"></i></div>
                                            <ul class="list-inline">
                                                <li class="n-job-title-box">
                                                    <h4><a href="https://jobs.nokriwp.com/job/network-assistant-manager/">Network Assistant Manager</a></h4>
                                                    <p>
                                                        <span><i class="ti-location-pin"></i> <a href="https://jobs.nokriwp.com/search-page/?job_location=76">Germany</a></span><span><i class="ti-tag"></i> <a href="https://jobs.nokriwp.com/search-page/?cat_id=9">Information
                                  Technology</a></span>
                                                    </p>
                                                    <ul class="featured-badge-list">
                                                        <li style=" background-color: rgba(250,122,86,0.2) !important;"><a href="https://jobs.nokriwp.com/search-page/?job_class=63" class="job-class-tags-anchor" style="color: #fa7a56 !important;">Feature</a></li>
                                                    </ul>
                                                </li>
                                                <li class="n-job-short">
                                                    <span> <strong>Type:</strong>Contract</span>
                                                    <span> <strong>Posted:</strong> 7 months ago</span>
                                                </li>
                                                <li class="n-job-btns">
                                                    <a href="javascript:void(0)" class="btn n-btn-rounded apply_job" data-toggle="modal" data-target="#myModal" data-job-id=318>Apply Now </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="n-search-listing n-featured-jobs">
                                <div class="n-featured-job-boxes">
                                    <div class="n-job-single ">
                                        <div class="n-job-img"><img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/images-8-150x150.png" alt="image" class="img-responsive"></div>
                                        <div class="n-job-detail">

                                            <ul class="list-inline">
                                                <li class="n-job-title-box">
                                                    <h4><a href="https://jobs.nokriwp.com/job/ios-engineer-backup/">IOS ENGINEER BACKUP</a></h4>
                                                    <p>
                                                        <span><i class="ti-location-pin"></i> <a href="https://jobs.nokriwp.com/search-page/?job_location=66">USA</a></span><span><i class="ti-tag"></i> <a href="https://jobs.nokriwp.com/search-page/?cat_id=13">Engineering</a></span>
                                                    </p>

                                                </li>
                                                <li class="n-job-short">
                                                    <span> <strong>Type:</strong>Contract</span>
                                                    <span> <strong>Posted:</strong> 7 months ago</span>
                                                </li>
                                                <li class="n-job-btns">
                                                    <a href="javascript:void(0)" class="btn n-btn-rounded apply_job" data-toggle="modal" data-target="#myModal" data-job-id=340>Apply Now </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination">
                                                <li><span aria-current='page' class='page-numbers current'>1</span></li>
                                                <li><a class='page-numbers' href='https://jobs.nokriwp.com/search-page/page/2/'>2</a></li>
                                                <li><a class="next page-numbers" href="https://jobs.nokriwp.com/search-page/page/2/">Sonraki >></a></li>
                                            </ul>
                                        </nav>
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


    @include('layouts.footer')
    @endsection