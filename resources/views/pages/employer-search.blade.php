@extends('master')

@section('content')
@include('layouts.header')


<div class="clearfix"></div> <section class="n-search-page n-user-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <aside class="new-sidebar">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading active" role="tab">
                                        <a role="button" data-toggle="collapse" href="#search-widget">
                                            Search by Name            </a>
                                    </div>
                                    <div id="search-widget" class="panel-collapse collapse in" role="tabpanel" >
                                        <div class="panel-body">
                                            <form role="search" method="get" action = "https://jobs.nokriwp.com/employers/">
                                                <div class="form-group">
                                                    <input type="text"  class="form-control" value="" name="emp_title" placeholder="Search Here" >
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
                                        <a role="button" data-toggle="collapse" href="#advertisment-widget">
                                            Adevrtisement            </a>
                                    </div>
                                    <div id="advertisment-widget" class="panel-collapse collapse in" role="tabpanel" >
                                        <div class="panel-body">
                                            <img src="https://demo.nokriwp.com/wp-content/uploads/2018/09/300x600-yellow.png" class="img-responsive">          </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="n-search-main">
                            <div class="n-bread-crumb">
                                <ol class="breadcrumb">
                                    <li> <a href="https://jobs.nokriwp.com/">Home</a></li>
                                    <li class="active"><a href="javascript:void(0);" class="active">Employer Search</a></li>
                                </ol>
                            </div>
                            <div class="heading-area">
                                <div class="row">
                                    <div class="col-md-8 col-sm-8 col-xs-12">
                                        <h4>Employer found (12)</h4>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <form method="GET" id="candiate_order">
                                            <select class="js-example-basic-single form-control candidates_orders" data-allow-clear="true" data-placeholder="Select option" style="width: 100%" name="order">
                                                <option value="0">Select order</option>
                                                <option value="name" >Alphabatically</option>
                                                <option value="date" >New registered</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="n-search-listing n-featured-jobs">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                                    <div class="row">
                                        <div class="n-company-grids">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="n-company-grid-single">
                                                    <div class="n-company-grid-img">
                                                        <div class="n-company-logo">
                                                            <a href="https://jobs.nokriwp.com/employer/peakstel/"> <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/01-6.png" class="img-responsive" alt="image"></a>
                                                        </div>
                                                        <div class="n-company-title">
                                                            <h3><a href="https://jobs.nokriwp.com/employer/peakstel/">PeaksTel</a></h3>
                                                            <p class="location"><i class="la la-map-marker"></i> Assen, nederland</p>                                                   </div>
                                                        <div class="n-company-follow">
                                                            <a  data-value="11"  class="btn n-btn-rounded follow_company"><i class="fa fa-send-o"></i> Follow</a>                                                   </div>
                                                    </div>
                                                    <div class="n-company-bottom"><ul class="social-links list-inline"><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="icon"></a></li></ul></div>                                             </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="n-company-grid-single">
                                                    <div class="n-company-grid-img">
                                                        <div class="n-company-logo">
                                                            <a href="https://jobs.nokriwp.com/employer/msc/"> <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/medical-logo-1.jpg" class="img-responsive" alt="image"></a>
                                                        </div>
                                                        <div class="n-company-title">
                                                            <h3><a href="https://jobs.nokriwp.com/employer/msc/">Wiliam</a></h3>
                                                            <p class="location"><i class="la la-map-marker"></i> Lahore Pakistan</p>                                                   </div>
                                                        <div class="n-company-follow">
                                                            <a  data-value="12"  class="btn n-btn-rounded follow_company"><i class="fa fa-send-o"></i> Follow</a>                                                   </div>
                                                    </div>
                                                    <div class="n-company-bottom"><ul class="social-links list-inline"><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="icon"></a></li></ul></div>                                             </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="n-company-grid-single">
                                                    <div class="n-company-grid-img">
                                                        <div class="n-company-logo">
                                                            <a href="https://jobs.nokriwp.com/employer/mediaxt/"> <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/01-1.png" class="img-responsive" alt="image"></a>
                                                        </div>
                                                        <div class="n-company-title">
                                                            <h3><a href="https://jobs.nokriwp.com/employer/mediaxt/">MediaX Technologies</a></h3>
                                                            <p class="location"><i class="la la-map-marker"></i> Los Angeles</p>                                                   </div>
                                                        <div class="n-company-follow">
                                                            <a  data-value="5"  class="btn n-btn-rounded follow_company"><i class="fa fa-send-o"></i> Follow</a>                                                   </div>
                                                    </div>
                                                    <div class="n-company-bottom"><ul class="social-links list-inline"><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="icon"></a></li></ul></div>                                             </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="n-company-grid-single">
                                                    <div class="n-company-grid-img">
                                                        <div class="n-company-logo">
                                                            <a href="https://jobs.nokriwp.com/employer/mcafe/"> <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/rouge-creative-stickers-muraux-pour-cuisine-decora-1.jpg" class="img-responsive" alt="image"></a>
                                                        </div>
                                                        <div class="n-company-title">
                                                            <h3><a href="https://jobs.nokriwp.com/employer/mcafe/">Umair</a></h3>
                                                            <p class="location"><i class="la la-map-marker"></i> Perth Australia</p>                                                   </div>
                                                        <div class="n-company-follow">
                                                            <a  data-value="9"  class="btn n-btn-rounded follow_company"><i class="fa fa-send-o"></i> Follow</a>                                                   </div>
                                                    </div>
                                                    <div class="n-company-bottom"><ul class="social-links list-inline"><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="icon"></a></li></ul></div>                                             </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="n-company-grid-single">
                                                    <div class="n-company-grid-img">
                                                        <div class="n-company-logo">
                                                            <a href="https://jobs.nokriwp.com/employer/localhead/"> <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/05-1.png" class="img-responsive" alt="image"></a>
                                                        </div>
                                                        <div class="n-company-title">
                                                            <h3><a href="https://jobs.nokriwp.com/employer/localhead/">Localhead Inc. Ltd.</a></h3>
                                                            <p class="location"><i class="la la-map-marker"></i> Sydny, Austrailia</p>                                                   </div>
                                                        <div class="n-company-follow">
                                                            <a  data-value="4"  class="btn n-btn-rounded follow_company"><i class="fa fa-send-o"></i> Follow</a>                                                   </div>
                                                    </div>
                                                    <div class="n-company-bottom"><ul class="social-links list-inline"><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="icon"></a></li></ul></div>                                             </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="n-company-grid-single">
                                                    <div class="n-company-grid-img">
                                                        <div class="n-company-logo">
                                                            <a href="https://jobs.nokriwp.com/employer/kings/"> <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/03-2.png" class="img-responsive" alt="image"></a>
                                                        </div>
                                                        <div class="n-company-title">
                                                            <h3><a href="https://jobs.nokriwp.com/employer/kings/">Kings Pvt. Ltd.</a></h3>
                                                            <p class="location"><i class="la la-map-marker"></i> sydney austrailia</p>                                                   </div>
                                                        <div class="n-company-follow">
                                                            <a  data-value="3"  class="btn n-btn-rounded follow_company"><i class="fa fa-send-o"></i> Follow</a>                                                   </div>
                                                    </div>
                                                    <div class="n-company-bottom"><ul class="social-links list-inline"><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="icon"></a></li></ul></div>                                             </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="n-company-grid-single">
                                                    <div class="n-company-grid-img">
                                                        <div class="n-company-logo">
                                                            <a href="https://jobs.nokriwp.com/employer/grandleon/"> <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/06.png" class="img-responsive" alt="image"></a>
                                                        </div>
                                                        <div class="n-company-title">
                                                            <h3><a href="https://jobs.nokriwp.com/employer/grandleon/">GrandLeon</a></h3>
                                                            <p class="location"><i class="la la-map-marker"></i> North America</p>                                                   </div>
                                                        <div class="n-company-follow">
                                                            <a  data-value="6"  class="btn n-btn-rounded follow_company"><i class="fa fa-send-o"></i> Follow</a>                                                   </div>
                                                    </div>
                                                    <div class="n-company-bottom"><ul class="social-links list-inline"><li><a href="http://www.facebook.com"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="icon"></a></li><li><a href="http://www.twitter.com"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="icon"></a></li><li><a href="http://www.google.com"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="icon"></a></li><li><a href="http://www.linkedin.com"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="icon"></a></li></ul></div>                                             </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <div class="n-company-grid-single">
                                                    <div class="n-company-grid-img">
                                                        <div class="n-company-logo">
                                                            <a href="https://jobs.nokriwp.com/employer/excings/"> <img src="https://jobs.nokriwp.com/wp-content/uploads/2018/09/af0d7d7202555927da033a17925db572-1.png" class="img-responsive" alt="image"></a>
                                                        </div>
                                                        <div class="n-company-title">
                                                            <h3><a href="https://jobs.nokriwp.com/employer/excings/">Excings Motors</a></h3>
                                                            <p class="location"><i class="la la-map-marker"></i> india</p>                                                   </div>
                                                        <div class="n-company-follow">
                                                            <a  data-value="10"  class="btn n-btn-rounded follow_company"><i class="fa fa-send-o"></i> Follow</a>                                                   </div>
                                                    </div>
                                                    <div class="n-company-bottom"><ul class="social-links list-inline"><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/006-facebook.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/004-twitter.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/003-google-plus.png" alt="icon"></a></li><li><a href="#"><img src="https://jobs.nokriwp.com/wp-content/themes/nokri/images/icons/005-linkedin.png" alt="icon"></a></li></ul></div>                                             </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">

                                    <li><span aria-current='page' class='page-numbers current'>1</span></li>
                                    <li><a class='page-numbers' href='/employers/?page=2'>2</a></li>
                                    <li><a class="next page-numbers" href="/employers/?page=2"><i class="fa fa-chevron-right" aria-hidden="true"></i></a></li>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    @include('layouts.footer')

    @endsection