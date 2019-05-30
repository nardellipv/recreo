<div class="tour-step 8 card">
    <div class="header">
        <h2>
            Área de información y descargas
            <small>Información y descarga de documentación importante sobre la olimpiada</small>
        </h2>
    </div>

    <div class="body">
        <div class="row clearfix">
            <div class="row">
                <div class="col-xs-6">
                    @if(Auth::user()->nivelI)
                        <div class="card">
                            <div class="header bg-light-blue">
                                <h2>
                                    Evaluación Nivel 1
                                    <small>Por favor descargue la evaluación</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p>Descargue las evaluaciones de los siguientes links.</p>
                                <a href="https://recreo.mikant.com/download/examen/INTERCOLEGIAL%20NIVEL%20I%202018.pdf" target="_blank">INTERCOLEGIAL NIVEL I 2018</a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="col-xs-6">
                    @if(Auth::user()->nivelII)
                        <div class="card">
                            <div class="header bg-light-blue">
                                <h2>
                                    Evaluación Nivel 2
                                    <small>Por favor descargue la evaluación</small>
                                </h2>
                            </div>
                            <div class="body">
                                <p>Descargue las evaluaciones de los siguientes links.</p>
                                <a href="https://recreo.mikant.com/download/examen/OPCION%20M%C3%9ALTIPLE%20INTERCOLEGIAL%20NIVEL%20II%202018.pdf" target="_blank" target="_blank">OPCION MÚLTIPLE INTERCOLEGIAL NIVEL II 2018</a><p>
                                <a href="https://recreo.mikant.com/download/examen/PRUEBA%20EXPERIMENTAL%20INTERCOLEGIAL%20NIVEL%20II%202018.pdf" target="_blank">PRUEBA EXPERIMENTAL INTERCOLEGIAL NIVEL II 2018</a><p>
                                <a href="https://recreo.mikant.com/download/examen/RESOLUCION%20DE%20PROBLEMA%20NIVEL%20II%20INTERCOLEGIAL%202018.pdf" target="_blank">RESOLUCION DE PROBLEMA NIVEL II INTERCOLEGIAL 2018</a><p>
                            </div>
                        </div>
                    @endif
                </div>
                {{--<div class="col-xs-12">
                    <div class="card">
                        <div class="header bg-light-blue">
                            <h2>
                                Escuelas Sede
                                <small>Por favor leer atentamente</small>
                            </h2>
                        </div>
                        <div class="body">
                            <p>En los siguientes links encontraran el listado de escuelas sedes por nivel y de las
                                instituciones
                                que participan en cada sede.</p>
                            <a href="https://recreo.mikant.com/download/Materiales%20Intercolegial.%20nivel%20II%202018.pdf"
                               target="_blank">Materiales Intercolegial. nivel II 2018</a>
                            <p>
                                <a href="https://recreo.mikant.com/download/LISTA%20DE%20MATERIALES%202018%20Nivel%20I.pdf"
                                   target="_blank">Lista materiales Nivel 1 2018</a>
                            <p>
                                <a href="https://recreo.mikant.com/download/SEDES%20NIVEL%20I.%202018.pdf"
                                   target="_blank">SEDES NIVEL I. 2018</a>
                            <p>
                                <a href="https://recreo.mikant.com/download/SEDES%20NIVEL%20II.%202018%20.pdf"
                                   target="_blank">SEDES NIVEL II. 2018 </a>
                            <p>
                            <p>Los profesores responsables de cada escuela o los que determinen los directivos,
                                deben conformar el Comité Académico Local que según reglamento debe velar por el
                                buen desarrollo de la instancia.</p>
                            <p>Este Comité debe ponerse de acuerdo en la provisión de los materiales para la prueba
                                experimental y la réplica de las pruebas la escuela sede no debe proveer todo, salvo
                                que haya un acuerdo entre los profesores y directivos.</p>
                            <p>El proceso para bajar la prueba será el siguiente:</p>
                            <p>El día 4 de julio de 9 a 18 horas se habilitara al profesor o director que figura
                                como responsable de la sede, para que pueda bajar la o las pruebas de la plataforma;
                                el Comité Académico Local debe ponerse de acuerdo en la hora en que lo realizará así
                                están presentes todo, luego se debe fotocopiar y guardar en sobre hasta el momento
                                de la prueba.</p>
                            <p>Este Comité debe acordar horario de la aplicación de la prueba y de la corrección.
                                Para la corrección se enviará las indicaciones al correo electrónico del profesor
                                responsable de la sede.</p>
                            <p>En caso de que haya algún inconveniente y decidan que se habilite a otro profesor
                                para recibir la prueba la fecha límite para comunicarlo es el día lunes 2 de julio a
                                las 12 horas al correo electrónico <b>oacj@uncu.edu.ar</b> en el asunto debe colocar
                                profesor responsable. En el cuerpo del mensaje colocar número de la sede y nivel.
                            </p>
                        </div>
                    </div>
                </div>--}}
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-blue">
                            <h2>
                                Notas de los examenes
                                <small>Fechas disponibles</small>
                            </h2>
                        </div>
                        <div class="body">
                            Se avisará con anticipación mediante un mensaje en este mismo sitio cuando se encuentre
                            habilitada la opción
                            para poder ingresar las notas de los alumnos.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-blue">
                            <h2>
                                REGLAMENTO GENERAL 2019
                                <small>Descarga</small>
                            </h2>
                        </div>
                        <div class="body">
                            Descarge el reglamento desde <a href="{{url('download/Reglamento2018.pdf')}}"
                                                            target="_blank">aquí</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header bg-light-blue">
                            <h2>
                                Subir el exámen
                                <small>Exámen modelo</small>
                            </h2>
                        </div>
                        <div class="body">
                            Por favor suba el exámen modelo que se tomó a los alumnos en formato <b>PDF</b>.
                            Para subirlo haga click en el siguiente link <a href="{{ url('showUploadFile') }}">Subir
                                PDF</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>