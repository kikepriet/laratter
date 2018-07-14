@extends('layouts.app')

@section('content')
   <h1> {{ $user->name }} </h1>

   <form action="/users/{{ $user->username }}/follow" method="post">
        <button class="btn btn-primary"> Follow </button>
   </form>  

<div class="row">
    @foreach ($user->messages as $message )
    <div class="col-6">
        @include('messages.message')
    </div>
    @endforeach
</div>
    
@endsection