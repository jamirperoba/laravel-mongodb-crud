<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br />
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br />
    @endif
    <div class="row">
        <div class="col-md-12 text-right">
            <a href="{{route('car.create')}}" class="btn btn-info">Adicionar novo carro</a>
        </div>
    </div>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Fabricante</th>
            <th>Modelo</th>
            <th>Valor</th>
            <th colspan="2">Ações</th>
        </tr>
        </thead>
        <tbody>

        @foreach($cars as $car)
            <tr>
                <td>{{$car->id}}</td>
                <td>{{$car->carcompany}}</td>
                <td>{{$car->model}}</td>
                <td>{{$car->price}}</td>
                <td><a href="{{action('CarController@edit', $car->id)}}" class="btn btn-warning">Editar</a></td>
                <td>
                    <form action="{{action('CarController@destroy', $car->id)}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
