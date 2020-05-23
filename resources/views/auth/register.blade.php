<?php

       $occupation = array('Simone' => '1986',
'Gabriele' => '1991',
'Giuseppe' => '1992',
'Renato' => '1988');
?>

@extends('layouts.public')

@section('title', 'Registrazione')

@section('content')
<div class="static">
    <h3>Registrazione</h3>
    <p>Utilizza questa form per registrarti al sito</p>

    <div class="container-contact">
        <div class="wrap-contact1">
            {{ Form::open(array('route' => 'show_register', 'class' => 'contact-form')) }}

            <div  class="wrap-input">
                {{ Form::label('name', 'Nome', ['class' => 'label-input']) }}
                {{ Form::text('name', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('surname', 'Cognome', ['class' => 'label-input']) }}
                {{ Form::text('surname', '', ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('surname') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div class="wrap-input">
                {{Form::label('genere', 'Genere', ['class' => 'form-label'])}}
                {{Form::select('discounted', ['Uomo' => 'Uomo', 'Donna' => 'Donna'], 1, ['class' => 'form-control', 'id' => 'discounted'])}}
            </div>
            
            <div class="wrap-input">
                {{Form::label('employment', 'Impiego', ['class' => 'form-label'])}}
                {{Form::select('employment', ['Studente' => 'Studente', 'Libero Professionista' => 'Libero Professionista' , 'Impiegato' => 'Impiegato' ,  'Altro' =>  'Altro'], 1, ['class' => 'form-control', 'id' => 'discounted'])}}
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('residence', 'Residenza', ['class' => 'label-input']) }}
                {{ Form::text('residence', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('name'))
                <ul class="errors">
                    @foreach ($errors->get('residence') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('province', 'Provincia', ['class' => 'label-input']) }}
                {{ Form::text('province', '', ['class' => 'input', 'id' => 'name']) }}
                @if ($errors->first('province'))
                <ul class="errors">
                    @foreach ($errors->get('name') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
            <div  class="wrap-input">
                {{ Form::label('email', 'Email', ['class' => 'label-input']) }}
                {{ Form::text('email', '', ['class' => 'input', 'id' => 'surname']) }}
                @if ($errors->first('surname'))
                <ul class="errors">
                    @foreach ($errors->get('email') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            

            
            
            
             <div  class="wrap-input">
                {{ Form::label('username', 'Username', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input">
                {{ Form::label('password', 'Password', ['class' => 'label-input']) }}
                {{ Form::password('password', ['class' => 'input', 'id' => 'password']) }}
                @if ($errors->first('password'))
                <ul class="errors">
                    @foreach ($errors->get('password') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>

            <div  class="wrap-input">
                {{ Form::label('password-confirm', 'Conferma password', ['class' => 'label-input']) }}
                {{ Form::password('password_confirmation', ['class' => 'input', 'id' => 'password-confirm']) }}
            </div>
            
            <div class="container-form-btn">                
                {{ Form::submit('Registra', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>

</div>
@endsection

