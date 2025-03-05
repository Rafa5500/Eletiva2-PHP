
@extends('layout')

@section('conteudo')

    
    <form method="post" action="/ex2_resposta">

    @csrf           
                        <div class="mb-3">
                            <label for="A" class="form-label">Informe o primeiro valor:</label>
                            <input type="number" id="A" name="A" class="form-control" required="">
                        </div>
                    
                        <div class="mb-3">
                            <label for="B" class="form-label">Informe o segundo valor:</label>
                            <input type="number" id="B" name="B" class="form-control" required="">
                        </div>
                    
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            
    @isset($mensagem)
        <p>Resultado: {{ $mensagem }}</p>
    @endisset
@endsection
