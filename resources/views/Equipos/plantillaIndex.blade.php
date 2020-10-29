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
            text-align: center;
            margin: auto;
            width:90%;
        }
        #titulo h1{
            padding:2% 0;
            text-align: center;
             margin: 0;
        }
        table tr td:hover{
            background-color:#AEB6BF ;
        }
       body{background-color:#F0F8FF; 
            
       }
       
       nav {
           font-weight: bold;
       }
       
       nav li:hover{
            background-color: #5D6D7E;
           border-bottom: 2px solid white;
         -webkit-transform: scale(1.2);
       }
       
           
           h1{
               font-size: 3em;
               -webkit-text-fill-color: white; 
               -webkit-text-stroke-width: 1px; 
               -webkit-text-stroke-color: black; text-shadow:1px 0 0 #2ECC71; 
           }
           
           #dropdown02,#dropdown01,#dropdown03{ margin-left:20px;}
           table {
              font-size:1.5em;
           }
       .dropdown-item:hover{
            background-color: #B0C4DE;
        }
 
        body,nav,h1,th,footer{
             background-image:url("images/fondo.jpg"); 
        }
        
        nav{
            border: 1px solid white;
        }
        td{
            background-color:WhiteSmoke;
            border:1px solid black;
            padding-bottom: 0px;
        }
        th{
            border: 1px solid white;
            color:white;
        }
        
    </style>
</head>


   
    
    
    




        <body>  
    @yield("cabecera") 
     <nav class="navbar navbar-expand-md navbar-dark bg-dark" style="padding-right:5px;">
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
    <form class="form-inline mt-2 mt-lg-0" style='width:85%;margin-left: 5%;' method="get" action="{{route('Equipos.index')}}">
        <input class="form-control mr-lg-2" style='width:80% ;' name='nombre' type="text" placeholder="BUSQUEDA POR NOMBRE DE EQUIPO" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-lg-0" style='width:15%;' type="submit">Search</button>
    </form>
  </div>
</nav>
   
    
    
    <section id='titulo'>
      @yield("contenido") 
    </section>
        
         
             
     

    
                   
        
       
     
          
       
        </body> 
        
        
        
        @yield("pie")
        <div class="container" style="display: flex; justify-content: center;">{!! $equipos->render()!!}</div>
     <footer class="footer mt-auto py-3 bg-dark" style="text-align: center; color: white; ">     
      <div class="container ">
          <span><em>IN VINO VERITAS, IN AQUA SANITAS. ALL RIGHTS RESERVED.©</em></span>
    </div>                       
     </footer> 
        
        
        
        
</html>