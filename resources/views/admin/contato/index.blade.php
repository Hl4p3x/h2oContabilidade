@extends('app')

@section('content')

    <h2 class="text-center">Últimos Contatos</h2>
    <h5 class="text-center text-capitalize">clique no nome para ver detalhes</h5>

    <div class="container">
        <table class="table table-bordered table-responsive">
            <tr>
                <thead>
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ação</th>
                </thead>
            </tr>

            <tbody>
                @foreach($contato as $c)
                    <tr>
                        <td>{{ $c->id }}</td>
                        <td><a href="{{ route('admin.contato.show', [$c->id])}}">{{ $c->nome }}</a></td>
                        <td>{{ $c->email }}</td>
                        <td><a href="{{ route('admin.contato.destroy', [$c->id]) }}"><span class="glyphicon glyphicon-trash"></span></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {!! $contato->render() !!}

@endsection