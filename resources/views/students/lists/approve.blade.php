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
                    Listado de alumnos aprobados
                </h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th width="35">Edad</th>
                                <th width="35">Nivel</th>
                                <th width="35">Año Cursado</th>
                                <th width="35">1ra Nota</th>
                                <th width="35">2da Nota</th>
                                <th width="35">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->lastname }} </td>
                                <td>{{ Date::parse($student->birth_date)->age }} </td>
                                <td>{{ $student->level }}</td>
                                <td>{{ $student->classroom }}</td>
                                <td>{{ $student->first_note }}</td>
                                @if($student->level == 2)
                                <td>{{ $student->second_note }}</td>
                                @else
                                <td style="background-color:red">N/A</td>
                                @endif
                                <td>{{ $student->total_note }}</td>

                            </tr>
    @include('students.modalstudents.profilestudent')
    @include('students.modalstudents.addnote')
    @include('students.modalstudents.deletestudent')
    @include('students.modalstudents.editstudent') 
    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection