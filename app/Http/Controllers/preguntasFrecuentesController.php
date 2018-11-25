<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class preguntasFrecuentesController extends Controller
{
    public function index() {
        return view('preguntasfrecuentes');
    }
}
