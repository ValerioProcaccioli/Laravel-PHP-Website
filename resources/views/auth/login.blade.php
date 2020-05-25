@extends('layouts.public')

@section('title', 'Login')

@section('content')
<div id="sidebar" role="navigation">	
    <h1> Login </h1>
    <center>
        <div class="container-contact">
        <div class="wrap-contact1" id="login-f">
            {{ Form::open(array('route' => 'show_login', 'class' => 'contact-form')) }}
            
             <div class="wrap-input">
                 <p> Non hai un account? <a  href="{{ route('show_register') }}">Clicca qui</a></p>
             </div>            
             <div  class="wrap-input" id="login-name">
                {{ Form::label('username', 'Nome Utente', ['class' => 'label-input']) }}
                {{ Form::text('username', '', ['class' => 'input','id' => 'username']) }}
                @if ($errors->first('username'))
                <ul class="errors">
                    @foreach ($errors->get('username') as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
            </div>
            
             <div  class="wrap-input" id="login-passw">
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
            
            <div class="container-form-btn">                
                {{ Form::submit('Login', ['class' => 'form-btn1']) }}
            </div>
            
            {{ Form::close() }}
        </div>
    </div>
    </center>
</div>
@endsection