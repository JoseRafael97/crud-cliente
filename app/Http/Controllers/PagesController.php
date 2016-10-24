<?php

namespace SigAtelie\Http\Controllers;

use Illuminate\Http\Request;

use SigAtelie\Http\Requests;

class PagesController extends Controller
{

    public function home()
    {
        return view('cliente.home');
    }
}
