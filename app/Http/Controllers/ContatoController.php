<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return "Esse é o index do ContatoController";
    }

    public function criar(Request $req)
    {
        dd($req->all());
        
        return "Esse é o criar do ContatoController";
    }

    public function editar()
    {
        return "Esse é o editar do ContatoController";
    }
}
