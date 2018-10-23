<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel MongoDB CRUD</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2 class="text-center">Editar carro</h2><br/>
    <div class="container">
    </div>
    <form method="PUT" action="{{route('car.update',$car->id)}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Carcompany">Fabricante:</label>
                <input type="text" class="form-control" name="carcompany" value="{{$car->carcompany}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Model">Modelo:</label>
                <input type="text" class="form-control" name="model" value="{{$car->model}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label for="Price">Valor:</label>
                <input type="text" class="form-control" name="price" value="{{$car->price}}">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4 text-right">
                <a href="{{route('car.index')}}" class="btn btn-info">Voltar</a>
                <button type="submit" class="btn btn-success">Atualizar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
