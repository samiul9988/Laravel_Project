<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class mycontroller extends Controller
{
    function insert(Request $req){
        $name  = $req->get('pname');
        $price  = $req->get('pprice');
        $pimage  = $req->file('image')->getClientOriginalName();
        // \\move uploadfile
        $req->image->move(public_path('images'), $pimage);

        $prod = new product();
        $prod->Pname = $name;
        $prod->Pprice = $price;
        $prod->Pimage = $pimage;

        $prod->save();
        return redirect('/');

    }

    function readdata(){
        $pdata = product::all();
        return view('insertData',['data'=>$pdata]);
    }
}
