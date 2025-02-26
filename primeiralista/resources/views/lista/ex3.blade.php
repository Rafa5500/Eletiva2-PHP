@extends('layout')

@section('conteudo')

<form method="post" action="listaex3">
    @csrf
    <div class="mb-3">
        <label for="fahrenheit" class="form-label">Digite a temperatura em Fahrenheit</label>
        <input type="number" id="fahrenheit" name="fahrenheit" class="form-control" required="">
    </div>




    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($calculo)
        <p>Essa temperatura em Celsius é: {{ $calculo }}</p>
    @endisset

@endsection