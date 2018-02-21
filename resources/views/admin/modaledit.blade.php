<div class="modal fade in" id="userEditModal-{{$user->id}}" tabindex="-1" role="dialog">
        {!! Form::model($user, ['method' => 'PATCH','route' => ['admin.update', $user->id]]) !!} 
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-col-indigo">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">Datos del alumno {{$user->name}}</h4>
                </div>
                <div class="modal-body">
                    <ul class="dashboard-stat-list">
                        <li>
                            Nombre
                            <span class="pull-right">                                
                                        <input type="text" class="form-control" name="name" value="{{ $user->name }}" required />
                                    </span>
                        </li>
                        <li>
                            Apellido
                            <span class="pull-right">
                                <input type="text" class="form-control" name="lastname" value="{{ $user->lastname }}" required /> 
                            </span>
                        </li>
                        <li>
                            email
                            <span class="pull-right">
                                <input type="text" class="form-control" name="email" value="{{ $user->email }}" required /> 
                            </span>
                        </li>
                        <li>
                            password
                            <span class="pull-right">
                                <input type="text" class="form-control" name="password"  /> 
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
        {{Form::close()}}
    </div>