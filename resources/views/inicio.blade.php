@extends('../templates.template')
@section('content')
@auth
<nav class="navbar" style="background-image: url('https://carnavaldepasto.org/wp-content/uploads/2022/12/banner-carnaval-aguardiente-narino-1.jpg'); background-size: cover;">
  <!-- Contenido del navbar -->
  <div class="float-right">
      <a class="navbar-brand float-right text-white" href="">{{ auth()->user()->name }}</a>
      <a class="navbar-brand float-right text-white" href="{{ route('register') }}">Dashboard</a>
  </div>    
</nav>    
@else
<nav class="navbar" style="background-image: url('https://carnavaldepasto.org/wp-content/uploads/2022/12/banner-carnaval-aguardiente-narino-1.jpg'); background-size: cover;">
  <!-- Contenido del navbar -->
  <div class="float-right">
      <a class="navbar-brand float-right text-white" href="{{ route('login') }}">Iniciar Sesión</a>
      <a class="navbar-brand float-right text-white" href="{{ route('register') }}">Registrarse</a>
  </div>    
</nav>  
@endauth
  <div class="container">
    <div class="container-fluid">
        <div class="row">
          <div class="col">
            <div style="background-image: url(https://i.pinimg.com/originals/a3/35/ba/a335ba7ceb831d88ea5d39d0877db210.jpg); background-size: cover; height: 100vh;">
                <a href="{{route('categorias.mostrar','Desfiles')}}" class="text-white">Desfiles</a>
            </div>
          </div>
          <div class="col">
            <div style="background-image: url(https://i.pinimg.com/564x/09/3d/12/093d12956ae99df1008335a3198c63d3.jpg); background-size: cover; height: 100vh;">
                <a href="{{route('categorias.mostrar','Tablados')}}" class="text-white">Tablados</a>
            </div>
          </div>
          <div class="col">
            <div style="background-image: url(https://i.pinimg.com/originals/9b/c7/35/9bc735370e61c2d5cf36757ff15a838a.jpg); background-size: cover; height: 100vh;">
                <a href="{{route('categorias.mostrar','Gastronomia')}}" class="text-white">Gastronomia</a>
            </div>
          </div>
        </div>
      </div>
  </div>
@endsection
