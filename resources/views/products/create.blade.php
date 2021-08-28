<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Crear producto</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('products.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="form-group">
                        <label for="">Descripcion</label>
                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="">Precio</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="form-group">
                        <label for="">Imagen</label>
                        <input class="form-control" type="file" id="formFile" name="image">
                    </div>
                    <div class="form-group">
                        <label for="">Compañia</label>
                        <input type="text" class="form-control" name="companie_id">
                    </div>
                    <hr>
                    <div class="form-group">
                        <button class="btn btn-primary">Crear nuevo producto</button>
                        <a href="{{url('products')}}" class="btn btn-dark">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>