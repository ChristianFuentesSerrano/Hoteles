<li class="side-menus">
    <a class="nav-link" href="{{ route('home') }}">
        <i class=" fas fa-home"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="{{ route('habitaciones.index') }}">
        <i class=" fas fa-bed"></i><span>Habitaciones</span>
    </a>
    <a class="nav-link" href="{{ route('reservaciones.index') }}">
        <i class=" fas fa-book-open"></i><span>Reservaciones</span>
    </a>
    <a class="nav-link" href="{{ route('check_ins.index') }}">
        <i class=" fas fa-concierge-bell"></i><span>Checks In</span>
    </a>
<li class="side-menus">
    <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg dropdown-toggle">
        <i class=" fas fa-user-cog"></i><span>Administrar</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item nav-link" href="{{ route('usuarios.index') }}">
            <i class=" fas fa-users"></i><span>Usuarios</span>
        </a>
        <a class="dropdown-item nav-link" href="{{ route('roles.index') }}">
            <i class=" fas fa-tags"></i><span>Roles</span>
        </a>
    </div>
</li>
</li>
