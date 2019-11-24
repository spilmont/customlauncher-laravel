@extends('default')

@section('content')

    @if(Session::has('sucess'))
        <div class="alert-success">
            {{Session::get('sucess')}}
        </div>
    @endif

    <a class="btn btn-dark" href="{{route('app.create')}}">Ajouter une application</a>



   <h2>{!! \App\Application::select('name')->where('launch',1)->get()!!}</h2>



    <div class="row">
    @foreach($applications as $application)
        <div style="margin-right: 2%">
        <h3 style="text-align: center">{{$application->name}}</h3>
        <div  class="card-item" style="background-image: url({{$application->cover}})">
            {!! Form::open([$application,'url' => route('app.start',['app'=> $application->id]), 'method' => 'UPDATE']) !!}
            <a href="{{Route('app.start',['id'=> $application->id ])}}" class="btn btn-dark btn-opacity-card">Lancer</a>
            {!! Form::close() !!}
            <a href="{{Route('app.edit',['app'=> $application])}}" class="btn btn-dark btn-opacity-card ">Paramètre</a>
        </div>
        </div>
    @endforeach

</div>
@stop
