@extends('layouts.one-column')

@section('navbar-brand')

    @include('navbar-brand', ['title' => 'Новости'])

@endsection

@section('body')
    <ul class="list-group">
        <li class="list-group-item">{{$carg->what}}</li>
        <li class="list-group-item">{{$carg->weight}}</li>
        <li class="list-group-item">{{$carg->dimension}}</li>
    </ul>
@endsection


@section('breadcrumbs')
    @include('breadcrumbs', ['breadcrumbs' => [
    [
         'name' => 'Главная',
         'active' => true,
         'route' => 'home'
    ],
    [
         'name' => 'Водители',
         'active' => true,
         'route' => 'drivers'
    ],
    [
         'name' =>  $car->last_name,
         'active' => false,
         'route' => 'new'
    ]
    ]])
@endsection