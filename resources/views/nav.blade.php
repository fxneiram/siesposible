<li class="{{ Request::is('/') ? 'active' : '' }}">
    <a href="{{ url('/') }}"><i class="fa fa-home"></i><span>Resumen</span></a>
</li>
<li class="treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Gestión de usuario</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('users*') ? 'active' : '' }}">
            <a href="{!! route('users.index') !!}"><i class="fa fa-users"></i><span>Usuarios</span></a>
        </li>
        <li class="{{ Request::is('roles*') ? 'active' : '' }}">
            <a href="{!! route('roles.index') !!}"><i class="fa fa-user-secret"></i><span>Roles</span></a>
        </li>
        <li class="{{ Request::is('permissions*') ? 'active' : '' }}">
            <a href="{!! route('permissions.index') !!}"><i class="fa fa-check"></i><span>Permisos</span></a>
        </li>
    </ul>
</li>

<li class="{{ Request::is('barrios*') ? 'active' : '' }}">
    <a href="{!! route('barrios.index') !!}"><i class="fa fa-home"></i><span>Barrios</span></a>
</li>
<li class="{{ Request::is('votantes*') ? 'active' : '' }}">
    <a href="{!! route('votantes.index') !!}"><i class="fa fa-users"></i><span>Votantes</span></a>
</li>
<li class="{{ Request::is('liders*') ? 'active' : '' }}">
    <a href="{!! route('liders.index') !!}"><i class="fa fa-user-secret"></i><span>Lideres</span></a>
</li><li class="{{ Request::is('eventos*') ? 'active' : '' }}">
    <a href="{!! route('eventos.index') !!}"><i class="fa fa-home"></i><span>Eventos</span></a>
</li>
