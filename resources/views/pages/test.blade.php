@extends('master)


@section('content')
    @include('layouts.header')
<form id="sb-login-form-data" action="{{url('testt')}}" method="post">

    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" name="deneme">

    <input type="submit" value="yolla">


</form>
    @include('layouts.footer')

@endsection