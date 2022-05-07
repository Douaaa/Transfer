@extends('layouts.master')

@section('title' , trans('all.site-title'). " - ". $pageInfo['title'])
@if(array_key_exists('description' , $pageInfo))
    @section('og-description' , $pageInfo['description'])
@section('description', $pageInfo['description'])
@else
    @section('og-description' , config('app.description'))
@section('description', config('app.description'))
@endif
@section('keywords' , config('app.keywords'))
@section('og-title' , config('app.name')  ."-". $pageInfo['title'])

@section('og-image' , url(asset('images/logo.jpg')))
@section('og-url' , url(Request::url()))

@section('container' , 'container-fluid-custom')
@section('content')

  <section class="container-fluid main-section">
        <div class="row">
          @include('home.slider')
          @include('home.about')
          @include('home.services')
          @include('home.archive')
          @include('home.contact')
        </div>
    </section>
@endsection
<script type="text/javascript">

</script>
