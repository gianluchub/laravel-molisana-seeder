@extends('layouts.main')

@section('content')
    <div class="wrapper">
        @if (!empty($prev))
            <div class="prev">
                <a href="{{ route('prodotto', [ 'slug' => $prev->slug ]) }}"> 
                    <i class="fas fa-chevron-left"></i>
                </a>    
            </div>
        @endif
        
        @if (!empty($next))
            <div class="next">
                <a href="{{ route('prodotto', [ 'slug' => $next->slug ]) }}"> 
                    <i class="fas fa-chevron-right"></i>
                </a>  
            </div>
        @endif

        <div class="container">
            <h1>{{ $product["titolo"] }}</h1>
            <img src="{{ $product["src-h"] }}" alt="{{ $product["titolo"] }}">
            <img src="{{ $product["src-p"] }}" alt="{{ $product["titolo"] }}">
            <p>{!! $product["descrizione"] !!}</p>
        </div>  
    </div>
@endsection