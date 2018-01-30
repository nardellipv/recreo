@extends('layouts.app') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>escuela <b>{{$school->name}}</b></h2>
            <div class="panel panel-default">
                <div class="panel-heading">Listado de alumnos    
                    <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form> 
            </div>
                <div class="panel-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th width="100">Nombre</th>
                                    <th width="100">Apellido</th>
                                    <th width="50">Nivel</th>
                                    <th width="100">Año Cursado</th>
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
                                        <a href="" class="btn bg-blue">edit</a>
                                        <a href="" class="btn bg-blue">delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $students->render() }}
                    </div>
                </div>
                
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">Listado de profesores </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th width="100">Nombre</th>
                                    <th width="100">Apellido</th>
                                    <th width="50">Nivel</th>
                                    <th width="100">Título</th>
                                    <th width="100">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->lastname }} </td>
                                    <td>{{ $teacher->level }}</td>
                                    <td>{{ $teacher->space }}</td>
                                    <td>
                                        <a href="" class="btn bg-blue">edit</a>
                                        <a href="" class="btn bg-blue">delete</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection