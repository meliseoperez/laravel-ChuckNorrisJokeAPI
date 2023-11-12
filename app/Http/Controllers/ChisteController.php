<?php

namespace App\Http\Controllers;

use COM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Termwind\Components\Raw;
use App\Models\Chistes;


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
    $validaDato = $request->validate([
        'categoria' => 'required',
    ]);

    // Obtén el chiste aleatorio de la categoría seleccionada
    $response = Http::get('https://api.chucknorris.io/jokes/random', [
        'category' => $validaDato['categoria']
    ]);

    // Comprueba si el JSON es válido
    if (json_last_error() !== JSON_ERROR_NONE) {
        abort(500, 'Error en el formato JSON.');
    }

    // Obtén el valor de "value" del objeto JSON
    $chiste = $response->json()['value'];

    // Obtén la categoría del chiste
    $categoria = $validaDato['categoria'];

    // Llama al método storeJoke() para almacenar el chiste en la base de datos
    $this->storeJoke($chiste, $categoria);

    // Agrega el nuevo chiste a la lista en sesión
    $chistes = array_reverse(session()->get('chistes', []));
    $chistes[] = ['chiste' => $chiste, 'categoria' => $categoria];
    session()->put('chistes', $chistes);

    // Retorna la vista 'chistesdos' con el valor del chiste
    return view('chistesdos', compact('chistes'));
}

public function storeJoke($chiste, $categoria)
{
    $nuevoChiste = new Chistes([
        'chiste' => $chiste,
        'categoria' => $categoria,
    ]);

    $nuevoChiste->save();
}


}
