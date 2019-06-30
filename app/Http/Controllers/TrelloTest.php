<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrelloTest extends Controller
{
    //
    public function index(){
        $title='Trello';

        // return view('pages.index',compact('title')) ;
        return view('pages.trello')->with('title',$title) ;
    }
}
