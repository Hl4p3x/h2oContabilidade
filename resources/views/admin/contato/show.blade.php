@extends('app')

@section('content')

    <h3 class="text-center text-capitalize">Contato número: {{ $contato->id }}</h3>

    <div class="container">
        <table class="table table-responsive table-bordered">
            <tr>
                <thead>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Telefone</th>
                    <th>Assunto</th>
                    <th>Mensagem</th>
                </thead>
            </tr>

            <tbody>
                <tr>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->email }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>{{ $contato->assunto }}</td>
                    <td>{{ $contato->mensagem }}</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection