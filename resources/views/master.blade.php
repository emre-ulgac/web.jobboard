<!DOCTYPE html>
<html lang="en-US" class="no-js">

<head>


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


    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

</head>


<body class="home page-template page-template-page-home page-template-page-home-php page page-id-708 woocommerce-no-js wpb-js-composer js-comp-ver-5.7 vc_responsive">

@yield('header')
@yield('content')




<script type="text/javascript" src="{{asset('wp-includes/js/jquery/jquery-migrate.min.js')}}"></script>
<script type="text/javascript" src="wp-content/plugins/add-to-any/addtoany.min.js"></script>
<script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js"></script>


<script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js"></script>
<script type="text/javascript" src="wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/assets/leaflet/leaflet.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/assets/leaflet/leaflet.markercluster.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/assets/leaflet/leaflet-search.min.js"></script>


<script type="text/javascript" src="wp-content/plugins/contact-form-7/includes/js/scripts.js"></script>
<script type="text/javascript" src="wp-content/plugins/nokri_framework/js/theme.js"></script>


<script type="text/javascript" src="wp-content/themes/nokri/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/bootstrap.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/bootstrap-toggle.min.js">

</script><script type="text/javascript" src="wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/mega_menu.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/owl-carousel.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/counterup.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery.waypoints.js"></script>

<script type="text/javascript" src="wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js"></script>



<script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>


<script type="text/javascript" src="wp-content/themes/nokri/js/hello.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/dropzone.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/parsley.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery.caret.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery.tag-editor.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/new/fileinput.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/new/jquery.add-input-area.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/new/datepicker.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/new/date-picker-lang/datepicker.en.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery.appear.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery.tipsy.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/icheck.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/theia-sticky-sidebar.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/toastr.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/search.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery-confirm.min.js"></script>
,<script type="text/javascript" src="wp-content/themes/nokri/js/jquery.countTo.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/jquery-te.min.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/color-switcher.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/dummylatlng.js"></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/perfect-scrollbar.js"></script>
<script type="text/javascript">//<![CDATA[
    var get_strings={"confirmation":"Confirmation!","content":"Are you sure you want to do this?","btn_cnfrm":"Confirm","success":"Success!","action_success":"Action performed successfully","rgstr_info":"Information","rgstr_resend":"Resend email","rgstr_close":"Close","deghead":"Add another degree (new)","degtitle":"Qualification title","deginsti":"Institute  name","degstart":"Start date","degend":"End date","degpercnt":"Percentage","deggrad":"Grades","degpercntplc":"Only digits allowed without % sign e.g 80.0","deggradplc":"Only grade letter e.g A+,B,C","degdesc":"Description","degremov":"Remove","projthead":"Profession additional field","projtitle":"Are you currently working there?","projstrt":"Job start date","projend":"Job end date","projdesign":"Designation","projorg":"Organization","projdesc":"Description","certhead":"Certification additional field","certtitle":"Certification title","certstrt":"Certification start","certend":"Certification end","certdur":"Certification duration","certinst":"Certification institute","certdesc":"Certification description","resume_select":"Select your resume","template_select":"Select email template","option_select":"Select an option","select_tags":"Set skill percentage","select_jobs_tags":"Add tags","select_tags_gen":"Add a tag","apply_msg":"Oooooppss!!","apply_details":"You have already apllied on this job","one":"One Star","two":"Two Stars","three":"Three Stars","four":"Four Stars","five":"Five Stars","Sunday":"Sunday","Monday":"Monday","Tuesday":"Tuesday","Wednesday":"Wednesday","Thursday":"Thursday","Friday":"Friday","Saturday":"Saturday","Sun":"Sun","Mon":"Mon","Tue":"Tue","Wed":"Wed","Thu":"Thu","Fri":"Fri","Sat":"Sat","Su":"Su","Mo":"Mo","Tu":"Tu","We":"We","Th":"Th","Fr":"Fr","Sa":"Sa","January":"January","February":"February","March":"March","April":"April","May":"May","June":"June","July":"July","August":"August","September":"September","October":"October","November":"November","December":"December","Jan":"Jan","Feb":"Feb","Mar":"Mar","Apr":"Apr","Jun":"Jun","Jul":"July","Aug":"Aug","Sep":"Sep","Oct":"Oct","Nov":"Nov","Dec":"Dec","Today":"Today","Clear":"Clear","dateFormat":"dateFormat","timeFormat":"timeFormat","p_text":"Paragraph","nokri_map_type":"leafletjs_map","is_sticky_menu":""};
    //]]></script>
<script type="text/javascript" src="wp-content/themes/nokri/js/custom.js"></script><script type="text/javascript" src="wp-content/plugins/js_composer/assets/js/dist/js_composer_front.min.js"></script>





<script>
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
</script>
<script>
    $(document).ready(function() {
        $("#candidate2").hide();
        $("#employer2").show();

        $("#employer").click(function () {

                $("#employer2").show();

                $("#candidate2").hide();

        });

        $("#candidate").click(function () {

            $("#employer2").hide();

            $("#candidate2").show();

        });
    });
</script>


<script>
    $(document).ready(function() {
        $("#candidate2").hide();
        $("#employer2").show();
        $("#surname").hide();
        $("#signup--firstname").attr("placeholder", "Şirket/Mağaza/Organizasyon Adı");

        $("#employer").click(function () {

            $("#employer2").show();

            $("#candidate2").hide();
            $("#surname").hide();
            $("#signup--firstname").attr("placeholder", "Şirket/Mağaza/Organizasyon Adı");





        });

        $("#candidate").click(function () {

            $("#employer2").hide();

            $("#candidate2").show();
            $("#surname").show();
            $("#signup--firstname").attr("placeholder", "İsminiz");

        });
    });
</script>


@include('sweetalert::alert')



</body></html>
