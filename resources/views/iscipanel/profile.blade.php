
@extends('iscipanel.master')




@include('iscipanel.layouts.header')

@include('iscipanel.layouts.sidebar')

@section('content')

    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Profilim
                    </h3>
                </div>

            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-xl-3 col-lg-4">
                    <div class="m-portlet m-portlet--full-height  ">
                        <div class="m-portlet__body">
                            <div class="m-card-profile">
                                <div class="m-card-profile__title m--hide">
                                    Your Profile
                                </div>

                                <div class="m-card-profile__pic">
                                    <div class="m-card-profile__pic-wrapper">
                                        <img src="{{$user->image}}" alt=""/>
                                    </div>
                                </div>


                                <div class="m-card-profile__details">
												<span class="m-card-profile__name">

                                                    {{$user->name}}
												</span>
                                    <a href="" class="m-card-profile__email m-link">
                                        {{$user->email}}
                                    </a>
                                </div>

                                <div class="m-card-profile__details m--margin-top-35">
												<span class="m-card-profile__name">

                                                   Puan
												</span>
                                    <a href="" class="m-card-profile__email m-link">
                                        @for($i=0; $i<5; $i++)
                                       <img  style="width: 20px;" src="{{asset('assets/images/star.png')}}">
                                        @endfor
                                    </a>
                                </div>

                                <div class="m-card-profile__details m--margin-top-35">
												<span class="m-card-profile__name">

                                                   Tecrübe
												</span>
                                    <a href="" class="m-card-profile__email m-link">
                                       Toplam 20 işe gittiniz.
                                    </a>
                                </div>
                            </div>
                            <div class="m-portlet__body-separator"></div>

                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-tools">

                            </div>

                        </div>
                        <div class="tab-content">
                            <div class="tab-pane active" id="m_user_profile_tab_1">
                                <form  enctype="multipart/form-data" action="{{url('profile/'.$_SESSION['me']->id)}}"  method="post" class="m-form m-form--fit m-form--label-align-right">
                                    @csrf
                                    {{method_field('PUT')}}
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group m--margin-top-10">
                                            @include('iscipanel.image-editor')

                                        </div>
                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">
                                                    1. Şirket Bilgisi
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                 İsim
                                            </label>
                                            <div class="col-7">
                                                <input class="form-control m-input" name="name" type="text" value="{{$user->name}}">
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Soyisim
                                            </label>
                                            <div class="col-7">
                                                <input class="form-control m-input" name="surname" type="text" value="{{$user->surname}}">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Email
                                            </label>
                                            <div class="col-7">
                                                <input class="form-control m-input" name="email" type="text" value="{{$user->email}}">
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Telefon Numarası
                                            </label>
                                            <div class="col-7">
                                                <input class="form-control m-input" name="phone" type="text" value="{{$user->phone}}">
                                            </div>
                                        </div>

                                        <div class="form-group m-form__group">
                                            <label for="exampleTextarea">
                                                Hakkımda
                                            </label>
                                            <textarea class="form-control m-input" id="exampleTextarea" name="personal_info" rows="3"></textarea>
                                        </div>
                                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">
                                                    2. Adres Bilgisi
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Şehir
                                            </label>
                                            <div class="col-xl-6 col-lg-6">
                                                <select name="province"  class="form-control m-input" id="sehir_2">
                                                    <option value="">
                                                        İl Seçiniz
                                                    </option>
                                                    @if($user->addressDetails->province =="İstanbul")
                                                    <option value="İstanbul" selected>
                                                        İSTANBUL
                                                    </option>
                                                    @endif



                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                İlçe
                                            </label>
                                            <div class="col-xl-6 col-lg-6">
                                                <select name="city" class="form-control m-input" id="ilce_2">
                                                    <option value="">
                                                        İlçe Seçiniz
                                                    </option>
                                                    @foreach($towns as $town)
                                                        @if($user->addressDetails->city == $town->TownName)

                                                            <option value="{{$town->TownName}}" selected>
                                                                {{$town->TownName}}

                                                            </option>
                                                        @endif

                                                        <option value="{{$town->TownName}}" >
                                                            {{$town->TownName}}

                                                        </option>


                                                    @endforeach


                                                </select>
                                            </div>
                                        </div>

                                        <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space-2x"></div>
                                        <div class="form-group m-form__group row">
                                            <div class="col-10 ml-auto">
                                                <h3 class="m-form__section">
                                                    3. Sosyal Medya Hesapları
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Linkedin
                                            </label>
                                            <div class="col-7">
                                                <input class="form-control m-input" name="linkedin" type="text" value="www.linkedin.com/Mark.Andre">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Facebook
                                            </label>
                                            <div class="col-7">
                                                <input class="form-control m-input"  name="facebook" type="text" value="www.facebook.com/Mark.Andre">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input"  class="col-2 col-form-label">
                                                Twitter
                                            </label>
                                            <div class="col-7">
                                                <input class="form-control m-input" name="twitter" type="text" value="www.twitter.com/Mark.Andre">
                                            </div>
                                        </div>
                                        <div class="form-group m-form__group row">
                                            <label for="example-text-input" class="col-2 col-form-label">
                                                Instagram
                                            </label>
                                            <div class="col-7">
                                                <input class="form-control m-input"  name="instagram" type="text" value="www.instagram.com/Mark.Andre">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-portlet__foot m-portlet__foot--fit">
                                        <div class="m-form__actions">
                                            <div class="row">
                                                <div class="col-2"></div>
                                                <div class="col-7">
                                                    <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom">
                                                        Değişiklikleri Kaydet
                                                    </button>
                                                    &nbsp;&nbsp;
                                                    <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom">
                                                        İptal Et
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane " id="m_user_profile_tab_2"></div>
                            <div class="tab-pane " id="m_user_profile_tab_3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@section('profile-scripts')

    <!-- begin::Quick Nav -->
    <!--begin::Base Scripts -->
    <script src="{{asset('assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->



@endsection



@endsection

@include('iscipanel.layouts.footer')