@extends('layouts.app')
@section('content')
    <div class="fp-box">
        <div class="card">
            <div class="body">
                <div class="msg">
                    Usted no tiene permisos para descargar las grillas, por favor comuniquese con el mail
                    oacj@uncu.edu.ar
                </div>
                <div class="row m-t-20 m-b--5 align-center">
                    <a href="{{ url('/') }}">Volver</a>
                </div>
            </div>
        </div>
    </div>
@endsection