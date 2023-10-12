@extends('components.layout')
@section('title') Cadastro @endsection
@section('button-nav')
    <a href="{{route('login')}}" class="btn btn-primary">Login</a>
@endsection


@section('styles')
    <link rel="stylesheet" href="/css/create.css">
@endsection



@section('content')
    <div class="container_task">
        <h1>Cadastrar</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{route('register.user')}}" method="POST" class="form">
            @csrf
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="task_input" placeholder="Digite o seu nome" id="nome" required>

            <label for="email">Email</label>
            <input type="email" name="email" class="task_input" placeholder="Digite o seu email" id="email" required>

            <label for="pass">Senha</label>
            <input type="password" name="password" class="task_input" placeholder="Digite a sua senha" id="pass" required>

            <label for="pass_confirm">Confirmar senha</label>
            <input type="password" name="password_confirmation" class="task_input" placeholder="Digite a sua senha" id="pass_confirm" required>

            <div class="button-form">
                <input type="submit" class="btn btn-primary" value="Cadastrar">
            </div>
        </form>
    </div>
@endsection


