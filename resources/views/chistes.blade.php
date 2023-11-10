@extends('layouts.miPlantilla01')

@section('titulo')
    <h1>CHUCK NORRIS JOKESSSSS!!!</h1>
@endsection
@section('action-execute')
    Seleccione categoría!!!!
@endsection
@section('joke')

<form action="/chistes/random" method="get">
    @csrf

    <select name="categoria">
        @foreach ($categorias as $categoria)
            <option value="{{ $categoria }}">{{ $categoria }}</option>
        @endforeach
    </select>

    <button type="submit">Obtener chiste</button>
</form>

</form>



@endsection
