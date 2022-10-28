<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index(){

        $messages=Message::all();

        return view('welcome',[
            "messages"=>$messages
        ]);

    }


    function add(Request $request){

        $message=new Message();
        $message->name=$request["name"];
        $message->text=$request["txt"];
        $message->save();

        return redirect()->to("/");


    }





}
