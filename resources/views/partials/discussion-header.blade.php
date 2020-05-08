<div class="card-header">
    <div class="d-flex justify-content-between">
        <div>
            <img src="{{asset('storage/'. $discussion->user->image)}}" height="30px" width="30px" style="border-radius:50%" alt="">
            <span style="font-weight:bold" class="ml-2">{{$discussion->user->name}}</span>
        </div>
        <div>
            <a href="{{route('discussions.show', $discussion->slug)}}" class="btn btn-success btn-sm">View</a>
        </div>
    </div>
</div>