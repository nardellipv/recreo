<div class="modal fade in" id="studentModal-{{$student->id}}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-col-indigo">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Datos del alumno {{$student->name}}</h4>
            </div>
            <div class="modal-body">
                <ul class="dashboard-stat-list">
                    <li>
                        Nombre
                        <span class="pull-right"><b>{{$student->name}}</b>
                            </li>
                            <li>
                                Apellido
                                <span class="pull-right"><b>{{ $student->lastname }}</b> 
                            </li>
                            <li>
                                DNI
                                <span class="pull-right"><b>{{ $student->dni }}</b> 
                            </li>
                            <li>
                                Fecha Nacimiento
                                <span class="pull-right"><b>{{ $student->birth_date }}</b> 
                            </li>
                            <li>
                                Teléfono
                                <span class="pull-right"><b>{{ $student->phone }}</b> 
                            </li>
                            <li>
                                Año Cursado
                                <span class="pull-right"><b>{{ $student->classroom }}</b> 
                            </li>
                            <li>
                                Nivel
                                <span class="pull-right"><b>{{ $student->level }}</b> 
                            </li>
                            <li>
                                Paricipa por primera vez
                                <span class="pull-right"><b>{{ $student->first_time }}</b> 
                            </li>
                        </ul>
                </div>
                <div class="modal-footer">            
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>