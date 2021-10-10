@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span>Agregar Nota</span>
                        <a href="/notas" class="btn btn-primary btn-sm">Editar!</a>
                    </div>
                    <div class="card-body">     
                    @if ( session('mensaje') )
                        <div class="alert alert-success">{{ session('mensaje') }}</div>
                        <div class="alert alert-warning"><p> Agrega otra nota o regresa a tu<a href="/notas"> Lista de notas</a></p></div>
                    @endif
                    <form method="POST" action="/notas">
                        @csrf
                        <input
                        type="text"
                        name="nombre"
                        placeholder="Nombre de la nota"
                        class="form-control mb-2"
                        />
                        <input
                        type="text"
                        name="descripcion"
                        placeholder="Descripcion de tu nota"
                        class="form-control mb-2"
                        />
                        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection