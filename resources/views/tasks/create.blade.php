@extends('components.layout')
@section('title') Cadastrar Tarefa @endsection
@section('button-nav') <a href="{{route('home.index')}}" class="btn btn-primary">Voltar</a> @endsection

@section('styles')
    <link rel="stylesheet" href="/css/create.css">
@endsection

@section('content')
    <div class="container_task">
        <h1>Criar Tarefa</h1>
        <form action="{{route('task.store')}}" method="post" class="form">
            <label for="title_task">Título da Task</label>
            <input type="text" name="title" class="task_input" placeholder="Digite o título da tarefa" id="title_task">

            <label for="date_task">Data de Realização</label>
            <input type="date" name="date" class="task_input"  id="date_task">

            <label for="category_task">Categoria</label>
            <select name="date" class="task_input" id="category_task">
                <option selected disabled value="">Selecione a categoria</option>
            </select>

            <label for="description_task">Descrição da Tarefa</label>
            <textarea type="date" name="date" class="task_input textarea"  id="description_task" placeholder="Digite uma descrição para sua tarefa"></textarea>

            <div class="button-form">
                <input type="submit" class="btn btn-primary" value="Criar Tarefa">
            </div>
        </form>
    </div>
@endsection

