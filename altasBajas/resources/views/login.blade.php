@extends('layouts/main')
@section('contenido')
        <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h3 class="text-center" >login Usuario</h3>
                <form action="{{route ('logear')}}" method="post">
                    @csrf
                    @method('POST')
                    <label for="">Usuario</label>
                    <input type="text" class="form-control" name="name">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password">
                    <button class="btn btn-primary  mt-3">Entrar </button>
                </form>
            </div>
        </div>
        <div class="col mt-3 ">
            <a href="/registro">
                <button class="btn btn-info"> Registrarse </button>
            </a>
        </div>
    </div>
@endsection