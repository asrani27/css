<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;

class HomeController extends Controller
{

    public function index($id_guest)
    {
        $cek = Guest::where('id_guest', $id_guest)->first();
        if($cek == null)
        {
            return view('errors.404');
        }
        else {
            return view('welcome',compact('id_guest'));
        }
    }

    public function tamu($id_guest)
    {
        $cek = Guest::where('id_guest', $id_guest)->first();
        if($cek == null)
        {
            return view('errors.404');
        }
        else {
            $data = Guest::all();
            return view('data_tamu',compact('id_guest','data'));
        }
    }
}
