<div class="task">
    <div class="task_title">
        <input type="checkbox" name="done" class="task_checkbox" @if($task->is_done) checked @endif onchange="taskDone(this)" data-id="{{$task->id}}">
        <span>{{$task->title}}</span>
    </div>
    <div class="priority">
        <div class="circule"></div>
        <span>{{$task->category->title}}</span>
    </div>
    <div class="actions">
        <a href="{{ route('task.edit', ['id' => $task->id]) }}" class="button button-edit"><img src="/images/icon-edit.png" alt=""></a>
        <a href="{{ route('task.delete', ['id' => $task->id]) }}" class="button button-delete"><img src="/images/icon-delete.png" alt=""></a>
    </div>
</div>


