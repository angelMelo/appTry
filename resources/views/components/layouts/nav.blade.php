<div class="navbar-fixed">
    <nav class="nav-extended teal darken-4" role="navigation" id="parte1">

        <div class="nav-wrapper container"><img class="left hide-on-med-and-down" width="110" src="https://framework-gb.cdn.gob.mx/landing/img/logofooter.png">
            <ul class="right hide-on-med-and-down">
                @guest
                <li><a href="{{ route('login') }}">Trámites</a></li>                
                @endguest
                @auth
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="btn-flat waves-effect waves-light red" onclick="this.closest('form').submit()">Logout</a>
                    </form>
                </li>
                <li><a href="{{ route('dashboard') }}">Admin</a></li>
                @endauth
                <li><a href="{{ route('home') }}">Gobierno</a></li>
                <li><i class="material-icons">search</i></li>
            </ul>
        </div>
    
        <div class="nav-content container">
            <span class="nav-title">Factura Electrónica</span>
    
            <ul id="nav-mobile" class="sidenav teal darken-4">
                @guest
                <li><a href="{{ route('login') }}"><span class="white-text">Trámites</span></a></li>
                @endguest
                @auth
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <a class="btn-flat waves-effect waves-light red" onclick="this.closest('form').submit()">Logout</a>
                    </form>
                </li>   
                <li><a href="{{ route('dashboard') }}"><span class="white-text">Admin</span></a></li>
                @endauth
                <li><a href="{{ route('home') }}"><span class="white-text">Gobierno</span></a></li>
                <li><a href="#"><span class="white-text">Buscar</span></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="right sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
    
    </nav>
</div>
