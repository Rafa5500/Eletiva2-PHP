@extends('layout')

@section('conteudo')

<form method="post" action="listaex6">
    @csrf
    <div class="mb-3">
        <label for="base" class="form-label">Digite a largura do retângulo</label>
        <input type="number" id="base" name="base" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Digite a altura do retângulo</label>
        <input type="number" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($perimetro)
        <p>O perímetro do retângulo é: {{ $perimetro }}</p>
    @endisset

@endsection