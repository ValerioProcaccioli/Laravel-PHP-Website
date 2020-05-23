@extends('layouts.staff')
@section('title', 'Inserisci Prodotto')
@section('content')

<h3>Aggiungi prodotti al catalogo</h3>
{{Form::open(array('route' => 'upProd', 'id' => 'form', 'files' => true, 'class' => 'p-form')) }}
<div class="form-group">
    {{Form::label('name','Nome Prodotto',['class' => 'form-label'])}}
    {{Form::text('name', '', ['class' => 'form-control'])}}
    @if ($errors->first('name'))
    <ul>
        @foreach ($errors->get('name') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>
<div class="form-group">
    {{Form::label('descShort','Descrizione breve',['class' => 'form-label'])}}
    {{Form::text('descShort', '', ['class' => 'form-control'])}}
    @if ($errors->first('descShort'))
    <ul>
        @foreach ($errors->get('descShort') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>
<div class="form-group">
    {{Form::label('price', 'Prezzo', ['class' => 'form-label'])}}
    {{Form::text('price', '', ['class' => 'form-control', 'id' => 'price'])}}
    @if ($errors->first('price'))
    <ul>
        @foreach ($errors->get('price') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>
<div class="form-group">
    {{Form::label('discountPerc', 'Sconto(%)', ['class' => 'form-label'])}}
    {{Form::text('discountPerc', '', ['class' => 'form-control', 'id' => 'discountPerc'])}}
    @if ($errors->first('discountPerc'))
    <ul>
        @foreach ($errors->get('discountPerc') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>
<div class="form-group">
    {{Form::label('discounted', 'In Sconto', ['class' => 'form-label'])}}
    {{Form::select('discounted', ['1' => 'Si', '0' => 'No'], 1, ['class' => 'form-control', 'id' => 'discounted'])}}
</div>
<div class="form-group">
    {{Form::label('descLong', 'Descrizione lunga', ['class' => 'form-label'])}}
    {{Form::textarea('descLong', '', ['class' => 'form-control', 'id' => 'descLong', 'rows' => 2])}}
    @if ($errors->first('descLong'))
    <ul>
        @foreach ($errors->get('descLong') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>
<div class="form-group">
    {{Form::label('catId', 'Categoria', ['class' => 'form-control'])}}
    {{Form::select('catId', $cats, '', ['class' => 'form-control', 'id' => 'catId'])}}
</div>
<div class="form-group">
    {{Form::label('image', 'Immagine', ['class' => 'form-control'])}}
    {{Form::file('image', ['class' => 'form-control', 'id' => 'image'])}}
    @if ($errors->first('image'))
    <ul>
        @foreach ($errors->get('image') as $message)
        <li>{{ $message }}</li>
        @endforeach
    </ul>
    @endif
</div>
<div class="form-group">
    {{ Form::submit('Aggiungi Prodotto', ['class' => 'btn']) }}
</div>

{{ Form::close() }}

@endsection
