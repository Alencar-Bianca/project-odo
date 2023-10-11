@extends('components.layout')
@section('title') Editar Tarefa @endsection
@section('button-nav')
    <a href="{{route('home.index')}}" class="btn btn-primary">Voltar</a>
@endsection
@section('styles')
    <link rel="stylesheet" href="/css/create.css">
@endsection

@section('content')
    <div class="container_task">
        <h1>Editar Tarefa {{$task->title}}</h1>
        <form action="{{route('task.update', ['id' => $task->id])}}" method="POST" class="form">
            @csrf
            <input type="hidden" name="id"  value="{{$task->id}}">

            <label for="title_task">Título da Task</label>
            <input type="text" name="title" class="task_input" placeholder="Digite o título da tarefa" id="title_task" value="{{$task->title}}" maxlength="90" required>

            <label for="date_task">Data de Realização</label>
            <input type="datetime-local" name="date" class="task_input"  id="date_task" value="{{$task->due_date}}" required>

            <div>
                <label for="done_task">Tarefa Feita: </label>
                <input type="checkbox" name="done" class="done_task" id="done_task" @if ($task->is_done) checked @endif>
            </div><br>

            <label for="category_task">Categoria</label>
            <select name="category" class="task_input" id="category_task" required>
                <option selected disabled value="">Selecione a categoria</option>
                @forelse ($categories as $category)
                    <option value="{{$category->id}}" @if($category->id == $task->category_id) selected @endif>{{$category->title}}</option>
                @empty
                    <option selected disabled value="">Nenhuma categoria cadastrada</option>
                @endforelse
            </select>

            <label for="description_task">Descrição da Tarefa</label>
            <textarea type="date" name="description" class="task_input textarea"  id="description_task" placeholder="Digite uma descrição para sua tarefa"  required>{{$task->description}}</textarea>

            <div class="button-form">
                <input type="submit" class="btn btn-primary" value="Editar">
            </div>
        </form>
    </div>
@endsection

