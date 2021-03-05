@extends('layouts.app')

@section('content')

<title>GSI Outsourcing in the UK - GSI United Kingdom</title>
<section class="mb-0">
        @include('pages.slider') 
</section>
 
<!-- Page Content --> 
            @include('pages.4Steps')
            @include('pages.company')
            @include('pages.services')
            @include('twitter')
            @include('pages.offices')
<!-- /.container -->
@endsection
