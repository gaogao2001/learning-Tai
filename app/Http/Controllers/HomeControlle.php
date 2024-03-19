<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlle extends Controller
{
    public function create()

    {
        $tieuDe = request()->input('tieuDe');
        $baiViet = request()->input('noiDung');
        return view('create',['tieuDe'=> $tieuDe, 'noiDung' => $baiViet]);
    }

    public function shows()
    {
        $tieuDe = request()->input('tieuDe');
        $baiViet = request()->input('noiDung');
        return view('create',['tieuDe'=> $tieuDe, 'noiDung' => $baiViet]);
    }
    public function meom(){

        $name = request()->input('name'); //thu123123kasjhdkajshdasdasd

        return view('meom', ['xyzzz' => $name]);
    }


}
