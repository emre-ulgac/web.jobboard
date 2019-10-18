
<!DOCTYPE html>
<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        Metronic | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->

    <!--end::Page Vendors -->
    <link href="{{asset('assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="assets/demo/default/media/img/logo/favicon.ico" />



    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="N3 Etkinlik mesleğiniz ve ilgi alanınız ile ilgili her türlü etkinliği takip edebileceğiniz ve kendi etkinliklerinizi duyurabileceğiniz bir platformdur."/>
    <meta name="keywords" content="etkinlik,mesleki etkinlikler,spor etkinlikleri,kültürel etkinlikler,üniversite etkinlikleri"/>
    <title>@yield('title') | StepJob</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="http://OFFLINEZIP.wpsho/wp-content/themes/nokri/images/favicon.ico" type="image/x-icon">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="dns-prefetch" href="//s.w.org">
    <link rel="stylesheet" id="wp-block-library-css" href="../wp-includes/css/dist/block-library/style.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="contact-form-7-css" href="../wp-content/plugins/contact-form-7/includes/css/styles.css" type="text/css" media="all">
    <link rel="stylesheet" id="dashicons-css" href="../wp-includes/css/dashicons.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="post-views-counter-frontend-css" href="../wp-content/plugins/post-views-counter/css/frontend.css" type="text/css" media="all">
    <link rel="stylesheet" id="woocommerce-layout-css" href="../wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css" type="text/css" media="all">
    <style id="woocommerce-layout-inline-css" type="text/css">
        .infinite-scroll .woocommerce-pagination {
            display: none
        }
    </style>




    <link rel="stylesheet" id="woocommerce-smallscreen-css" href="../wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css" type="text/css" media="only screen and (max-width: 768px)">
    <link rel="stylesheet" id="woocommerce-general-css" href="../wp-content/plugins/woocommerce/assets/css/woocommerce.css" type="text/css" media="all">
    <style id="woocommerce-inline-inline-css" type="text/css">
        .woocommerce form .form-row .required {
            visibility: visible
        }
    </style>
    <link rel="stylesheet" id="leaflet-css" href="../wp-content/themes/nokri/assets/leaflet/leaflet.css" type="text/css" media="all">
    <link rel="stylesheet" id="leaflet-search-css" href="../wp-content/themes/nokri/assets/leaflet/leaflet-search.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="perfect-scrollbar-css" href="../wp-content/themes/nokri/css/perfect-scrollbar.css" type="text/css" media="all">
    <link rel="stylesheet" id="nokri-style-css" href="../wp-content/themes/nokri/style.css" type="text/css" media="all">
    <link rel="stylesheet" id="bootstrap-theme-css" href="../wp-content/themes/nokri/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="megamenu-css" href="../wp-content/themes/nokri/css/mega_menu.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="animate-min-css" href="../wp-content/themes/nokri/css/animate.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="owl-carousel-css" href="../wp-content/themes/nokri/css/owl.carousel.css" type="text/css" media="all">
    <link rel="stylesheet" id="owl-theme-css" href="../wp-content/themes/nokri/css/owl.theme.default.css" type="text/css" media="all">
    <link rel="stylesheet" id="et-line-fonts-css" href="../wp-content/themes/nokri/css/et-line-fonts.css" type="text/css" media="all">
    <link rel="stylesheet" id="nokri-woo-css" href="../wp-content/themes/nokri/css/woocommerce.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-te-css" href="../wp-content/themes/nokri/css/jquery-te.css" type="text/css" media="all">
    <link rel="stylesheet" id="font-awesome-css" href="../wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="line-awesome-css" href="../wp-content/themes/nokri/css/line-awesome.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-tagsinput-css" href="../wp-content/themes/nokri/css/jquery.tag-editor.css" type="text/css" media="all">
    <link rel="stylesheet" id="select2-min-css" href="../wp-content/themes/nokri/css/select2.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="dropzone-css" href="../wp-content/themes/nokri/css/dropzone.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-confirm-css" href="../wp-content/themes/nokri/css/jquery-confirm.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="toastr-min-css-css" href="../wp-content/themes/nokri/css/toastr.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="toggle-css" href="../wp-content/themes/nokri/css/bootstrap-toggle.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-fancybox-css" href="../wp-content/themes/nokri/css/jquery.fancybox.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="datepicker-css" href="../wp-content/themes/nokri/css/new/datepicker.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="fileinput-css" href="../wp-content/themes/nokri/css/new/fileinput.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="ichecksquare-css" href="../wp-content/themes/nokri/css/new/checkbox-square.css" type="text/css" media="all">
    <link rel="stylesheet" id="icheck-css" href="../wp-content/themes/nokri/css/minimal/minimal.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-tipsy-css" href="../wp-content/themes/nokri/css/new/jquery.tipsy.css" type="text/css" media="all">
    <link rel="stylesheet" id="themify-icons-css" href="../wp-content/themes/nokri/css/new/themify-icons.css" type="text/css" media="all">
    <link rel="stylesheet" id="jquery-bxslider-css" href="../wp-content/themes/nokri/css/new/jquery.bxslider.css" type="text/css" media="all">
    <link rel="stylesheet" id="nokri-theme-slug-fonts-css" href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CSans+Serif:400,500,700%7CQuicksand:400,500,700&subset=latin,latin-ext" type="text/css" media="all">
    <link rel="stylesheet" id="nokri-admin-custom-css" href="../wp-content/themes/nokri/css/admin-custom.css" type="text/css" media="all">
    <link rel="stylesheet" id="nokri-custom-css" href="../wp-content/themes/nokri/css/custom.css" type="text/css" media="all">
    <link rel="stylesheet" id="nokri-theme-style-css" href="../wp-content/themes/nokri/css/theme.css" type="text/css" media="all">
    <link rel="stylesheet" id="nokri-colours-css" href="../wp-content/themes/nokri/css/colors/defualt.css" type="text/css" media="all">
    <link rel="stylesheet" id="js_composer_front-css" href="../wp-content/plugins/js_composer/assets/css/js_composer.min.css" type="text/css" media="all">
    <link rel="stylesheet" id="addtoany-css" href="../wp-content/plugins/add-to-any/addtoany.min.css" type="text/css" media="all">


    <script data-cfasync="false">window.a2a_config=window.a2a_config||{};a2a_config.callbacks=[];a2a_config.overlays=[];a2a_config.templates={};(function(d,s,a,b){a=d.createElement(s);b=d.getElementsByTagName(s)[0];a.async=1;a.src="https://static.addtoany.com/menu/page.js";b.parentNode.insertBefore(a,b);})(document,"script");</script><noscript>
        <style>
            .woocommerce-product-gallery {
                opacity: 1 !important
            }
        </style>
    </noscript>
    <style type="text/css">
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important
        }
    </style><noscript>
        <style type="text/css">
            .wpb_animate_when_almost_visible {
                opacity: 1
            }
        </style>
    </noscript>







</head>


<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >



<div class="m-grid m-grid--hor m-grid--root m-page">

    @include('layouts.header')
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">

            <div class="container">
                <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3>
                              İş İlanı Ara
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-5 m--margin-bottom-5">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="form-group m-form__group row align-items-center">
                                    <div class="col-md-3">
                                        <div class="m-form__group m-form__group--inline">
                                            <div class="m-form__label">
                                                <label class="m-label m-label--single">
                                                    Kategori:
                                                </label>
                                            </div>
                                            <div class="m-form__control">
                                                <select class="form-control m-bootstrap-select" id="m_form_type2">
                                                    <option value="">
                                                        Hepsi
                                                    </option>
                                                    @foreach($categories as $category)
                                                    <option value="{{$category->identifier}}">
                                                        {{$category->name}}
                                                    </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-md-none m--margin-bottom-10"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="m-form__group m-form__group--inline">
                                            <div class="m-form__label">
                                                <label class="m-label m-label--single">
                                                    Yetkinlikler
                                                </label>
                                            </div>
                                            <div class="m-form__control">
                                                <select class="form-control m-bootstrap-select" id="m_form_type3">
                                                    <option value="">
                                                        Hepsi
                                                    </option>
                                                    @foreach($skills as $skill)
                                                        <option value="{{$skill->identifier}}">
                                                            {{$skill->name}}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-md-none m--margin-bottom-10"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="m-form__group m-form__group--inline">
                                            <div class="m-form__label">
                                                <label class="m-label m-label--single">
                                                    Çalışma Şekli:
                                                </label>
                                            </div>
                                            <div class="m-form__control">
                                                <select class="form-control m-bootstrap-select" id="m_form_type4">
                                                    <option value="">
                                                        Hepsi
                                                    </option>
                                                    <option value="1">
                                                        Günlük
                                                    </option>
                                                    <option value="2">
                                                        Part Time
                                                    </option>
                                                    <option value="3">
                                                        Freelance
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-md-none m--margin-bottom-10"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="m-input-icon m-input-icon--left">
                                            <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
                                            <span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
                                        </div>
                                    </div>
                                </div>


                            </div>

                        </div>
                    </div>
                    <!--end: Search Form -->


    </div>
                    <style>#html_table{

                            overflow-x: hidden !important;
                        }</style>

                <!--begin: Datatable -->
                <table class="m-datatable" id="html_table" width="100%" >
                    <thead>
                    <tr>
                        <th title="Field #1" style="visibility: hidden">
                            Order ID
                        </th>

                        <th  title="Field #2" style="display: none">
                            Calısma Sekli
                        </th>
                        <th title="Field #3" style="display: none">
                            Type
                        </th>

                        <th title="Field #4" style="display: none">
                            Type2
                        </th>

                        <th title="Field #5" style="display: none">
                            Type3
                        </th>

                        <th title="Field #6" style="display: none">
                            Type4
                        </th>






                    </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                    <tr>

                        <td>
                            <div class="n-search-listing n-featured-jobs">
                                <div class="n-featured-job-boxes">
                                    <div class="n-job-single ">
                                        <div class="n-job-img"><img src="{{'http://127.0.0.1:8000'.$job->employer->image}}" alt="image" class="img-responsive"></div>
                                        <div class="n-job-detail">

                                            <ul class="list-inline">
                                                <li class="n-job-title-box">
                                                    <h4><a href="/is-ilani/{{$job->slug}}">{{$job->title}}</a></h4>
                                                    <p>
                                                        <span><i class="ti-location-pin"></i> <a href="https://jobs.nokriwp.com/search-page/?job_location=66">{{$job->addressDetails->city}}</a></span><span><i class="ti-tag"></i> <a href="https://jobs.nokriwp.com/search-page/?cat_id=13">{{$job->categoryDetails->name}}</a></span>
                                                    </p>

                                                </li>
                                                <li class="n-job-short">
                                                    <span> <strong>Çalışma Şekli:</strong>{{$job->work_style}}</span>
                                                    <span> <strong>Posted:</strong> 7 months ago</span>
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
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </td>
                        <td style="display: none">1</td>
                        @if($job->work_style == "Günlük")
                            <td>
                                1
                            </td>

                        @else
                            <td>
                                2
                            </td>
                        @endif
                        
                        <td style="display:none;">{{$job->category_id}}</td>
                        @if(count($job->skills) == 0)
                            <td style="display:none;"></td>
                        @else
                            <td style="display:none;">@foreach($job->skills as $skill){{$skill->name}}@endforeach</td>
                        @endif
                        @if($job->work_style == "Günlük")
                            <td>
                                1
                            </td>

                        @else
                            <td>
                                2
                            </td>
                        @endif


                    </tr>
                    @endforeach



                    </tbody>
                </table>

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
                <!--end: Datatable -->

                </div>

            </div>

    @yield('footer')








<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
            <script src="{{asset('assets/demo/default/custom/components/datatables/base/data-local.js')}}" type="text/javascript"></script>
            <!-- begin::Quick Nav -->
            <script src="{{asset('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>

<!--end::Page Vendors -->
<!--begin::Page Snippets -->



<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>













