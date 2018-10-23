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
    <h2 class="text-center">Laravel MongoDB CRUD</h2> <br>
    <div class="container">
    </div>
    <form method="post" action="{{route('car.store')}}">
        @csrf
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4 @if($errors->has('carcompany')) has-error @endif">
                <label for="Carcompany">Fabricante:</label>
                <input type="text" class="form-control" name="carcompany" value="{{old('carcompany')}}">
                @if($errors->has('carcompany')) <p class="help-block">{{ $errors->first('carcompany') }}</p> @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4  @if($errors->has('model')) has-error @endif">
                <label for="Model">Modelo:</label>
                <input type="text" class="form-control" name="model" value="{{old('model')}}">
                @if($errors->has('model')) <p class="help-block">{{ $errors->first('model') }}</p> @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4 @if($errors->has('price')) has-error @endif">
                <label for="Price">Valor:</label>
                <input type="text" class="form-control" name="price" value="{{old('price')}}">
                @if($errors->has('price')) <p class="help-block">{{ $errors->first('price') }}</p> @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4 text-right">
                <a href="{{  route('car.index') }}" class="btn btn-info">Voltar</a>
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
