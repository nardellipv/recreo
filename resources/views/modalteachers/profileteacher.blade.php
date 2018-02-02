<div class="modal fade in" id="teacherModal-{{$teacher->id}}" tabindex="-1" role="dialog" ">
        <div class="modal-dialog " role="document ">
            <div class="modal-content modal-col-indigo ">
                <div class="modal-header ">
                    <h4 class="modal-title " id="defaultModalLabel ">Datos del alumno {{$teacher->name}}</h4>
                </div>
                <div class="modal-body ">
                    
                    <ul class="dashboard-stat-list ">
                            <li>
                                Nombre
                                <span class="pull-right "><b>{{$teacher->name}}</b>
                            </li>
                            <li>
                                Apellido
                                <span class="pull-right "><b>{{ $teacher->lastname }}</b> 
                            </li>
                            <li>
                                DNI
                                <span class="pull-right "><b>{{ $teacher->dni }}</b> 
                            </li>
                            <li>
                                Espacio
                                <span class="pull-right "><b>{{ $teacher->space }}</b> 
                            </li>
                            <li>
                                Teléfono
                                <span class="pull-right "><b>{{ $teacher->phone }}</b> 
                            </li>
                            <li>
                                EMail
                                <span class="pull-right "><b>{{ $teacher->email }}</b> 
                            </li>
                            <li>
                                Nivel
                                <span class="pull-right "><b>{{ $teacher->level }}</b> 
                            </li>
                            <li>
                                Paricipa por primera vez
                                <span class="pull-right "><b>{{ $teacher->first_time }}</b> 
                            </li>
                        </ul>
                </div>
                <div class="modal-footer">            
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>