<div class="modal fade in" id="studentEditModal-{{$student->id}}" tabindex="-1" role="dialog">
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
                        <span class="pull-right">                                
                                    <input type="text" class="form-control" name="name" value="{{ $student->name }}" required />
                                </span>
                    </li>
                    <li>
                        Apellido
                        <span class="pull-right">
                            <input type="text" class="form-control" name="lastname" value="{{ $student->lastname }}" required /> 
                        </span>
                    </li>
                    <li>
                        DNI
                        <span class="pull-right">
                                    <input type="text" class="form-control" name="dni" value="{{ $student->dni }}" required />
                                </span>
                    </li>
                    <li>
                        Fecha Nacimiento
                        <span class="pull-right">
                                    <input type="text" class="form-control" name="birth_date" value="{{ $student->birth_date }}" required />
                                </span>
                    </li>
                    <li>
                        Teléfono
                        <span class="pull-right">
                                    <input type="text" class="form-control" name="phone" value="{{ $student->phone }}" required />
                                </span>
                    </li>
                    <li>
                        Año Cursado
                        <span class="pull-right">
                                    <input type="number" min="1" max="9"  class="form-control" name="classroom" value="{{ $student->classroom }}" required />
                                </span>
                    </li>
                    <li>
                        Nivel
                        <span class="pull-right">
                                        <span class="pull-right"><input type="number" min="1" max="2" class="form-control" name="level" value="{{ $student->level }}" required />                                        
                                </span>
                        </span>
                    </li>
                    <li>
                        Paricipa por primera vez 
                            <span class="pull-right">
                                @if($student->first_time == 'SI')
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
                                    </li>  
                            </span>
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