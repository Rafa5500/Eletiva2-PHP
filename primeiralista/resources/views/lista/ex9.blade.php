@extends('layout')

@section('conteudo')

<form method="post" action="/listaex9">
    @csrf

    <div class="mb-3">
        <label for="metros" class="form-label">Metros para converter em centimetros:</label>
        <input type="number" id="metros" name="metros" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>

</form>


@isset($centimetros)
<p> Os metros, convertidos em centímetros é: {{ $centimetros }} cm</p>
@endisset
@endsection