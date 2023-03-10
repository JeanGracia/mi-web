<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;

class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('example', ['only' => ['home']]);
    }
    
    public function home()
    {
        return view('home');
        /*return response('Contenido de la respuesta', 201)
                    ->header('X-TOKEN', 'secret')
                    ->cookie('X-COOKITA', 'cookie');*/
    }

    public function contactos()
    {
        return view('contactos');
    }

    public function mensajes(\App\Http\Requests\CreateMessageRequest $request)
    {
        $data = $request->all(); //Contiene todos los datos del formulario

        return back()
                ->with('info', 'Tu mensaje ha sido enviado correctamente :)');
    }

    public function saludo($nombre = "Invitado")
    {
        return view('saludo', compact('nombre'));
    }
}