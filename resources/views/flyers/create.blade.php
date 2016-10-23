@extends('layout')

@section('content')
    <h1>Selling your Home ?</h1>

    <form action="">
        <div class="field"><!-- Street Form Input-->
            {{ Form::label('street', 'Street') }}
            {{ Form::text('street', null) }}
        </div>
        
        <div class="field"><!-- City Form Input-->
            {{ Form::label('city', 'City') }}
            {{ Form::text('city', null) }}
        </div>
        
        <div class="field"><!-- Zip Form Input-->
            {{ Form::label('zip', 'Zip/Postal Code') }}
            {{ Form::text('zip', null) }}
        </div>
    </form>
@stop