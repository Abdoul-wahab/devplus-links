<nav class="container navbar fixed-top navbar-expand-lg navbar-dark bg-info">

    <div class="collapse navbar-collapse" id="main_nav">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item @if(Route::is('home')) active @endif"> <a class="nav-link" href="{{ route('home')}}">Home </a> </li>
            <li class="nav-item @if(Route::is('links.create')) active @endif"><a class="nav-link" href="{{ route('links.create')}}"> New Link </a></li>
        </ul>
    </div>
</nav>
