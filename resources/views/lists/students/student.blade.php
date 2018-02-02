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
                    Listado de alumnos
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
                                <th>Año Cursado</th>
                                <th width="200">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->lastname }} </td>
                                <td>{{ $student->level }}</td>
                                <td>{{ $student->classroom }}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="" class="btn bg-purple waves-effect waves-light" data-toggle="modal" data-target="#studentModal-{{$student->id}}">Ver</a>
                                        <button type="button" class="btn bg-purple waves-effect waves-light" data-toggle="modal" data-target="#studentEditModal-{{$student->id}}">Editar</button>
                                        <button type="button" class="btn bg-red waves-effect waves-light" data-toggle="modal" data-target="#deleteStudentModal-{{$student->id}}">Borrar</button>
                                    </div>
                                </td>
                            </tr>
    @include('students.profilestudent')
    @include('students.deletestudent') 
    @include('students.editstudent') 
    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection