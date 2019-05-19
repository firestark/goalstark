<span class="mdc-list-item__text" style="width: 100%;">
    <span class="mdc-list-item__primary-text">{{ $task->description }}</span>
    <span class="mdc-list-item__secondary-text">{{ count ( $task->completions ) }} / {{ $task->times }}</span>     
</span>