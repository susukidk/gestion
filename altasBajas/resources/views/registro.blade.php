@extends('layouts/main')
@section('contenido')
<div class="container">
    <div class="row mt-3 ">
        <div class="col">
            <form action="{{route ('agregarUsuario')}}" method="post">
                @csrf
                @method('POST')

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre de Usuario</label>
                    <input type="text" class="form-control"  name="name" id="name">
                  </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control"  name="password" id="password">
                </div>
               
                <button type="submit" class="btn btn-primary">Registrar</button>
              </form>
        </div>
    </div>
</div>
    
@endsection