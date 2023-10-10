<div class="task">
    <div class="task_title">
        <input type="checkbox" name="" class="task_checkbox">
        <span>Titulo da tarefa</span>
    </div>
    <div class="priority">
        <div class="circule"></div>
        <span>Titulo da tarefa</span>
    </div>
    <div class="actions">
        <a href="{{ route('task.edit', ['id' => 1]) }}" class="button button-edit"><img src="/images/icon-edit.png" alt=""></a>
        <a href="{{ route('task.delete', ['id' => 1]) }}" class="button button-delete"><img src="/images/icon-delete.png" alt=""></a>
    </div>
</div>
