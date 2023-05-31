@extends('../templates.template')
@section('content')
<nav class="navbar" style="background-image: url('https://carnavaldepasto.org/wp-content/uploads/2022/12/banner-carnaval-aguardiente-narino-1.jpg'); background-size: cover;">
    <!-- Contenido del navbar -->
    <div class="float-right">
        <a class="navbar-brand float-right text-white" href="{{ route('login') }}">Iniciar Sesión</a>
        <a class="navbar-brand float-right text-white" href="{{ route('register') }}">Registrarse</a>
    </div>    
</nav>
    @foreach ($propuestas as $propuesta)
        @if ($propuesta->categoria->idCategoria == 3)
        <div style="background-image: url({{ asset('../public/img/bannerTablados.png')}}); background-size: cover; height: 75vh;"><br>
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-center">
                    <div class="container ">
                        <img src="{{ asset($propuesta->imagenovideo) }}" class="mx-auto d-block" alt="">

                        <div class="card justify-content-center"style="display: inline-block;">
                            <div class="card-body text-center" style="display: inline-block;">
                                <h5 class="card-title">{{$propuesta->nombrePropuesta}}</h5>
                                <p class="card-text">{{$propuesta->descripcion}}</p><br>
                                <h2>Calificar propuesta</h2>
                                <form action="{{route('propuestas.calificar',$propuesta->idPropuesta)}}" method="POST"></form>
                                <div class="btn-group" role="group" aria-label="Botones con Estrellas">
                                    <button name="calificacion" type="button" class="btn btn-outline-warning"><i class="fas fa-star"></i></button>
                                    <button name="calificacion" type="button" class="btn btn-outline-warning"><i class="fas fa-star"></i></button>
                                    <button name="calificacion" type="button" class="btn btn-outline-warning"><i class="fas fa-star"></i></button>
                                    <button name="calificacion" type="button" class="btn btn-outline-warning"><i class="fas fa-star"></i></button>
                                    <button name="calificacion" type="button" class="btn btn-outline-warning"><i class="fas fa-star"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                </div>
        </div><br>
        @endif
    @endforeach
{{ $propuestas->links() }}
@endsection