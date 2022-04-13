<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
class RoomController extends Controller
{
    function bookingroom(Request $req){
        $user=new Room();
        $user->name=$req->name;
        $user->roomname=$req->roomname;
        $user->check_in=$req->check_in;
        $user->check_out=$req->check_out;
        $user->adult=$req->adult;
        $user->children=$req->children;
        $user->save();
        return redirect('success');
    }
}
