@extends('components.layout')
@section('title') TodoApp @endsection
@section('button-nav') <a href="{{route('task.create')}}" class="btn btn-primary">Criar Tarefa</a> @endsection
@section('content')
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <hr class="line-header">
            <div class="graph_header_data">
                <img src="/images/icon-prev.png" alt="">
                <span>11 de Jul</span>
                <img src="/images/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph_header_subtitle">
            <p>Tarefas: <span>3/6</span></p>
        </div>
        <div class="graph_placeholder">

        </div>
        <div class="graph_info">
            <img src="/images/icon-info.png" alt="">
            <p class="graph_text_task">Restam 4 tarefas para serem realizadas</p>
        </div>
    </section>
    <section class="list">
        <div class="list_header">
            <select class="list_header_select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>

        <div class="task_list">
            @forelse ($tasks as $task)
                @include('components.task', ['task' => $task])
                @empty
                    <li>Sem tarefas no momento</li>
            @endforelse
        </div>
    </section>
@endsection

