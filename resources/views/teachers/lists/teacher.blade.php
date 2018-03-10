@extends('layouts.main')
@section('content')
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            @if (Session::has('message'))
                <p class="alert alert-info">{!! Session::get('message') !!}</p>
            @endif
            <div class="card">
                <div class="header">
                    <h2>
                        Listado de docentes
                        <p class="header-dropdown">
                            <a href="{{ url('addteacher/teacher') }}" class="btn bg-indigo waves-effect">Agregar nuevo
                                docente</a>
                        </p>
                    </h2>
                </div>
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Nivel</th>
                                <th>Espacio</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->lastname }} </td>
                                    @if($teacher->level != 3)
                                        <td>{{ $teacher->level }}</td>
                                    @else
                                        <td>Ambos Niveles</td>
                                    @endif
                                    <td>{{ $teacher->space }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="" class="btn bg-purple waves-effect waves-light"
                                               data-toggle="modal" data-target="#teacherModal-{{$teacher->id}}">Ver</a>
                                            <button type="button" class="btn bg-purple waves-effect waves-light"
                                                    data-toggle="modal"
                                                    data-target="#teacherEditModal-{{$teacher->id}}">Editar
                                            </button>
                                            <button type="button" class="btn bg-red waves-effect waves-light"
                                                    data-toggle="modal"
                                                    data-target="#deleteTeacherModal-{{$teacher->id}}">Borrar
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @include('teachers.modalteachers.profileteacher')
                                @include('teachers.modalteachers.editteacher')
                                @include('teachers.modalteachers.deleteteacher')
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection