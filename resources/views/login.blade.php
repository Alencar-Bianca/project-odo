@extends('components.layout')
@section('title') Login @endsection
@section('button-nav')
    <a href="{{route('register')}}" class="btn btn-primary">Cadastrar</a>
@endsection
@section('styles')
    <link rel="stylesheet" href="/css/create.css">
@endsection



@section('content')
    <div class="container_task">
        <h1>Login</h1>
        <form action="{{route('login.user')}}" method="POST" class="form">
            @csrf
            <label for="email">Email</label>
            <input type="email" name="email" class="task_input" placeholder="Digite o seu email" id="email" required>

            <label for="pass">Senha</label>
            <input type="password" name="password" class="task_input" placeholder="Digite a sua senha" id="pass" required>

            <div class="button-form">
                <input type="submit" class="btn btn-primary" value="Entrar">
            </div>
        </form>
    </div>
@endsection



