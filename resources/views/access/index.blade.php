@extends('layouts.app')
@section('content')
    <div class="fp-box">
        <div class="card">
            <div class="body">
                {!! Form::open(['method' => 'POST','route' => ['access.permition'],'style'=>'display:inline']) !!}
                {{ csrf_field() }}
                <div class="msg">
                        Por favor ingrese el mail que proporcino al comite para poder descargar los exámenes.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required
                                   autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Descargar exámen</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{ url('/') }}">Volver</a>
                    </div>
                {!! Form::Close() !!}
            </div>
        </div>
    </div>
@endsection