<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Crear Usuario</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="/RestauranteRanchoEden/resources/css/main.css">
    </head>
    <body class="crearUsuario">
        <header>
            <div class="bienvenida">
                <h1>Bienvenido</h1>
            </div>
        </header>
        <div>
            <nav>
             
            </nav>
            <div class="contenido">
                <h2>
                    Crear Usuario
                </h2>
                <form action="{{ web('usuario.store') }}" method="POST">
                
                    <input type="text" placeholder="Nombre " name="nombre" >
                    <input type="text" placeholder="Apellido" name="apellido" >
                    <input type="text" placeholder="Telefono" name="telefono" >
                    <input type="text" placeholder="Direccion" name="direcion" >
                    
                    <input type="submit" value="Enviar">
                    
                </form>
            </div>
        </div>
    </body>
</html>
