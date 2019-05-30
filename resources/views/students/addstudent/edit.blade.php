@extends('layouts.main')
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>¡Antes de continuar!</strong> Por favor verifique los errores para poder guardar al
                        alumno.
                    </div>
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif @if (Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                @endif @if (Session::has('messageUpdate'))
                    <p class="alert alert-danger">{{ Session::get('messageUpdate') }}</p>
                @endif
                <div class="card">
                    <div class="header">
                        <h2>
                            Crear nuevo Alumno
                            <small>Por favor complete todos los campos</small>
                            <p class="header-dropdown">
                                <a href="{{ url('students') }}" class="btn bg-indigo waves-effect">Ir al listado de
                                    alumnos</a>
                            </p>
                        </h2>
                    </div>
                    {!! Form::model($student, ['method' => 'PATCH','route' => ['students.update', $student->id]]) !!}
                    {{ csrf_field() }}
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" value="{{ $student->name }}"
                                               placeholder="Nombre" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="lastname"
                                               value="{{ $student->lastname }}" placeholder="Apellido" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="dni" value="{{ $student->dni  }}"
                                               placeholder="Dni" required/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="date" class="form-control" name="birth_date"
                                               value="{{ $student->birth_date }}" placeholder="Fecha de nacimiento"
                                               required/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="phone"
                                               value="{{ $student->phone }}" placeholder="Teléfono de contacto"
                                               required/>
                                    </div>
                                </div>
                                @if($student->classroom == 'primaria')
                                    <div class="form-group" required>
                                        <input name="classroom" type="radio" value="primaria" id="nivel1"
                                               class="radio-col-purple" checked/>
                                        <label for="nivel1">Primaria</label>
                                        <input name="classroom" type="radio" id="nivel2" value="secundaria"
                                               class="radio-col-purple"/>
                                        <label for="nivel2">Secundaria</label>
                                    </div>
                                @else
                                    <div class="form-group" required>
                                        <input name="classroom" type="radio" value="primaria" id="nivel1"
                                               class="radio-col-purple" />
                                        <label for="nivel1">Primaria</label>
                                        <input name="classroom" type="radio" id="nivel2" value="secundaria"
                                               class="radio-col-purple" checked/>
                                        <label for="nivel2">Secundaria</label>
                                    </div>
                                @endif
                                <div class="form-group" required>
                                    @if($student->level == 1)
                                        <input name="level" type="radio" value="1" id="level1" class="radio-col-purple"
                                               checked/>
                                        <label for="level1">Nivel 1</label>
                                        <input name="level" type="radio" id="level2" value="2"
                                               class="radio-col-purple"/>
                                        <label for="level2">Nivel 2</label>
                                    @else
                                        <input name="level" type="radio" value="1" id="level1"
                                               class="radio-col-purple"/>
                                        <label for="level1">Nivel 1</label>
                                        <input name="level" type="radio" id="level2" value="2"
                                               class="radio-col-purple" checked/>
                                        <label for="level2">Nivel 2</label>
                                    @endif
                                </div>
                                <div class="form-group" required>
                                    @if($student->first_time == 'SI')
                                        <input name="first_time" type="radio" value="SI" id="first_1"
                                               class="radio-col-purple" checked/>
                                        <label for="first_1">Participa por primera vez</label>
                                        <input name="first_time" type="radio" id="first_2" value="NO"
                                               class="radio-col-purple"/>
                                        <label for="first_2">Ya ha participado con anterioridad</label>
                                    @else
                                        <input name="first_time" type="radio" value="SI" id="first_1"
                                               class="radio-col-purple"/>
                                        <label for="first_1">Participa por primera vez</label>
                                        <input name="first_time" type="radio" id="first_2" value="NO"
                                               class="radio-col-purple" checked/>
                                        <label for="first_2">Ya ha participado con anterioridad</label>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn bg-blue btn-block btn-lg waves-effect">Guardar Datos
                            </button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
</section>