@extends('layouts.public')

@section('title', 'Catalogo Prodotti')
<!--- MENU LATERALE --->
@section('content')
<section id="filtro" class="one_third">
    <div class="sidebar-nav">
        <h2>Seleziona una categoria:</h2>
        <ul class="sidebar_menu">
            @foreach($topCategories as $category)
            <div class="cat_box">
                <li><a href="{{ route('catalog2',[$category->catId]) }}">{{ $category-> name }}</a></li>
            </div>

            @endforeach
            @isset($selectedTopCat)
            <h3 style="margin-right: 40px">Per tipologia:</h3>
            <div class="sub_cat_box" id="cat2">
                @foreach($subCategories as $subCategory)
                <li><a href="{{ route('catalog3', [$selectedTopCat->catId, $subCategory->catId])}}">{{$subCategory->name}}</a></li>
                @endforeach
            </div>
            @endisset

        </ul>
        <form action="param.php" method="GET">
            <h3>FILTRA PRODOTTI</h3>
            <br>Inserire prezzo massimo:
            <input type="number" name="param1" min="0" >
            <br>
            <br>Inserire prezzo minimo:
            <input type="number" name="param2" min="0" >
            <br>
            <br> 
            Sconto <select type="checkox" name="param3"> <option value="Valore1" checked="true" >si</option> <option value="Valore2">no</option>
            <br>
            <input type="submit" value="Procedi!" >
        </form>
        <br>
    </div>
</section> 

<section class="catalogo" id="services">  
    @isset($products)
    @foreach($products as $product)
    <article>
        <img src="{{ asset('images/'.$product->image)}}">
        <h3><a id="titolo" href="{{ route('product', [$product->prodId]) }}">{{ $product->name }}</a></h3>
        @guest
        <p> {{ number_format($product->getPrice(), 2, ',', '.') }} € </p>
        @endguest
        @can ('show-discount')
        <p> {{ number_format($product->getDisPrice($product->discounted), 2, ',', '.') }} € </p>
        @endcan
        <p>{{ $product->descShort }}</p>
    </article>
    <br>
    @endforeach
    @endisset()
</section>

                                        
@endsection


