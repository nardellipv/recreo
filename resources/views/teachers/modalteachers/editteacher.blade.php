<div class="modal fade in" id="teacherEditModal-{{$teacher->id}}" tabindex="-1" role="dialog">
    {!! Form::model($teacher, ['method' => 'PATCH','route' => ['teachers.update', $teacher->id]]) !!}
    {{ csrf_field() }}
    <div class="modal-dialog " role="document ">
        <div class="modal-content modal-col-indigo ">
            <div class="modal-header ">
                <h4 class="modal-title " id="defaultModalLabel ">Datos del alumno {{$teacher->name}}</h4>
            </div>
            <div class="modal-body ">

                <ul class="dashboard-stat-list ">
                    <li>
                        Nombre
                        <span class="pull-right">
                                    <input type="text" class="form-control" name="name" value="{{ $teacher->name }}"
                                           required/>
                                </span>
                    </li>
                    <li>
                        Apellido
                        <span class="pull-right">
                                <input type="text" class="form-control" name="lastname" value="{{ $teacher->lastname }}"
                                       required/>
                            </span>
                    </li>
                    <li>
                        DNI
                        <span class="pull-right">
                                <input type="text" class="form-control" name="dni" value="{{ $teacher->dni }}"
                                       required/>
                            </span>
                    </li>
                    <li>
                        Espacio
                        <span class="pull-right">
                                <input type="text" class="form-control" name="space" value="{{ $teacher->space }}"
                                       required/>
                            </span>
                    </li>
                    <li>
                        Teléfono
                        <span class="pull-right">
                                <input type="text" class="form-control" name="phone" value="{{ $teacher->phone }}"
                                       required/>
                            </span>
                    </li>
                    <li>
                        E-Mail
                        <span class="pull-right">
                                <input type="email" class="form-control" name="email" value="{{ $teacher->email }}"
                                       required/>
                            </span>
                    </li>
                    <li>
                        Nivel
                        <span class="pull-right">
                                    <input type="number" min="1" max="3" class="form-control" name="level"
                                           value="{{ $teacher->level }}" required/>
                    </li>
                    <li>
                        Paricipa por primera vez
                        <span class="pull-right">
                                        @if($teacher->first_time == 'SI')
                                <div class="switch">
                                                <label>NO
                                                    <input type="checkbox" name="first_time" value="SI" checked>
                                                    <span class="lever switch-col-lime"></span>
                                                </label>
                                                <label>SI</label>
                                            </div>
                            @else
                                <div class="switch">
                                                <label>NO
                                                    <input type="checkbox" name="first_time" value="SI">
                                                    <span class="lever switch-col-lime"></span>
                                                </label>
                                                <label>SI</label>
                                            </div>
                            @endif
                        </span>
                    </li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-link waves-effect">Actualizar</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
    {!! Form::close() !!}
</div>
