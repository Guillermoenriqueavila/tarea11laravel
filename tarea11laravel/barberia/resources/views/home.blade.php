@extends('layouts.app')

@section('title', 'Inicio - Barbería')

@section('content')
    
    @include('layouts.navbar')

    <div id="texto-descripcion">
        <h2 class="h2">Una experiencia unica</h2>
        <p class="textoP">
        El proyecto se trata de crear un sitio web para una barbería que funcione de manera similar a Uber, donde los clientes puedan buscar y reservar citas con barberos que ofrecen servicios a domicilio. Los clientes podrán registrarse, buscar barberos cercanos, ver su información y calificaciones, y reservar citas en línea. La plataforma también incluirá un sistema de calificaciones y pagos en línea. El objetivo es proporcionar una forma conveniente para que los clientes accedan a servicios de barbería de calidad en su hogar, mientras que los barberos pueden ampliar su base de clientes y gestionar sus citas de manera eficiente.
        </p>
    </div>

    <br/>
    <br/>
    <h2 class="h2">Categorias</h2>

    <div class="img-container">
        <div>
            <p class="texto-categorias">Cortes de cabello</p>
            <a href="{{ route('cabello') }}">
                <img src="https://i.pinimg.com/564x/9c/25/9c/9c259c396773145a59ae2e87d3bb51c3.jpg">
            </a>
        </div>
        <div>
            <p class="texto-categorias">Corte de barba</p>
            <a href="{{ route('barba') }}">
                <img src="https://img.maspormas.com/2017/06/shutterstock_364870139.jpg">
            </a>
            
        </div>
        <div>
            <p class="texto-categorias">Perfilado de cejas</p>
            <a href="{{ route('cejas') }}">
                <img src="https://img77.uenicdn.com/image/upload/v1618604816/business/f4502534d0614697a2c10ad230179068.jpg">
            </a>
            
        </div>
    </div>
@endsection
