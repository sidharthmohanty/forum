@extends('layouts.app')

@section('content')

<div class="card">
    <div class="card-header">Notifications</div>
    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

       <div class="card">
       @foreach($notifications as $notification)
            <div class="card-header">
                <a href="{{route('discussions.show', $notification->data['discussion']['slug'])}}">You have a new notfication related to {{$notification->data['discussion']['title']}}</a> 
            </div>
        @endforeach
        {{$notifications->links()}}
       </div>
    </div>
</div>

@endsection
