{{-- resources/views/categorias/index.blade.php --}}
@extends('layouts.app')

@section('title', 'Lista de Categorias')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Categorias</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('categorias.create') }}" class="btn btn-primary mb-3">
        <i class="bi bi-plus-circle"></i> Nova Categoria
    </a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr>
                    <td>{{ $categoria->id }}</td>
                    <td>{{ $categoria->nome }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
