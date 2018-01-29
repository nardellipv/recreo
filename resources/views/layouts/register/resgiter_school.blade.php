@section('contentSchool')
<div class="signup-box">
    <div class="card">
        <div class="body">
            <div class="msg">Registro Colegio</div>
            <div class="input-group">
                <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                <div class="form-line {{ $errors->has('name') ? ' has-error' : '' }}">
                    <input id="name" type="text" class="form-control" name="name" placeholder="Nombre del Colegio" value="{{ old('name') }}"
                        required autofocus> @if ($errors->has('name'))
                    <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span> @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                <div class="form-line {{ $errors->has('address') ? ' has-error' : '' }}">
                    <input id="address" type="text" class="form-control" name="address" placeholder="Dirección del Colegio" value="{{ old('lastname') }}"
                        required autofocus> @if ($errors->has('address'))
                    <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span> @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                <div class="form-line {{ $errors->has('postal_code') ? ' has-error' : '' }}">
                    <input id="postal_code" type="text" class="form-control" name="address" placeholder="Código Postal del Colegio" value="{{ old('postal_code') }}"
                        required autofocus> @if ($errors->has('postal_code'))
                    <span class="help-block">
                            <strong>{{ $errors->first('postal_code') }}</strong>
                        </span> @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                <div class="form-line {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <input id="phone" type="text" class="form-control" name="phone" placeholder="Teléfono del Colegio" value="{{ old('phone') }}"
                        required autofocus> @if ($errors->has('phone'))
                    <span class="help-block">
                            <strong>{{ $errors->first('phone') }}</strong>
                        </span> @endif
                </div>
            </div>
            <div class="input-group">
                <div class="demo-radio-button">
                    <input name="group1" type="radio" id="radio_1" value="PRIVADA" />
                    <label for="radio_1">Gestión Privada</label>
                    <input name="group1" type="radio" id="radio_2" value="PUBLICA" />
                    <label for="radio_2">Gestón Publica</label>
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                <div class="form-line {{ $errors->has('director1') ? ' has-error' : '' }}">
                    <input id="director1" type="text" class="form-control" name="director1" placeholder="Nombre del Director" value="{{ old('director1') }}"
                        required autofocus> @if ($errors->has('director1'))
                    <span class="help-block">
                                <strong>{{ $errors->first('director1') }}</strong>
                            </span> @endif
                </div>
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                                <i class="material-icons">person</i>
                            </span>
                <div class="form-line {{ $errors->has('director2') ? ' has-error' : '' }}">
                    <input id="director2" type="text" class="form-control" name="director2" placeholder="Nombre del Vice-Director" value="{{ old('director2') }}"
                        required autofocus> @if ($errors->has('director2'))
                    <span class="help-block">
                                <strong>{{ $errors->first('director2') }}</strong>
                            </span> @endif
                </div>
            </div>
            <div class="input-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                <div class="form-line">
                    <input id="email" type="email" class="form-control" placeholder="Mail del colegio" name="email" value="{{ old('email') }}"
                        required> @if ($errors->has('email'))
                    <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span> @endif
                </div>
            </div>
            <div class="input-group">
                <div class="demo-radio-button">
                    <input name="first_time" type="radio" id="first_1" value="SI" />
                    <label for="first_1">Primera vez que participo</label>
                    <input name="first_time" type="radio" id="first_2" value="NO" />
                    <label for="first_2">Ya he participado anteriormente</label>
                </div>
            </div>
            <div class="input-group">
                    <select class="form-control show-tick">
                            <option value="">-- Please select --</option>
                  {{--             @foreach ($cities as $city)
                            <option value="10">{{ $city->name }}</option>
                            @endforeach  --}}
                        </select>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6"><button class="btn btn-block btn-lg bg-pink waves-effect" type="submit">Registrar</button></div>
        <div class="col-sm-6"><a href="{{ route('login') }}" class="btn btn-block btn-lg bg-blue waves-effect" type="submit">Volver al inicio</a></div>
    </div>
</div>
@endsection