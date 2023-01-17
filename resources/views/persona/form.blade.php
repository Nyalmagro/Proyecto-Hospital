@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
            @if (isset($persona))
             <h1>Editar persona</h1>
            @else
             <h1>Crear persona</h1>
            @endif

            @if (isset($persona))
             <form action="{{ route('persona.update',$persona) }}" method="post">
             @method('PUT')
            @else
             <form action="{{ route('persona.store') }}" method="post">
            @endif

            @csrf

            <div class="mb-3">  
                <label for="nombres" class="form-label">Nombre</label>
                <input type="text" name="nombres" class="form-control" placeholder="Nombre del personal"
                value="{{old('nombres') ?? @$persona->nombres}}"></input>
                <p class="form-text">Escriba el nombre</p>
                @error('nombres')
                   <p class="form-text text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">  
                <label for="apellidos" class="form-label">Apellido</label>
                <input type="text" name="apellidos" class="form-control" placeholder="Apellido del personal" value="{{old('apellidos') ?? @$persona->apellidos}}"></input>
                <p class="form-text">Escriba el apellido</p>
                @error('apellidos')
                   <p class="form-text text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">  
                <label for="identificacion" class="form-label">Identificación</label>
                <input type="text" name="identificacion" class="form-control" placeholder="Identificacion del personal" value="{{old('identificacion') ?? @$persona->identificacion}}"></input>
                <p class="form-text">Escriba el identificador</p>
            </div>

            <div class="mb-3">  
                <label for="e_mail" class="form-label">e_mail</label>
                <input type="text" name="e_mail" class="form-control" placeholder="e_mail" value="{{old('e_mail') ?? @$persona->e_mail}}"></input>
                <p class="form-text">Escriba el e_mail</p>
            </div>

            <div class="mb-3">  
                <label for="direcccion" class="form-label">direcccion</label>
                <input type="text" name="direcccion" class="form-control" placeholder="direcccion" value="{{old('direcccion') ?? @$persona->direcccion}}"></input>
                <p class="form-text">Escriba la direcccion</p>
            </div>

            <div class="mb-3">  
                <label for="telefono" class="form-label">telefono</label>
                <input type="text" name="telefono" class="form-control" placeholder="telefono" value="{{old('telefono') ?? @$persona->telefono}}"></input>
                <p class="form-text">Escriba el telefono</p>
            </div>

            <div class="mb-3">  
                <label for="fecha_nacimiento" class="form-label">fecha_nacimiento</label>
                <input type="date" name="fecha_nacimiento" class="form-control" placeholder="fecha_nacimiento" value="{{old('fecha_nacimiento') ?? @$persona->fecha_nacimiento}}"></input>
                <p class="form-text">Escriba la fecha_nacimiento</p>
            </div>

            <div class="mb-3">  
                <label for="genero" class="form-label">genero</label>
                <input type="text" name="genero" class="form-control" placeholder="genero" value="{{old('genero') ?? @$persona->genero}}"></input>
                <p class="form-text">Escriba el genero</p>
            </div>




            @if (isset($persona))
             <button type="submit" class="btn btn-info">Editar persona</button>
            @else
             <button type="submit" class="btn btn-info">Guardar persona</button>
            @endif

        </form>
        


    </div>
@endsection