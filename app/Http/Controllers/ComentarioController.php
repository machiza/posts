<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;
use Redirect;
use App\Comentario;

class ComentarioController extends Controller
{
	public function index() {
    	$categorias = Categoria::lists('categoria', 'id');
    	return view('Comentario.create', compact('categorias'));
    }


    public function create() {
    	$categorias = Categoria::lists('categoria', 'id');
    	return view('Comentario.create', compact('categorias'));
    }

    public function store(Request $request) {
    	$comentario = Comentario::create($request->all());
        return Redirect::to('/home');
    }
}
