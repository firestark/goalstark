<div style="text-align: center;">
    @if ( $task->isCompleted ( ) )
        <h2 class="mdc-typography--headline6">Completed</h2>
    @elseif ( $task->due < time ( ) )
        <h2 class="mdc-typography--headline6">Overdue</h2>
    @else
        <h2 class="mdc-typography--headline6">Uncompleted</h2>
    @endif
</div>