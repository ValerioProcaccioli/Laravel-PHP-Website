@extends('layouts.staff')
@section('title', 'Inserisci Prodotto')
@section('content')

<h3>Aggiungi prodotti al catalogo</h3>
{{Form::open(array('route' => 'upCategory', 'id' => 'form', 'files' => true, 'class' => 'p-form')) }}

<div class="form-group">
    {{Form::label('name','Tipo',['class' => 'form-label'])}}
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
    {{Form::label('parId', 'Categoria', ['class' => 'form-control'])}}
    {{Form::select('parId', $parId, '', ['class' => 'form-control', 'id' => 'catId'])}}
</div>

<div class="form-group">
    {{ Form::submit('Aggiungi Nuova Categoria', ['class' => 'btn']) }}
</div> 
{{ Form::close() }}

@endsection
