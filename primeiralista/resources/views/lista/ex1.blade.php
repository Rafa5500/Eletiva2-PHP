@extends('layout')

@section('conteudo')

<form method="post" action="listaex1">
    @csrf
    <div class="mb-3">
        <label for="nota1" class="form-label">Informe a Primeira nota</label>
        <input type="number" id="nota1" name="nota1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota2" class="form-label">Informe a Segunda nota</label>
        <input type="text" id="nota2" name="nota2" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota3" class="form-label">Informe a terceira nota</label>
        <input type="text" id="nota3" name="nota3" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($media)
        <p>Media: {{$media}}</p>
    @endisset

@endsection