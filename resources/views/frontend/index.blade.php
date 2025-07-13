@extends('frontend.layouts.master')
@section('content')


   
    <!-- Navbar End -->


    <!-- Header Start -->
    @include('frontend.partial.hero')
    <!-- Header End -->


    <!-- About Start -->
    @include('frontend.partial.about')
    <!-- About End -->


    <!-- Feature Start -->
     @include('frontend.partial.feature')
    <!-- Feature Start -->


    <!-- Courses Start -->
  @include('frontend.partial.courses')
    <!-- Courses End -->


    <!-- Team Start -->
    @include('frontend.partial.team')
    <!-- Team End -->
@endsection