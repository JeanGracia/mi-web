<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">

  <style>
    .active{
      text-decoration: none;
      color: green;
    }

    .error{
      color: red;
      font-size: 12px;
    }
  </style>

  <title>Mi web</title>
</head>

<body>

  <header>
    <?php function activeMenu($url){
      return request()->is($url) ? 'active' : '';
    } ?>
    
    <nav>
      <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
      <a class="{{ activeMenu('saludo/*') }}" href="{{ route('saludo', 'Jean') }}">Saludos</a>
      <a class="{{ activeMenu('contactos') }}" href="{{ route('contactos') }}">Contactos</a>
    </nav>

  </header>
  @yield('contenido')
  <footer>Copyright © {{ date('Y') }}</footer> 
</body>

</html>