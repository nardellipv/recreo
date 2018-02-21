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
                                <th>email</th>
                                <th>password</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->lastname }} </td>
                                <td>{{ $user->email }} </td>
                                <td><button type="button" class="btn bg-purple waves-effect waves-light" 
                                    data-toggle="modal" data-target="#userEditModal-{{$user->id}}">Editar</button></td>
                            </tr>
                            @include('admin.modaledit')
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection