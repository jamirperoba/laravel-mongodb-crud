@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <div class="container">
        <h2 class="text-center">CRUD de carros - criar</h2><br/>
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
@endsection
