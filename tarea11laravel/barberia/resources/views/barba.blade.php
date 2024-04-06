@extends('layouts.app')

@section('title', 'Inicio - Barbería')

@section('content')
    
    @include('layouts.navbar')

    <div class="img-container">
        <div>
            <p class="texto-categorias">Candado completo</p>
            
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqXezszKLRzt_IU8cnhEMf3x94z1xJhpVmv4wFla8C2HMKxI2BN3_xcQR3G23wfLiplCo&usqp=CAU">
            
        </div>
        <div>
            <p class="texto-categorias">Candado completo con linea normal</p>
            
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2GtiNLI1PPj6YQjz49pB9bT6CMZK81fTRow&s">
            
            
        </div>
        <div>
            <p class="texto-categorias">Candado completo dos lineas</p>
           
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCTx58VQflXDPf33Ci94Y1nNcBqOn3IodHWg&s">
            
            
        </div>
    </div>
   

    <div class="img-container">
        <div>
            <p class="texto-categorias">Candado completo linea moderna</p>
            
                <img src="https://i.pinimg.com/originals/b4/e3/0d/b4e30d86309daf5fb7b4971777884887.jpg">
            
        </div>
        <div>
            <p class="texto-categorias">Barba completa y bigote y dos lineas</p>
            
                <img src="https://i.pinimg.com/originals/5c/0a/b2/5c0ab25c1d41fca8bd073d35e43aee33.jpg">
            
            
        </div>
        <div>
            <p class="texto-categorias">Obalado sencillo y dos lineas</p>
           
                <img src="https://i.pinimg.com/736x/90/d4/97/90d4977c5450e62f00904119419e494a.jpg">
            
            
        </div>
    </div>
@endsection