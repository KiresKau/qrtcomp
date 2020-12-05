@extends('layouts.one-column')


@inject('bread', 'App\News\GetNews')

@section('navbar-brand')

    @include('navbar-brand', ['title' => 'Новости'])

@endsection

@section('body')

    @foreach($news as $new)
       <div class="jumbotron jumbotron-fluid">
           <div class="container">
                <h1 class="display-4">{{ $new->name }}</h1>
                <p class="lead">{!! $new->description !!}</p>
                <p class="card-text"><small class="text-muted">{{ $new->created_at }}</small></p>
                <a href="{{ route('new', $new->slug) }}" class="btn btn-primary">Подробнее</a>
            </div>
        </div>
    @endforeach
    {{ $news->links() }}
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
         'active' => false,
         'route' => 'news'
    ]
    ]])
@endsection