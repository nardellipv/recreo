@extends('layouts.app') 
@section('content')
<form class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="card">
        <div class="body">
            <div class="msg"><b>Iniciar Sesión</b></div>
            <div class="input-group">
                <span class="input-group-addon">
                            <i class="material-icons">mail</i>
                </span>
                
                <div class="form-line {{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" placeholder="Ingrese su mail" name="email" value="{{ old('email') }}"
                        required autofocus> 
                        
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span> 
                @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                <div class="form-line {{ $errors->has('password') ? ' has-error' : '' }}">
                    <input type="password" class="form-control" name="password" placeholder="Ingrese su contraseña" required>                    @if ($errors->has('password'))
                    <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-8 p-t-5">
                    <input type="checkbox" name="rememberme" id="rememberme" {{ old( 'remember') ? 'checked' : '' }} class="filled-in chk-col-pink">
                    <label for="rememberme">Recordarme</label>
                </div>
                <div class="col-xs-4">
                    <button class="btn btn-block bg-pink waves-effect" type="submit">Ingresar</button>
                </div>
            </div>
            <div class="row m-t-15 m-b--20">
                <div class="col-xs-6">
                    <a href="{{ route('register')}}" class="btn bg-indigo waves-effect">Registar un nuevo colegio</a>
                </div>
                <div class="col-xs-6 align-right">
                    <a href="{{ route('password.request') }}" class="btn bg-red waves-effect">Olvide mi Contraseña</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection