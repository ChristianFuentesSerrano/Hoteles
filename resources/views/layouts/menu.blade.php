<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-home"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="/">
        <i class=" fas fa-bed"></i><span>Habitaciones</span>
    </a>
    <a class="nav-link" href="/">
        <i class=" fas fa-book-open"></i><span>Reservaciones</span>
    </a>
    <a class="nav-link" href="/">
        <i class=" fas fa-concierge-bell"></i><span>Checks In</span>
    </a>
    <a class="nav-link" href="{{ route('usuarios.index') }}">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
</li>
