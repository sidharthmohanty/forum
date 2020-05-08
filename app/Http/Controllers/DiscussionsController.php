<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CreateDiscussionRequest;
use App\Channel;
use App\Discussion;
use Illuminate\Support\Str;

class DiscussionsController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->only(['create', 'store']);
    }
 
    public function index()
    {
        return view('discussions.index', ['discussions' => Discussion::filterByChannel()->paginate(2)]);
    }

  
    public function create()
    {
        return view('discussions.create');
    }

  
    public function store(CreateDiscussionRequest $request)
    {
        auth()->user()->discussions()->create([
            'title' => $request->title,
            'content' => $request->content,
            'channel_id' => $request->channel,
            'slug' => Str::slug($request->title, '-')
        ]);
        session()->flash('success', 'New discussion has been added!');
        return redirect()->route('discussions.index');
    }


    public function show(Discussion $discussion)
    {
        return view('discussions.show', ['discussion' => $discussion]);
    }

  
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
