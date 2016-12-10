<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Topico;
use Illuminate\Routing\Route;

class TopicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function listing() {
        $topicos = Topico::all();

        return response()->json(
                $topicos->toArray()
            );
    }

    public function index()
    {
        return view('topico.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax()) {
            Topico::create($request->all());
            return response()->json([
                    "mensaje" => "creado"
                ]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
    	$topico = topico::find($id);

        return response()->json(
            $topico->toArray()
        );
    }

    public function update(Request $request, $id) {
        $topico = topico::find($id);
        $topico->fill($request->all());
        $topico->save();

        return response()->json([
                "mesaje" => "actualizado"
                ]);
    }

    public function destroy($id) {
        $topico = topico::find($id);
        $topico->delete();

        return response()->json([
                "mesaje" => "eliminado"
                ]);
    }
}
