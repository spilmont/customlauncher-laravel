

<div class="form-group">
  {!! Form::text('name',$application->name,['class'=>'form-control','placeholder' => "entrer le nom de lapplication"]) !!}
</div>
<div class="form-group">

    {!! Form::text('path',$application->path,['class'=>'form-control','placeholder'=>"chemin vers  .EXE Choisis"])!!}
</div>
<div class="form-group">
    {!! Form::text('cover',$application->cover,['class'=>'form-control','placeholder' => "entrer le lien de l'image de fond"]) !!}
</div>
<div class="form-group">

    {!! Form::select('categories_id',App\Categories::pluck('name','id'),['class'=>'form-control']) !!}
</div>

@if($errors->any())

    <div class="alert-danger">
        <ul>
            @foreach($errors->all() as $error)

                <li> {{$error}}</li>

            @endforeach
        </ul>
    </div>
     @endif


