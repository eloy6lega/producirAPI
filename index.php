<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producir APIs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        body{
            background-color: #6da56d;
            color: #034741;
        }
        .mmgvo{
            margin: 0 auto;
            margin-top: 50px;
            text-align: center;
            border: 2px solid black;
            border-radius: 50px;
            width: 500px;
            height: auto;
            background-color: #b4e089;
            color: #034741;
            font-size: 50px;
        }
        .mmgvo2{
            margin: 0 auto;
            margin-top: 50px;
            text-align: center;
            border: 2px solid black;
            border-radius: 50px;
            width: 300px;
            background-color: #b4e089;
            color: #034741;
        }
        .formus{
            margin: 0 auto;
            text-align: center;
            margin-top: 20px;
            padding: 20px;
            width: 500px;
        }
        .formu1 .formu2 {
            margin: 0 auto;
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            padding: 20px; 
        }
    </style>
</head>
<body>
    <div class="mmgvo"><h1>Producir APIs</h1></div>
    <h3 class="mmgvo2">Petición GETs</h3>
    <div class="formus">
        <div class="formu1">
            <form action="posts.php" method="get">
                <input type="submit" value="peticion GET - ver todos" class="btn btn-primary">
            </form>
        </div>
        <div class="formu2">
            <form action="posts.php" method="get">
                <p>ID a Buscar: <input type="number" name="id" class="form-control" required></p>
                <input type="submit" value="peticion GET - by ID" class="btn btn-primary">
            </form>
        </div>
    </div>
    <h3 class="mmgvo2">Petición POSTs</h3>
    <div class="formus">
        <div class="formu1">
            <form action="posts.php" method="post">
                <input type="text" class="form-control" name="title" placeholder="Título" required>
                <select class="form-select" name="status" aria-label="Default select example">
                <option selected disabled required>Seleccione una opción</option>
                <option value="1">published</option>
                <option value="2">draft</option>
                </select>
                <input type="text" class="form-control" name="content" placeholder="Contenido" required>
                <input type="number" class="form-control" name="user_id" placeholder="Id del User" required>
                <input type="submit" value="enviar POST" class="btn btn-primary">
            </form>
        </div>
    </div>
    <h3 class="mmgvo2">POST DE CLIENTECILLOS</h3>
    <div class="formus">
        <div class="formu1">
            <form action="posts.php" method="post">
                <input type="text" class="form-control" name="nombre_cliente" placeholder="Nombre" required>
                <input type="date" class="form-control" name="fecha_alta" placeholder="Fecha Alta" required>
                <input type="text" class="form-control" name="foto_cliente" placeholder="Url de la foto" required>
                <input type="submit" value="Enviar Cliente" class="btn btn-primary">
            </form>
        </div>
    </div>
    <h3 class="mmgvo2">GETS DE CLIENTECILLOS</h3>
    <div class="formus">
        <div class="formu1">
            <form action="posts.php" method="get">
                <input type="submit" value="GET de todos" class="btn btn-primary">
            </form>
        </div>
        <div class="formu2">
            <form action="posts.php" method="get">
                <p>ID a Buscar: <input type="number" name="id" class="form-control" required></p>
                <input type="submit" value="GET por ID" class="btn btn-primary">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>