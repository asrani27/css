<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use App\Chat;
use App\Events\eventTrigger;

class ChatController extends Controller
{
    public function msg(Request $req, $id_guest)
    {
        $cek = Guest::where('id_guest', $id_guest)->first();
        if($cek == null)
        {
            return view('errors.404');
        }
        else {
            
            $s = new Chat;
            $s->id_guest = $id_guest;
            $s->pesan = $req->pesan;
            $s->save();
            event(new eventTrigger());
            return back();
        }
    }
}
