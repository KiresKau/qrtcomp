@extends('layouts.one-column')

@section('navbar-brand')

    @include('navbar-brand', ['title' => 'Новости'])

@endsection

@section('body')
    <div class="card mb-3">

        <div class="card-body">
            <h5 class="card-title">{{ $new->name }}</h5>
            <p class="card-text">{!! $new->body !!}</p>
            <p class="card-text"><small class="text-muted">{{ $new->created_at }}</small></p>
        </div>
    </div>
@endsection


@section('breadcrumbs')
    @include('breadcrumbs', ['breadcrumbs' => [
    [
         'name' => 'Главная',
         'active' => true,
         'route' => 'home'
    ],
    [
         'name' => 'Новости',
         'active' => true,
         'route' => 'news'
    ],
    [
         'name' => $new->name,
         'active' => false,
         'route' => 'new'
    ]
    ]])
@endsection