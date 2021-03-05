
@extends('admin.index') 
@section('content')  
    @include('admin.statisctics.user-role')
    @include('admin.statisctics.client-interes')
    {{-- @include('admin.statisctics.programming') --}}
    @include('admin.statisctics.category')
@endsection