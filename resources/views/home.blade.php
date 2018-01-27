@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de alumnos escuela <b>{{$school->name}}</b></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @foreach ($students as $student)
                        <p> {{ $student->name .' '. $student->lastname  }}</p>
                    @endforeach
                </div>
                {{ $students->render() }}
            </div>
        </div>
    </div>
</div>
@endsection
