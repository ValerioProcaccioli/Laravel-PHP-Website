<nav>
    <ul>
        @can('isAdmin')
        <li><a href="#">Lista staff</a></li>
        <li><a href="#">Lista utenti</a></li>
        @endcan
        @can('isStaff') 
        <li><a href="{{ route('catalog1') }}">Catalogo</a></li>
        <li><a href="#">Cancella</a></li>
        <li><a href="#">Modifica</a></li>
        <li><a href="{{route('insert')}}">Inserisci</a></li>
        <li><a href="{{route('addCategory')}}">Nuova Categoria</a></li>
        <li><a href="{{ route('staff') }}" class="highlight" title="Home Staff">Home Staff</a></li>
        @endcan
        @can('isUser')
                <li><a href="{{ route('catalog1') }}">Catalogo</a></li>
                <li><a href="{{ route('who') }}">Chi siamo</a></li>
                <li><a href="{{ route('where') }}">Dove siamo</a></li>
                <li><a href="{{ route('contact') }}">Contattaci</a></li>
                <li><a href="{{ route('user') }}" class="highlight" title="Home User">Home User</a></li>
        @endcan
        @auth
            <li><a href="" title="Esci dal sito" class="highlight" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        @endauth    
        @guest
                <li><a href="{{ route('catalog1') }}">Catalogo</a></li>
                <li><a href="{{ route('who') }}">Chi siamo</a></li>
                <li><a href="{{ route('where') }}">Dove siamo</a></li>
                <li><a href="{{ route('contact') }}">Contattaci</a></li>
             <li><a href="{{ route('show_login') }}" class="highlight" title="Accedi all'area riservata del sito">Accedi</a></li>  
        @endguest
    </ul>
</nav>

