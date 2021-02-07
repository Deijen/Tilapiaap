<header>
    <div class="box-border absolute top-10 right-10">
        <h1>Tilapiaapp</h1>
         <nav>
            <ul>
                <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : '' }}">home</a>
                </li>
                <li><a href="{{route('cultivos.index')}}" class="{{request()->routeIs('cultivos.*') ? 'active' : '' }}">cultivos</a>
                </li>
            </ul>
        </nav>
    </div>    
</header>