<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RENTAS GMP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .form-control{
         font-size:1.3em;
        }
        #titulo{
            font-family: Rockwell;
            margin: auto;
            width:60%;
        }
        #titulo h1{
            margin: 20px 0px 38px 0;
            text-align: center;
         -webkit-text-fill-color: white; 
               -webkit-text-stroke-width: 1px; 
               -webkit-text-stroke-color: black; text-shadow:2px 0 0 #8E44AD; 
        }
        table tr:hover{
            background-color:#AEB6BF ;
        }
      
        nav {
           font-weight: bold;
       }
       
       nav li:hover{
            
            border-bottom: 2px solid white; 
            -webkit-transform: scale(1.2); 
       }
           h1:hover{
               -webkit-transform: scale(1.2);
               text-decoration: underline;
           }  
           
           #dropdown02,#dropdown01,#dropdown03{ margin-left:20px;}
           
          .dropdown-item:hover{
            background-color: #B0C4DE;
          }
          
  
            
             
    </style>
</head>


   
    
    
    




        <body style='padding-bottom:50px;'>  
    @yield("cabecera") 
    <nav id="barra" class="navbar navbar-expand-md navbar-dark bg-dark" style="padding-right:5px;">
  <a class="navbar-brand" href="#" STYLE='border:3px solid white; padding: 5px;'>E PLURIBUS UNUM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav  mr-auto ">
        
        
   <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CLIENTES</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="{{route('Clientes.index')}}">LISTA DE CLIENTES</a>
          <a class="dropdown-item" href="{{route('Clientes.create')}}">AGREGAR CLIENTE</a>      
        </div>
       </li>     
        
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EQUIPOS</a>
        <div class="dropdown-menu" aria-labelledby="dropdown03">
          <a class="dropdown-item" href="{{route('Equipos.index')}}">LISTA DE EQUIPOS</a>
          <a class="dropdown-item" href="{{route('Equipos.create')}}">AGREGAR EQUIPO</a>      
        </div>
       </li>
 
       
       <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PEDIDOS</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">
          <a class="dropdown-item" href="{{route('Pedidos.index')}}">LISTA DE PEDIDOS</a>
          <a class="dropdown-item" href="{{route('Pedidos.create')}}">AGREGAR PEDIDO</a>      
        </div>
       </li>  
      
     
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">COTIZAR</a>
        <div class="dropdown-menu" aria-labelledby="dropdown02">
          <a class="dropdown-item" href="{{route('Cotizaciones.index')}}">LISTA DE COTIZACIONES</a>
          <a class="dropdown-item" href="{{route('Cotizaciones.create')}}">GENERAR COTIZACION</a>
        </div>
       </li>  
      
      
      
    </ul>
    <form class="form-inline mt-2 mt-lg-0" style="width:80%; margin-left: 20px;">
        <input class="form-control mr-lg-2" style="width:80%;" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-lg-0" style="width:15%;" type="submit">Search</button>
    </form>
  </div>
</nav>
   
    
    
    <div id='titulo'>
      @yield("contenido") 
    </div>
        
         
             
     

    
                   
    
       
        </body > 
            
       @yield("pie")
      <div id='barra' class="footer mt-auto fixed-bottom py-3 bg-dark" style="text-align: center; color: white; width: 100%;">    
         
             
       <span><em>IN VINO VERITAS, IN AQUA SANITAS. ALL RIGHTS RESERVED.©</em></span>                     
    
      </div> 
         
        
   
        
</html>
