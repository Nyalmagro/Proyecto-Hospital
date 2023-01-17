@extends('theme.base')

@section('content')
    <div class="container py-5 text-center">
        <h1>hola mundo</h1>
        <a href="{{ route('persona.index') }}" class="btn btn-primary">Personal</a>

    </div>
@endsection