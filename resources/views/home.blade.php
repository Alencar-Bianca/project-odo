@extends('components.layout')
@section('title') TodoApp @endsection
@section('button-nav')
    <a href="{{route('task.create')}}" class="btn btn-primary">Criar Tarefa</a>
    <a href="{{route('logout')}}" class="btn btn-primary">Sair</a>
@endsection
@section('content')
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do dia</h2>
            <hr class="line-header">
            <div class="graph_header_data">
                <a href="{{route('home.index', ['date' => $tasks->prev])}}">
                    <img src="/images/icon-prev.png" alt="">
                </a>
                <span>{{$tasks->dateString }}</span>
                <a href="{{route('home.index', ['date' => $tasks->next])}}">
                    <img src="/images/icon-next.png" alt="">
                </a>
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
            <select class="list_header_select" onchange="takFilter(this)">
                <option value="0">Todas as tarefas</option>
                <option value="1">Tarefas Pendentes</option>
                <option value="2">Tarefas Realizadas</option>
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

@section('scripts')
    <script>
        function takFilter(element) {
            showAllTasks();

            if(element.value == 1) {
                document.querySelectorAll('.task_done').forEach(function(e) {
                    e.style.display = 'none';
                });
            } else if(element.value == 2){
                document.querySelectorAll('.task_pending').forEach(function(e) {
                    e.style.display = 'none';
                });
            }
        }

        function showAllTasks() {
            document.querySelectorAll('.task').forEach(function(e) {
                e.style.display = "flex";
            });
        }
    </script>

    <script>
        async function taskDone(el) {
            let done = el.checked;
            let taskId = el.dataset.id;
            let url = "{{route('task.update.isdone')}}";

            let send = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-type': 'application/json',
                    'accept': 'application/json',
                },
                body: JSON.stringify({ done, taskId, _token: '{{csrf_token()}}' })
            });

            result = await send.json();
            if (result.success) {

            } else {
                el.checked = !done
            }
        }
    </script>
@endsection

