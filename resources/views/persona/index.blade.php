@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>Listado de personal</h1>
        <a href="{{ route('persona.create') }}" class="btn btn-primary">Crear personal</a>

        @if (Session::has('mensaje'))
          <div class="alert alert-info my-5">
            {{ Session::get('mensaje')}}

          </div>

        @endif

        <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombres</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Identificación</th>
      <th scope="col">E-mail</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($personas as $detalle)
      <tr>
        <td> {{$detalle->nombres}} </td>
        <td> {{$detalle->apellidos}} </td>
        <td> {{$detalle->identificacion}} </td>
        <td> {{$detalle->e_mail}} </td>
        <td>
          <a href="{{ route('persona.edit', $detalle) }}" class="btn btn-warning">Editar</a>
          <form action="{{ route('persona.destroy', $detalle) }}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" onclick="return confirm('Estás seguro de eliminar esta persona?')">Eliminar</button>
          </form>

        </td>
      </tr>
    @empty
    <tr>
      <td colspan="3"> No existen registros</td>
    </tr>
    @endforelse
  </tbody>
</table>

@if ($personas->count())
<div class="text-center">  
  {{$personas->links()}}
</div>
@endif

</div>
@endsection