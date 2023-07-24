<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    //

    public function home(){
        $cards = config('db.cards');

        $navbarLinks = config('db.navbarLinks');
        return view('home', compact('cards', 'navbarLinks'));
    }
}
