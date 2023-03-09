@extends('layout')

@section('contenido')
<h1>Contactos</h1>
<h2>Escríbeme</h2>
<form method="POST" action="contactos">
  
  <p><label for="nombre">
    Nombre
    <input type="text" name="nombre">
    {!! $errors->first('nombre', '<span class=error>:message</span>') !!}
  </label></p>

  <p><label for="email">
    Email
    <input type="text" name="email">
    {!! $errors->first('email', '<span class=error>:message</span>') !!}
  </label></p>

  <p><label for="mensaje">
    Mensaje
    <textarea name="mensaje"></textarea>
    {!! $errors->first('mensaje', '<span class=error>:message</span>') !!}
  </label></p>
  
  <input type="submit" value="Enviar">

</form>
<hr>
@stop 