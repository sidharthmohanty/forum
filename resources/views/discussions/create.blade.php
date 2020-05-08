@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">Add Discussion</div>
    <div class="card-body">
        <form action="{{route('discussions.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <input id="x" type="hidden" name="content">
                <trix-editor input="x"></trix-editor>
            </div>

            <div class="form-group">
                <label for="channel">Channel</label>
                <select name="channel" id="channel" class="form-control">
                    @foreach($channels as $channel)
                        <option value="{{$channel->id}}">{{$channel->name}}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-success">Create Discussion</button>
        
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