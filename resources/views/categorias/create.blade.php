{{-- resources/views/categorias/create.blade.php --}}
@extends('layouts.app')
@section('title', 'Nova Categoria')

@section('content')
<div class="container mt-4">
    <h2>Nova Categoria</h2>
    <form action="{{ route('categorias.store') }}" method="POST">
        @csrf
        <input class="form-control mb-2" name="nome" placeholder="Nome da categoria" required>

        <button class="btn btn-primary">Salvar</button>

        @if ($errors->any())
            <div class="alert alert-danger mt-2">
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
