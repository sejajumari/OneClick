<nav class="navbar navbar-expand-lg navbar-light border-bottom">
	<div class="logo">
		<div class="site-logo">
		  <a href="{{ url('/') }}">Oneclick &nbsp; <i class="fa fa-dashboard"></i> </a>
		</div>
	  </div>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item ">
			<a class="nav-link" href="{{url('/admin/home')}}"> <strong>Inicio</strong> </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.citas.index')}}">Citas</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.instructores.index')}}">Instructores</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.aprendices.index')}}">Aprendices</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.actividad.index')}}">Actividad</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.seguimientos.index')}}">Seguimiento</a>
			</li>
            <li class="nav-item">
				<a class="nav-link" href="{{route('admin.asistencia.index')}}">Asistencia</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{route('admin.programas.index')}}">Programas</a>
			</li>
			
			<li class="nav-item dropdown">
				<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
				<strong>{{ Auth::user()->name }}</strong>	 &nbsp; <strong>{{ Auth::user()->rol }}</strong> <span class="caret"></span>
				</a>

				<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="{{ route('logout') }}"
					   onclick="event.preventDefault();
									 document.getElementById('logout-form').submit();">
						{{ __('Salir') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
			
		</ul>
	</div>
</nav>
