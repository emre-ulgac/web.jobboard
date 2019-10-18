<div class="transparent-header-1">
    <nav id="menu-1" class="mega-menu fa-change-black n-header-trabsparent ">
        <section class="menu-list-items ">
            <div class="container">
                <ul class="menu-logo">
                    <li><a href="{{url('anasayfa')}}"><img src="../wp-content/themes/nokri/images/stepjob-2.png" class="img-responsive" alt="logo"></a></li>
                </ul>

                @php @session_start(); @endphp
                @if (isset($_SESSION["me"]) && isset($_SESSION["access_token"]))
                    <ul class="menu-button">

                        <li><a href="{{url('ilan-arama')}}" class="n-login-header">İlan Ara  <i class="fa fa-angle-down fa-indicator"></i></a></li>

                        <li><a href="/profil/{{$_SESSION["me"]->slug}}" class="n-login-header"><i class="fa fa-user-plus"></i>Profilim</a></li>
                            <li><a href="{{ action('SignInController@logout') }}" class="n-login-header"><i class="fa fa-sign-out" aria-hidden="true"></i>Çıkış Yap</a></li>




                    </ul>
                @else
                    <ul class="menu-button">
                        <li><a href="{{url('giris')}}" class="n-login-header"><i class="fa fa-sign-in"></i>Giriş Yap</a></li>
                        <li><a href="{{url('kayit-ol')}}" class="n-login-header"><i class="fa fa-user-plus"></i>Kayıt Ol</a></li>
                        <li><a href="#" class="btn n-btn-rounded"><i class="fa fa-plus"></i>Tüm İşler</a></li>
                    </ul>

                    <ul class="menu-links ">

                        <li><a href="{{url('anasayfa')}}">Anasayfa  <i class="fa fa-angle-down fa-indicator"></i></a></li>
                        <li><a href="{{url('hakkimizda')}}">Hakkımızda  <i class="fa fa-angle-down fa-indicator"></i></a></li>
                        <li><a href="{{url('ilan-arama')}}">İlan Ara  <i class="fa fa-angle-down fa-indicator"></i></a></li>


                        <li><a href="{{url('iletisim')}}">İletişim  <i class="fa fa-angle-down fa-indicator"></i></a></li>
                    </ul>
                @endif



            </div>
        </section></nav></div>

