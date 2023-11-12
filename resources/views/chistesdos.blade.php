@extends("layouts.miPlantilla01")

@section('action-execute')
<h1>Chistes de Chuck Norris</h1>
<ul>
    @forelse (session('chistes', []) as $chiste)
        <li>{{ $chiste }}</li>
    @empty
        <li>No hay chistes disponibles.</li>
    @endforelse
</ul>
@endsection
