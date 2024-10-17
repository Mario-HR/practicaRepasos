<!DOCTYPE html>
<html lang="">
  <head>
    <meta charset="utf-8">
    @vite(['resources/js/app.js'])
    <title>Inicio</title>
    <style>
      body, html {
        height: 100%;
      }
      .full-height {
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <div class="d-flex flex-column justify-content-center align-items-center text-center full-height">
      <img src="{{asset('img/upqlogo.png')}}" class="mb-4" alt="Logo">
      <h1 class="display-1">Práctica de repasos</h1>
      <p>Alumno: Hernandez Rodarte Mario Alberto</p>
      <p>Escuela: Universidad Politécnica de Querétaro</p>
      <p>Grupo: S194</p>
      <p> 7o Cuatrimestre</p>
      <p>Asignatura: Programación Web</p>
      <p>Profesor: Ivan Isay Guerra Lopez</p>
      <a href="{{route('rutaRepaso1')}}" class="btn btn-primary">Repaso 1</a>
    </div>
  </body>
</html>
