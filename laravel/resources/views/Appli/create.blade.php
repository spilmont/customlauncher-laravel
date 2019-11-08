@extends('default')

@section('content')
    {!! Form::open([$application,'url' => route('app.store',$application),'method'=>'POST']) !!}
    @include('Appli.forms.CreateEdit')
    <button class="btn btn-dark">Ajouter l'application</button>
    {!! Form::close() !!}
@stop
