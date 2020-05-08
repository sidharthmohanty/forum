@extends('layouts.app')

@section('content')

<div class="card">
    @include('partials.discussion-header')
    <div class="card-body">
        <div class="text-center" style="font-weight:bold">{{$discussion->title}}</div>        
        <hr>
        {!!$discussion->content!!}
    </div>
</div>
<div class="card mt-3">
    @foreach($discussion->replies()->paginate(2) as $reply)
        <div class="card-header">
            <div class="d-flex">
                <img src="{{asset('storage/'.$reply->user->image)}}" width="30px" height="30px" style="border-radius:50%" alt="">
                <span class="ml-2">{{$reply->user->name}}</span>
            </div>
        </div>
        <div class="card-body">
            {!!$reply->content!!}
        </div>
    @endforeach
</div>
{{$discussion->replies()->paginate(2)->links()}}
<div class="card mt-3">
    <div class="card-header">
        Add reply
    </div>
    <div class="card-body">
        <form action="{{route('replies.store', $discussion->slug)}}" method="post">
            @csrf
            <label for="content"></label>
            <input id="x" type="hidden" name="content">
            <trix-editor input="x"></trix-editor>
            <button class="btn btn-success btn-sm mt-2">Add reply</button>
        </form>
    </div>
</div>

@endsection

@section('script')
<script src="{{asset('js/trix.js')}}"></script>
@endsection

@section('style')
<link rel="stylesheet" href="{{asset('css/trix.css')}}">
@endsection
