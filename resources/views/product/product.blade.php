@extends('layouts.public')

@section('title', $product->name)

@section('content')
<section class="catalogo" id="services">  
    <article>
        <img src="{{ asset('images/'.$product->image)}}">
        <h3><a>{{ $product->name }}</a></h3>
        @guest
        <p> {{ number_format($product->getPrice(), 2, ',', '.') }} € </p>
        @endguest
        @can ('show-discount')
        <p> {{ number_format($product->getDisPrice($product->discounted), 2, ',', '.') }} € </p>
        @endcan
        <p>Caratteristiche: {{ $product->descShort }}</p>
        <p>Descrizione: {!! $product->descLong !!}</p>
    </article>
    <br>

</section>

@endsection