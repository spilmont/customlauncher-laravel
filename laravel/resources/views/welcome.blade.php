@extends('default')


@section('content')
<div class="row">
        <div class="col-md-12 d-flex justify-content-center ">
        <p>Ce Site permet de ranger vos differents raccourcis et de les lancer a partir de celui ci </p>
        </div>

<div  class="col-md-5" >
 @include('auth.login')
</div>
<div class="col-md-1 d-flex align-items-center">
    <h1>OU</h1>
</div>
<div class="col-md-6 " >
    @include('auth.register')
</div>
    </div>
@endsection



