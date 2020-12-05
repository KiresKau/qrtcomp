@extends('layouts.base')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-5">
                @yield('body')
            </div>
            <div class="col-4">
                @yield('center')
            </div>
            <div class="col-3">
                @yield('sidebar')
            </div>
        </div>
    </div>
@endsection