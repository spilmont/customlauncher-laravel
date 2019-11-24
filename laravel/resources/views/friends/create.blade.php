<form method="GET" action="/friends/create">
<input type="search" name="search" >
<button> rechercher un amis</button>
</form>

@if ($friends)

    @foreach($friends as $friend)

        {!! Form::open([$friend,'url' => route('friends.store',['ami'=>$friend->id]),'method'=>'POST']) !!}
        {{$friend->name}}  <button>demander en ami</button>
        {!! Form::close() !!}

        @endforeach

@endif
