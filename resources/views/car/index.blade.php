@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <div class="container">
        <br/>
        <h2 class="text-center">CRUD de carros</h2><br/>
        @if (\Session::has('success'))
            <div class="row">
                <div class="offset-4 col-md-4">
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div><br/>
                </div>
            </div>
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
@endsection
