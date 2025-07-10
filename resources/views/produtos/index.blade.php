{{-- resources/views/produtos/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Lista de Produtos')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Nossos Produtos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('produtos.create') }}" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Novo Produto
    </a>

    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Preço</th>
                <th>Categoria</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produtos as $produto)
            <tr>
                <td>{{ $produto->id }}</td>
                <td>{{ $produto->nome }}</td>
                <td>R$ {{ number_format($produto->preco, 2, ',', '.') }}</td>
                <td>{{ $produto->categoria->nome }}</td>
                <td>
                    <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-warning">
                        <i class="bi bi-pencil-square"></i> Editar
                    </a>

                    <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Tem certeza que deseja excluir este produto?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">
                            <i class="bi bi-trash"></i> Excluir
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Nenhum produto cadastrado.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
