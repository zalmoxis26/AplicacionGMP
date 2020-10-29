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
        #titulo{         
            font-family: Rockwell;
            margin: auto;
            width: 95%;
        }
        #titulo h1{
          font-size: 3em; 
          text-align: center;
        }
       
       body{background-color:#F0F8FF; 
       }
       
       nav {
           font-weight: bold;
       }
       
       #dropdown02:hover,#dropdown01:hover,#dropdown03:hover{
           border-bottom: 2px solid white;
         -webkit-transform: scale(1.2);
       }
        
           
           h1{
               -webkit-text-fill-color: white; 
               -webkit-text-stroke-width: 1px; 
               -webkit-text-stroke-color: black; text-shadow:2px 0 0 red; 
           }
           
           #dropdown02,#dropdown01,#dropdown03{ margin-left:20px;}
           table {
              font-size:1.3em;
           }
       .dropdown-item:hover{
            background-color: #B0C4DE;
        }
        
        body,footer,#barra{
             background-image:url("images/fondo3.jpg"); 
            
             
        }
        td{
            background-color:whitesmoke;
            border:1px solid black;
            padding-bottom: 0px;
            text-align: CENTER;
            font-size:.8em;
        }
        th{
            border: 1px solid white;
            -webkit-text-fill-color: white; 
               -webkit-text-stroke-width: 1px; 
               -webkit-text-stroke-color: black; text-shadow:2px 0 0 black;
            text-align: CENTER;
        }
        
         td:hover{
            background-color:#AEB6BF;
            -webkit-transform: scale(1.15);
        }
    </style>
</head>


   
    
    
    




        <body>  
    @yield("cabecera") 
     <nav class="navbar navbar-expand-md navbar-dark bg-dark" id='barra' style="padding-right:5px;">
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
    <form class="form-inline mt-2 mt-lg-0" method="get" style='margin-left:5%;' action="{{route('Pedidos.index')}}">
        <input class="form-control mr-lg-2" style='width:30%;' name='cliente_id' type="text" placeholder="CLIENTE" aria-label="Search">
        <input class="form-control mr-lg-1"  style='width:15%;' name='rem' type="text" placeholder="REMISION" aria-label="Search">
        <input class="form-control mr-lg-1" style='width:15%;' name='dev' placeholder="EN OBRA" type="text"  aria-label="Search">
        <input class="form-control mr-lg-1" style='width:15%;' name='pagado' type="text" placeholder=' SI/NO' title="SI/NO/PARCIAL" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-lg-0" style='width:20%;' type="submit">Search</button>
    </form>
  </div>
</nav>
   
    
    
    <section id='titulo'>
      @yield("contenido") 
    <section>
        
         
             
     

    
                   
        
       
     
          
       
        </body> 
        
        
        
        @yield("pie")
        <div class="container" style="display: flex; justify-content: center;">{!! $pedidos->appends(["cliente_id" => $nom, "rem" => $rem, "dev" => $dev, "pagado" => $pago])!!}</div>
     <footer class="footer mt-auto py-3 bg-dark" style="text-align: center; color: white;">     
      <div class="container ">
          <span><em>IN VINO VERITAS, IN AQUA SANITAS. ALL RIGHTS RESERVED.©</em></span>
    </div>                       
     </footer> 
        
        
        
        
</html>
