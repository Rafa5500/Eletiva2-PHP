@extends('layout')

@section('conteudo')

<form method="post" action="listaex2">
    @csrf
    <div class="mb-3">
        <label for="temperatura1" class="form-label">Digite a temperatura em Celsius</label>
        <input type="number" id="temperatura1" name="temperatura1" class="form-control" required="">
    </div>




    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($calculo)
        <p>Essa temperatura em Fahrenheit é: {{ $calculo }}</p>
    @endisset

@endsection