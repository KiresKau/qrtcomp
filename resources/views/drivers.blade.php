@extends('layouts.one-column')


@inject('bread', 'App\News\GetNews')

@section('navbar-brand')

    @include('navbar-brand', ['title' => 'Водители'])

@endsection

@section('body')
    @foreach($drivers as $driver)
        <div  role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="mr-auto">{{ $driver->last_name }} {{ $driver->first_name }}<p></p>
                    Номер машины - <b>{{ $driver->number }}</b><p></p>
                @if($driver->status) <a href="{{ route('cargo', $driver->slug) }}" class="btn btn-primary">Узнать какой груг везет</a> @endif</strong>
                <small class="text-muted">@if($driver->status) В пути от точки: <b>{{ $driver->from }}</b>, до конечной точки: <b>{{ $driver->to }}</b> @else Водитель не занят @endif</small>
            </div>
        </div>
        <br>
{{--        <div class="dropdown">--}}
{{--            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                Что везет--}}
{{--            </a>--}}

{{--            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">--}}
{{--                @foreach($cargos as $cargo)--}}
{{--                <a class="dropdown-item" href="#">{{ $cargo->what }}</a>--}}
{{--                @endforeach--}}
{{--            </div>--}}
{{--        </div>--}}
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
         'name' => 'Водители',
         'active' => false,
         'route' => 'drivers'
    ]
    ]])
@endsection