@extends('layouts.main')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>¡Antes de continuar!</strong> Por favor antes de continuar complete los datos del
                        colegio.
                    </div>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('message'))
                    <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
                @if (Session::has('messageUpdate'))
                    <p class="alert alert-danger">{{ Session::get('messageUpdate') }}</p>
                @endif
                <div class="card">
                    <div class="header">
                        <h2>
                            Perfíl del colegio
                            <small>Por favor complete todos los campos</small>
                        </h2>
                    </div>

                    {!! Form::model($school, ['method' => 'PATCH','route' => ['school.update', $school->schoolId]]) !!}
                    {{ csrf_field() }}
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name"
                                               value="{{ $school->nameSchool }}" placeholder="Nombre completo de la Escuela"
                                               required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line ">
                                        <input type="text" class="form-control" name="city"
                                               value="{{ $school->nameCity }}" placeholder="Provincia" disabled
                                               required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="address"
                                               value="{{ $school->address }}" placeholder="Dirección Postal" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        @if($school->postal_code == 0)
                                            <input type="text" class="form-control" name="postal_code"
                                                   placeholder="Código Postal" required/>
                                        @else
                                            <input type="text" class="form-control" name="postal_code"
                                                   value="{{ $school->postal_code }}" placeholder="Código Postal"
                                                   required/> @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="phone"
                                               value="{{ $school->phone }}" placeholder="Télefono" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    @if(!isset($locationsUser) )
                                        <select name="location_id" class="form-control show-tick" required>
                                            <option value="">-- Seleccione la localidad del colegio --</option>
                                            @foreach ($locations as $local)
                                                <option value="{{ $local->id }}">{{ $local->nameLocations }}</option>
                                            @endforeach
                                        </select>
                                    @else
                                        <select name="location_id" class="form-control show-tick">
                                            <option value="{{$locationsUser->id}}">{{ $locationsUser->name }}</option>
                                            @foreach ($locations as $local)
                                                <option value="{{ $local->id }}">{{ $local->nameLocations }}</option>
                                            @endforeach
                                        </select> @endif
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="director1"
                                               value="{{ $school->director1 }}" placeholder="Nombre del Director"
                                               required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">

                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="director2"
                                               value="{{ $school->director2 }}" placeholder="Nombre del Vice-Director"
                                               required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email"
                                               value="{{ $school->email }}" placeholder="Email del Colegio" disabled
                                               required/>
                                    </div>
                                </div>
                                <br/>
                                <span>Gestión</span>
                                <div class="demo-radio-button">
                                    @if($school->type == 'PRIVADA')
                                        <input name="type" type="radio" value="PRIVADA" id="radio_1"
                                               class="radio-col-purple" checked/>
                                        <label for="radio_1">Gestión Privada</label>
                                        <input name="type" type="radio" value="PUBLICA" id="radio_2"
                                               class="radio-col-purple"/>
                                        <label for="radio_2">Gestión Publica</label> @else
                                        <input name="type" type="radio" value="PRIVADA" id="radio_1"
                                               class="radio-col-purple"/>
                                        <label for="radio_1">Gestión Privada</label>
                                        <input name="type" type="radio" value="PUBLICA" id="radio_2"
                                               class="radio-col-purple" checked/>
                                        <label for="radio_2">Gestión Publica</label> @endif
                                </div>
                                <br/><br/>
                                <span>Pariticipación del colegio</span>
                                <div class="demo-radio-button">
                                    @if($school->first_time == 'SI')
                                        <input name="first_time" type="radio" value="SI" id="first_1"
                                               class="radio-col-purple" checked/>
                                        <label for="first_1">Participo por primera vez</label>
                                        <input name="first_time" type="radio" id="first_2" value="NO"
                                               class="radio-col-purple"/>
                                        <label for="first_2">Ya ha participado con anterioridad</label> @else
                                        <input name="first_time" type="radio" value="SI" id="first_1"
                                               class="radio-col-purple"/>
                                        <label for="first_1">Participo por primera vez</label>
                                        <input name="first_time" type="radio" id="first_2" value="NO"
                                               class="radio-col-purple" checked/>
                                        <label for="first_2">Ya ha participado con anterioridad</label> @endif
                                </div>
                                <br/><br/>
                                <span>Postularse para ser Sede</span>
                                <div class="demo-radio-button">
                                    @if($school->sede == 'SI')
                                        <input name="sede" type="radio" value="SI" id="sede"
                                               class="radio-col-purple" checked/>
                                        <label for="sede">Si</label>
                                        <input name="sede" type="radio" id="sede2" value="NO"
                                               class="radio-col-purple"/>
                                        <label for="sede2">No</label>
                                    @else
                                        <input name="sede" type="radio" value="SI" id="sede"
                                               class="radio-col-purple"/>
                                        <label for="sede">Si</label>
                                        <input name="sede" type="radio" id="sede2" value="NO"
                                               class="radio-col-purple" checked/>
                                        <label for="sede2">No</label>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn bg-blue btn-block btn-lg waves-effect">Guardar Datos</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
</section>