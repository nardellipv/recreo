@extends('layouts.app')
@section('content')
    <div class="fp-box">
        <div class="card">
            <div class="body">
                <div class="msg">
                    Por favor ingrese el mail que proporcino al comite para poder descargar los exámenes.
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-lg-offset-1">
                            @if($access->access == 'L1')
                                <a href="http://recreo.mikant.xyz/download/tests/Nivel1.pdf" type="button" class="btn btn-block btn-lg btn-success waves-effect" download="nivel 1.txt" target="_blank">Descargar exámen Nivel 1</a>
                            @endif
                            @if($access->access == 'L2')
                                    <a href="http://recreo.mikant.xyz/download/tests/Nivel2.pdf" type="button" class="btn btn-block btn-lg btn-success waves-effect" download="nivel 1.txt" target="_blank">Descargar exámen Nivel 2</a>
                            @endif
                            @if($access->access == 'B')
                                <a href="http://recreo.mikant.xyz/download/tests/Nivel1.pdf" type="button" class="btn btn-block btn-lg btn-success waves-effect" download="nivel 1.txt" target="_blank">Descargar exámen Nivel 1</a>
                                    <a href="http://recreo.mikant.xyz/download/tests/Nivel2.pdf" type="button" class="btn btn-block btn-lg btn-success waves-effect" download="nivel 1.txt" target="_blank">Descargar exámen Nivel 2</a>
                            @endif
                        </div>
                    </div>
                </div>
                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="{{ url('/') }}">Volver</a>
                    </div>
                </div>
            </div>
        </div>
@endsection