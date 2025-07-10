@extends('layouts.app')
@section('title', 'Novo Produto')

@section('content')
<div class="container mt-4">
    <h2>Novo Produto</h2>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <input class="form-control mb-2" name="nome" placeholder="Nome do produto">
        <input class="form-control mb-2" name="preco" type="number" step="0.01" placeholder="Preço">
        <select class="form-control mb-2" name="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
            @endforeach
        </select>
        <button class="btn btn-success">Salvar</button>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    </div>
@endif

    </form>
</div>
@endsection
