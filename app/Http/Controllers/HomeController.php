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

    public function detailTamu($id_guest, $id_tamu)
    {
        $cek = Guest::where('id_guest', $id_guest)->first();
        if($cek == null)
        {
            return view('errors.404');
        }
        else {
            $getdata = Guest::where('id_guest', $id_tamu)->get();
            $tamu = $getdata->map(function($item){
                $item->whatsapp = ltrim($item->no_telepon, 0);
                return $item;
            })->first();
            //dd($tamu);
            return view('detail_tamu',compact('id_guest','id_tamu', 'tamu'));
        }
    }

    public function profile($id_guest)
    {
        $cek = Guest::where('id_guest', $id_guest)->first();
        if($cek == null)
        {
            return view('errors.404');
        }
        else {
            $tamu = $cek;
            return view('profile',compact('id_guest','tamu'));
        }
    }

    public function editprofile($id_guest)
    {
        $cek = Guest::where('id_guest', $id_guest)->first();
        if($cek == null)
        {
            return view('errors.404');
        }
        else {
            $tamu = $cek;
            return view('edit_profile',compact('id_guest','tamu'));
        }
    }
}
