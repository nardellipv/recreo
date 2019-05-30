<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name .' '. Auth::user()->lastname}}</div>
                <div class="email">{{ Auth::user()->email }}</div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="tour-step 1 header">Menú</li>
                <li class="tour-step 2 active">
                    <a href="{{ route('home') }}">
                            <i class="material-icons">home</i>
                            <span>Panel Pricipal</span>
                        </a>
                </li>
                <li class="tour-step 3">
                    <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">person_add</i>
                                <span>Inscripciones</span>
                            </a>
                    <ul class="ml-menu disabled">
                        <li>
                            <a href="{{ url('addstudent/students')}}">Inscribir alumnos</a>
                            {{--<a href="#">Inscribir alumnos</a>--}}
                        </li>
                        <li>
                            <a href="{{ url('addteacher/teacher')}}">Inscribir docentes</a>
                            {{--<a href="#">Inscribir docentes</a>--}}
                        </li>
                    </ul>
                </li>
                <li class="tour-step 4">
                    <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">list</i>
                                <span>Listados</span>
                            </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('/students')}}">Listado de alumnos</a>
                        </li>
                        <li>
                            <a href="{{ url('approve')}}">Filtrar alumnos Aprobados</a>
                        </li>
                        <li>
                            <a href="{{ url('/teachers')}}">Listado de docentes</a>
                        </li>
                    </ul>
                </li>                
                <li class="tour-step 5">
                    <a href="{{ url('school') }}">
                                <i class="material-icons">settings</i>
                                <span>Perfíl del colegio</span>
                            </a>
                </li>
                <li class="tour-step 6">
                    <a href="{{ route('faq') }}">
                                <i class="material-icons">help</i>
                                <span>Preguntas frecuentes</span>
                            </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                        <i class="material-icons">exit_to_app</i>
                             <span>Salir</span>
                    </a>
                    <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </div>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2018 Design by <a href="www.mikant.com">MikAnt</a> .
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>