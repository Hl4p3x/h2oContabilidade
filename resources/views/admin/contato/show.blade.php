@extends('app')

@section('content')

    <h3 class="text-center text-capitalize">Contato número: {{ $contato->id }}</h3>

    <div class="container">
        <div class="form-group text-center">
            <p>Nome: {{ $contato->nome }}</p>
            <p>Email:{{ $contato->email }}</p>
            <p>Telefone:{{ $contato->telefone }}</p>
            <p>Assunto:{{ $contato->assunto }}</p>
            <p>Mensagem: {{ $contato->mensagem }}</p>
        </div>
    </div>
@endsection