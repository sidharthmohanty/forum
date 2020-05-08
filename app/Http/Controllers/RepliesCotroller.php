<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Reply;
use App\Notifications\NewReplyAdded;
use App\Http\Requests\CreateReplyRequest;

use App\Discussion;

class RepliesCotroller extends Controller
{
   
    public function index()
    {
        
    }

    
    public function create()
    {
        
    }

    
    public function store(CreateReplyRequest $request, Discussion $discussion)
    {
        auth()->user()->replies()->create([
            'content' => $request->content,
            'discussion_id' => $discussion->id
        ]);
         if(auth()->user()->id != $discussion->user->id){
            $discussion->user->notify(new NewReplyAdded($discussion));
         }
    
        session()->flash('success', 'Replied successfully on the discussion!!');
        return redirect(route('discussions.show', $discussion->slug));
    }

    public function show($id)
    {
        //
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