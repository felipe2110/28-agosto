<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
<div class="container-sm">
 <a type="button" class="btn btn-primary mt-3" href="/create"> Crear un nuevo Producto</a>

 <table class="table table-striped mt-3">
     <tr>
                                <th>NOMBRES</th>
                                <td>{{$products->id}}</td>
                            </tr>
                            <tr>
                                <th>APELLIDOS</th>
                                <td>{{$products->name}}</td>
                            </tr>
                            <tr>
                                <th>CORREO</th>
                                <td>{{$products->description}}</td>
                            </tr>
</table>
</div>
</body>
</html>