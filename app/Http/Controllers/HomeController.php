<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guest;
use App\FileDownload;
use App\KabKota;
use Storage;
use File;

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

    public function updateprofile(Request $req, $id_guest)
    {
        $cek = Guest::where('id_guest', $id_guest)->first();
        if($cek == null)
        {
            return view('errors.404');
        }
        else {

            if($req->hasFile('file'))
            {
                $upload = Storage::disk('upload')->exists($id_guest.'.jpg');
                if($upload == true)
                {
                    // Jika Sudah Ada Image Hapus Dulu  
                    $deleteFoto = Storage::disk('upload')->delete($id_guest.'.jpg');          

                    // Upload Kembali Yang Baru
                    $image = $req->file('file');
                    $filename = $id_guest.'.'.$image->getClientOriginalExtension();
                    //$path =  "/var/www/html/app_cssregis/upload/foto";
                    //$image->move($path, $filename);
                }
                else {
                    $image = $req->file('file');
                    $filename = $id_guest.'.'.$image->getClientOriginalExtension();
                    $path =  "/var/www/html/app_cssregis/upload/foto";
                    $image->move($path, $filename);
                }
                
                $up = Guest::where('id_guest', $id_guest)->first();
                $up->nama_guest = $req->nama_guest;
                $up->asal       = $req->asal;
                $up->instansi   = $req->instansi;
                $up->jabatan    = $req->jabatan;
                $up->jk         = $req->jk;
                $up->email      = $req->email;
                $up->no_telepon = $req->no_telepon;
                $up->foto       = $filename;
                $up->save();
                return redirect($id_guest.'/profile');
            }
            else {
                $up = Guest::where('id_guest', $id_guest)->first();
                $up->nama_guest = $req->nama_guest;
                $up->asal       = $req->asal;
                $up->instansi   = $req->instansi;
                $up->jabatan    = $req->jabatan;
                $up->jk         = $req->jk;
                $up->email      = $req->email;
                $up->no_telepon = $req->no_telepon;
                $up->save();
                return redirect($id_guest.'/profile');
            }        
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
            $kab = KabKota::all()->sortBy('nama_kab_kota');
            return view('edit_profile',compact('id_guest','tamu','kab'));
        }
    }

    public function file($id_guest)
    {
        $cek = Guest::where('id_guest', $id_guest)->first();
        if($cek == null)
        {
            return view('errors.404');
        }
        else {
            $file = FileDownload::all();
            return view('file_download',compact('id_guest','file'));
        }
    }
}
