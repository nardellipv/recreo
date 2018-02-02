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
                <li class="header">Menú</li>
                <li class="active">
                    <a href="{{ route('home') }}">
                            <i class="material-icons">home</i>
                            <span>Panel Pricipal</span>
                        </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">person_add</i>
                                <span>Inscripciones</span>
                            </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../../pages/charts/morris.html">Inscribir alumnos</a>
                        </li>
                        <li>
                            <a href="../../pages/charts/flot.html">Inscribir docentes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">list</i>
                                <span>Listados</span>
                            </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="{{ url('/students')}}">Listado de alumnos</a>
                        </li>
                        <li>
                            <a href="{{ url('/teachers')}}">Listado de docentes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                                <i class="material-icons">done_all</i>
                                <span>Exámenes</span>
                            </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="../../pages/charts/morris.html">Listado de alumnos aprobados</a>
                        </li>
                        <li>
                            <a href="../../pages/charts/flot.html">Ingresar notas de exámenes</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{ url('school') }}">
                                <i class="material-icons">settings</i>
                                <span>Perfíl del colegio</span>
                            </a>
                </li>
                <li>
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