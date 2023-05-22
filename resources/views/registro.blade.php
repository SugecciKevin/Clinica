<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form{
            border-radius: 10%;
            position: absolute;
            top: 50%;
            left: 50%;
            height: 300px;
            width: 500px;
            transform: translate(-50%,-50%);
            background-color: white;
        }
        label{
            font-family: Arial, Helvetica, sans-serif
        }
        #imagen{

            width: 80px;
            position: relative;
            left: 220px;
            top: -25px;


        }
        img{
            height: 50px;
            border-radius: 10%;
            background-color: rgb(231, 231, 231);
            border: 1px;
            border-style: solid;
            border-color: black;

        }
        #usuario{
            left: 20%;
            position: absolute;
        }
        input{
            border-top: 0px;
            border-left: 0px;
            border-right: 0px;
            border-bottom: 0px;
            width: 300px;
            height: 30px;
            background-color: rgb(218, 218, 218);
            border-radius: 10%;


        }
        body{
            background-image: url('fondo.jpg') ;
            background-size: cover;
        }
    </style>
</head>
<body>
    <form name="registro">
        <nav id="imagen">         <img src="candado.png" alt="candadp">
        </nav>
        <nav id="usuario">
            <label for="usuario" >Usuario</label>
            <br>
            <input type="text" id="contraseña" placeholder="Ingresa tu id" >
            <br>
            <br>
            <label for="usuario" >Contraseña</label>
            <br>
            <input type="text" id="contraseña" placeholder="Ingresa tu contraseña" >
            <br>

            <a class="nav-link" href="{{asset('/inicio')}}">iniciar</a>
        </nav>

    </form>
</body>
</html>
