<div class="modal fade" id="deleteTeacherModal-{{ $teacher->id }}" tabindex="-1" role="dialog">
        {!! Form::open(['method' => 'DELETE','route' => ['teachers.destroy', $teacher->id], 'style'=>'display:inline']) !!} 
        {{ csrf_field() }}
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-col-red">
                <div class="modal-header">
                    <h4 class="modal-title" id="defaultModalLabel">¡Eliminar Docente!</h4>
                </div>
                <div class="modal-body">
                    ¿Esta seguro de eliminar el docente <b>{{ $teacher->name .' ' . $teacher->lastname}}</b>?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-link waves-effect">Eliminar</button>
                    <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
        {!! Form::Close() !!}
    </div>