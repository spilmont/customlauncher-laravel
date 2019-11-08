@extends('default')

@section('content')
    {!! Form::open([$application,'url' => route('app.update',$application), 'method' => 'PUT']) !!}
    @include('Appli.forms.CreateEdit')
    <button class="btn btn-dark">Modifier l'application</button>

    {!! Form::close() !!}

    {!! Form::open([$application,'url' => route('app.destroy',['app'=> $application->id]), 'method' => 'DELETE']) !!}
    <button class="btn btn-dark">Suprrimer du launcher</button>
    {!! Form::close() !!}

@stop
