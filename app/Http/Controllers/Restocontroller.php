<?php

namespace App\Http\Controllers;

use App\Models\restorant;

use Illuminate\Http\Request;

class Restocontroller extends Controller
{
    //

    function index()
    {
        return view('/home');
    }

    function  restolist()

    {
        $data = restorant::all();
        return view('/list',["data"=>$data]);
    }
 function  restoAdd(Request $req)
{

//return $req->input();

$resto = new restorant;
$resto->name=$req->input('name');

$resto->Address=$req->input('Address');
$resto->save();
return redirect('/list');
}
}
