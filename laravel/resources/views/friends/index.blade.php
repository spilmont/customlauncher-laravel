@foreach($friends as $friend)

    <div>{{$friend->sender->name}} veut etre amis avec vous <button>accepter</button><button>refuser</button></div>

    @endforeach
