@extends('layouts.app')

@section('content')
<h1> Conversación con {{ $conversation->users->except($user->id)->implode('name', ', ') }}</h1>

    @foreach ($conversation->privateMessages as $message)
    <div class="card">
        <div class="card-header">
            {{ $message->user->name }} dijo...
        </div>
        <div class="card-block">
            <p class="m-3"><b>{{ $message->message }}</b></p>
        </div>
        <div class="card-footer">
            <small>{{ $message->created_at }}</small>
        </div>
        
    @endforeach
</div>
@endsection