
@extends('iscipanel.master')



@include('iscipanel.layouts.header')

@include('iscipanel.layouts.sidebar')

@section('content')


    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                       Başvurularım
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">

											</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">

											</span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
											<span class="m-nav__link-text">

											</span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">

            </div>
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                               Başvurduğum İş İlanları
                            </h3>
                        </div>
                    </div>

                </div>
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                <div class="form-group m-form__group row align-items-center">


                                    <div class="col-md-4">
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
                    @if(count($jobs)==0)
                        <p>Başvuru bulunmamaktadır.</p>
                    @else
                    <!--end: Search Form -->
                    <!--begin: Datatable -->
                    <table class="m-datatable" id="html_table" width="100%">
                        <thead>
                        <tr>
                            <th title="Field #1">
                                İlan Başlığı
                            </th>
                            <th title="Field #3">
                                Çalışma Sekli
                            </th>
                            <th title="Field #4">
                                Adres
                            </th>
                            <th title="Field #5">
                                Kıyafet
                            </th>
                            <th title="Field #6">
                                Ekipman
                            </th>
                            <th title="Field #7">
                                Kişi Sayısı
                            </th>
                            <th title="Field #11">
                                İlan Detayı
                            </th>
                        </thead>
                        <tbody>
                        @foreach($jobs as $job)
                            <tr>
                                <td >
                                    {{$job->title}}
                                </td>
                                <td>
                                    {{$job->work_style}}
                                </td>
                                <td>
                                    {{$job->address}}
                                </td>
                                <td>
                                    {{$job->wear}}
                                </td>
                                <td>
                                    {{$job->tool}}
                                </td>
                                <td>
                                    {{$job->person_count}}
                                </td>


                                <td><a href="{{url('/is-ilani/'.$job->slug)}}" class="btn btn-primary">İlana Git</a></td>




                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                        @endif

                </div>
            </div>
        </div>
    </div>


@section('active-jobs-scripts')
    <script src="{{asset('assets/demo/default/custom/components/datatables/base/data-local.js')}}" type="text/javascript"></script>
    <!-- begin::Quick Nav -->
    <script src="{{asset('assets/demo/default/custom/components/datatables/base/html-table.js')}}" type="text/javascript"></script>

@endsection



@endsection

@include('iscipanel.layouts.footer')