<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
class UserController extends Controller
{
    public function notifications(){
        //mark all as read
        //
        auth()->user()->unreadNotifications->markAsRead();
        return view('users.notifications', [
            'notifications' => auth()->user()->notifications()->paginate(5)]);
    }

}
