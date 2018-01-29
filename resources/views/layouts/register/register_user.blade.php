@section('contentUser')
<form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}
    <div class="signup-box">
        <div class="card">
            <div class="body">
                <div class="msg">Registro del usuario responsable del colegio</div>
                <div class="input-group">
                    <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line {{ $errors->has('name') ? ' has-error' : '' }}">
                        <input id="name" type="text" class="form-control" name="name" placeholder="ingrese su nombre" value="{{ old('name') }}" required
                            autofocus> @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span> @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line {{ $errors->has('lastname') ? ' has-error' : '' }}">
                        <input id="lastname" type="text" class="form-control" name="lastname" placeholder="ingrese su apellido" value="{{ old('lastname') }}"
                            required autofocus> @if ($errors->has('lastname'))
                        <span class="help-block">
                            <strong>{{ $errors->first('lastname') }}</strong>
                        </span> @endif
                    </div>
                </div>
                <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                    <div class="form-line">
                        <input id="email" type="email" class="form-control" placeholder="ingrese su mail" name="email" value="{{ old('email') }}"
                            required> @if ($errors->has('email'))
                        <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line {{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" type="password" placeholder="Ingrese su contraseña" class="form-control" name="password" required>                        @if ($errors->has('password'))
                        <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span> @endif
                    </div>
                </div>
                <div class="input-group">
                    <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input id="password-confirm" type="password" placeholder="Confirme su contraseña" class="form-control" name="password_confirmation"
                            required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Registrar</button></div>
                    <div class="col-sm-6"><a href="{{ route('login') }}" class="btn btn-block btn-lg bg-blue waves-effect" type="submit">Volver al inicio</a></div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection