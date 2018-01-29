@extends('layouts.app') 
@section('content')
<form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="card">
        <div class="body">
            <div class="panel-heading">Reestablesca su contraseña</div>
            <div class="panel-body">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}
                    <div class="input-group">
                        <span class="input-group-addon">
                                            <i class="material-icons">mail</i>
                                        </span>
                        <div class="form-line {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input id="email" type="email" class="form-control" placeholder="Ingrese su mail" name="email" value="{{ old('email') }}"
                                required autofocus> @if ($errors->has('email'))
                            <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6"><button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Enviar mail</button></div>
                        <div class="col-sm-6"><a href="{{ route('login') }}" class="btn btn-block btn-lg bg-blue waves-effect" type="submit">Volver al inicio</a></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
@endsection