@extends('layout')

@section('conteudo')

<form method="post" action="listaex5">
    @csrf
    <div class="mb-3">
        <label for="largura" class="form-label">Digite o raio do círculo</label>
        <input type="number" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($area)
        <p>A área do círculo é: {{ $area }}</p>
    @endisset

@endsection