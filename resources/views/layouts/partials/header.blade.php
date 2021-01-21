<header>
    <div class="box-border absolute top-10 right-10">
        <h1>Tilapiaapp</h1>
         <nav>
            <ul>
                <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : '' }}">home</a>
                </li>
                <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : '' }}">cursos</a>
                </li>
                <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
                </li>
            </ul>
        </nav>
    </div>    
</header>