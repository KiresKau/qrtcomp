@extends('layouts.two-column')

@section('navbar-brand')

    @include('navbar-brand', ['title' => 'Контакты'])

@endsection



@section('body')
    <div id="map-container-google-1" class="z-depth-1-half map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2747.434606816479!2d30.74577191555545!3d46.47970607912608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c6319f49eaaaab%3A0xa6467105eed9b98c!2z0JrQvtC80L_RjNGO0YLQtdGA0L3QsNGPINGI0LrQvtC70LAgSGlsbGVs!5e0!3m2!1sru!2sua!4v1549734283472" frameborder="0"
                style="border:0" allowfullscreen></iframe>
    </div>
@endsection

@section('sidebar')
    @foreach($contacts as $contack)
        <p><i class="fa fa-location-arrow"></i><a href="https://t.me/{{ $contack->telegram }}">  {{ $contack->telegram }}</a> </p>
    @endforeach
    @foreach($contacts as $contack)
        <p><i class="fa fa-phone"></i>  {{ $contack->phone }}  </p>
    @endforeach
    @foreach($contacts as $contack)
        <p><i class="fa fa fa-envelope"></i>  {{ $contack->mail }}</p>
    @endforeach
    @foreach($contacts as $contack)
        <p><i class="fab fa-facebook"></i><a href="http://facebook.com/profile.php?id={{ $contack->facebook }}">  {{ $contack->facebook }}</a></p>
    @endforeach
    @foreach($contacts as $contack)
        <p><i class="fab fa-twitter"></i><a href="https://twitter.com/{{ $contack->twitter }}">  {{ $contack->twitter }}</a></p>
    @endforeach
    @foreach($contacts as $contack)
        <p><i class="fab fa-linkedin"></i><a href=" www.linkedin.com/in/{{ $contack->linked_in }}">  {{ $contack->linked_in }}</a></p>
    @endforeach
    @foreach($contacts as $contack)
        <p><i class="fab fa-instagram"></i><a href="https://www.instagram.com/{{ $contack->instagram }}">  {{ $contack->instagram }}</a></p>
    @endforeach
@endsection

@section('breadcrumbs')
    @include('breadcrumbs', ['breadcrumbs' => [
    [
         'name' => 'Главная',
         'active' => true,
         'route' => 'home'
    ],
    [
         'name' => 'Контакты',
         'active' => false,
         'route' => 'contacts'
    ]
    ]])
@endsection