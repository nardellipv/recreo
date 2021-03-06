<div class="modal fade in" id="studentAddNoteLevel1Modal-{{$student->id}}" tabindex="-1" role="dialog">
    {!! Form::model($student, ['method' => 'PATCH','route' => ['students.update', $student->id]]) !!}
    {{ csrf_field() }}
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-col-indigo">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Datos del alumno {{$student->name}}</h4>
            </div>
            <div class="modal-body">
                <ul class="dashboard-stat-list">
                    <li>
                        Nombre
                        <span class="pull-right"><p>{{ $student->name }}</p>
                    </li>
                    <li>
                        Apellido
                        <span class="pull-right">
                            <span class="pull-right"><p>{{ $student->lastname }}</p>
                    </li>
                    <li>
                        Nivel
                        <span class="pull-right">
                            <span class="pull-right"><p>{{ $student->level }}</p>
                    </li>
                    <li>
                        Primera Teórico (de 0 a 100 puntos)
                        <span class="pull-right">
                            <span class="pull-right">
                                    <input type="number" min="0" max="100" class="form-control" name="first_note"
                                           value="{{ $student->first_note }}"/>
                            </span>
                    </li>
                    @if($student->level == 2)
                        <li>
                            Segunda Práctico (de 0 a 40 puntos)
                            <span class="pull-right">
                            <span class="pull-right">

                                    <input type="number" min="0" max="40" class="form-control" name="second_note"
                                           value="{{ $student->second_note }}"/>

                            </span>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">Actualizar</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    {{Form::close()}}
</div>