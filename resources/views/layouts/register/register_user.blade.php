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
                    <select name="city" class="form-control show-tick">
                                    <option value="">-- Seleccione su Provincia --</option>                                    
                                    <option value="2">CIUDAD AUTÓNOMA DE BUENOS AIRES</option>                                    
                                    <option value="6">BUENOS AIRES</option>
                                    <option value="10">CATAMARCA</option>
                                    <option value="14">CÓRDOBA</option>
                                    <option value="18">CORRIENTES</option>                                    
                                    <option value="22">CHACO</option>                                    
                                    <option value="26">CHUBUT</option>                                    
                                    <option value="30">ENTRE RÍOS</option>                                    
                                    <option value="34">FORMOSA</option>                                    
                                    <option value="38">JUJUY</option>                                    
                                    <option value="42">LA PAMPA</option>                                    
                                    <option value="46">LA RIOJA</option>                                    
                                    <option value="50">MENDOZA</option>                                    
                                    <option value="54">MISIONES</option>                                    
                                    <option value="58">NEUQUÉN</option>                                    
                                    <option value="62">RÍO NEGRO</option>                                    
                                    <option value="66">SALTA</option>                                    
                                    <option value="70">SAN JUAN</option>                                    
                                    <option value="74">SAN LUIS</option>                                    
                                    <option value="78">SANTA CRUZ</option>                                    
                                    <option value="82">SANTA FE</option>                                    
                                    <option value="86">SANTIAGO DEL ESTERO</option>                                    
                                    <option value="90">TUCUMÁN</option>                                    
                                    <option value="94">TIERRA DEL FUEGO</option>                                    
                                </select>
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