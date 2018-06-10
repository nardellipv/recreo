@extends('layouts.main')
@section('content')
    @if (Session::has('message'))
        <p class="alert alert-info">{!! Session::get('message') !!}</p>
    @endif
    @if (Session::has('error'))
        <p class="alert alert-danger">{!! Session::get('error') !!}</p>
    @endif
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Subir el exámen modelo en formato PDF
                    </h2>
                </div>
                <div class="body">
                    {!! Form::open(['method' => 'POST','route' => ['uploadFile'], 'style'=>'display:inline', 'enctype' => 'multipart/form-data']) !!}
                    {{ csrf_field() }}
                    <div class="form-line">
                        <input name="file" type="file" id="file">
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-primary waves-effect">Subir Exámen</button>
                    {!! Form::Close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection