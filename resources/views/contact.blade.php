@extends('layouts.public')

@section('title', 'Contattaci')

@section('content')

<section class="clear" id='services'>
    <div class="wrapper row2">
        <h2>Contattaci</h2>
        <p>Scrivici un messaggio per ogni dubbio o problema</p>
    </div>
    <form role="form" id="form">
        <div class="contact">
            <div class="form-group">
                <input name="name" type="text" class="form-control" id="input_name" placeholder="Nome & Cognome">
            </div>
            <div class="form-group">
                <input name="email" type="email" class="form-control" id="input_email" placeholder="Email">
            </div>
            <div class="form-group">
                <input name="phone" type="tel" class="form-control" id="input_tel" placeholder="Telefono">
            </div>
            <div class="form-group">
                <textarea name="message" rows="6" class="form-control" id="input_message" placeholder="Scrivi qui il tuo messaggio..."></textarea><br>
                <button type="submit" class="btn btn-default">Invia</button>
                <button type="reset" class="btn btn-default">Reset</button>
            </div>
            </div>
        </div> 
    </form>
</section>

@endsection


