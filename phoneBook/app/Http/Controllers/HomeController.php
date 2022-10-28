<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    function index(){

        $items=Item::all();

        return view('welcome',[
            "items"=>$items
        ]);

    }


    function add(Request $request){

        $item=new Item();
        $item->name=$request["name"];
        $item->lastname=$request["lastname"];
        $item->email=$request["email"];
        $item->mobile=$request["mobile"];
        $item->phone=$request["phone"];

        $item->save();

        return redirect()->to("/");


    }


    function delete(Request $request){
$yesBtn=$request["yes"];
        DB::table('items')->delete();

    return redirect()->to("/");
//}

    }



}
