<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ChisteController extends Controller
{
    public function index()
    {
        //Obtengo las categorías de la API
        $response=Http::get('https://api.chucknorris.io/jokes/categories');
        $categorias=$response->json();

        return view('chistes' , compact('categorias'));
    }

    public function obtenerChiste(Request $request)
{

    // Valida la categoría seleccionada
    $validaDato=$request->validate([
        'categoria' => 'required',
    ]);

    // Obtén el chiste aleatorio de la categoría seleccionada
    $response=Http::get('http://api.chucknorris.io/jokes/random',[
        'category'=>$validaDato['categoria']
    ]);

    // Comprueba si el JSON es válido
    if (json_last_error() !== JSON_ERROR_NONE) {
        return null;
    }

    // Obtén el valor de "value" del objeto JSON
    $value = $response->json()['value'];
    return $value;
}

}
