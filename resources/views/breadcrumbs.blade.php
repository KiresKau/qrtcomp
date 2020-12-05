<div class="container mt-3 mb-1">
    <nav aria-label="breadcrumb" class="rounded">
        <ol class="breadcrumb">
            @foreach($breadcrumbs as $breadcrumb)
            <li class="breadcrumb-item @if($breadcrumb['active']) active @endif" aria-current="page">
                @if($breadcrumb['active'])
                    <a href="{{ route($breadcrumb['route']) }}">{{ $breadcrumb['name'] }}</a>
                @else
                    {{ $breadcrumb['name'] }}
                @endif
                </li>
            @endforeach
        </ol>
    </nav>
</div>