<form method="POST" action="/tasks/{{ $task->id }}">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

        <input type="hidden" name="type" value="daily">
        @include ( 'partials.input.description', [ 'value' => $task->description ] )

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </section>
</form>

<div style="text-align: center;">
    @if ( $task->isCompleted ( ) )
        <h2 class="mdc-typography--headline6">Uncomplete for today</h2>
        <a  href="/tasks/{{ $task->id }}/uncomplete" 
            class="completed" 
            aria-hidden="true">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM9.29 16.29L5.7 12.7c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L10 14.17l6.88-6.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-7.59 7.59c-.38.39-1.02.39-1.41 0z"/>
            </svg>
        </a>
    @else
        <h2 class="mdc-typography--headline6">Complete for today</h2>
        <a  href="/tasks/{{ $task->id }}/complete" 
            aria-hidden="true">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-secondary)" style="opacity: 0.7;">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.88-11.71L10 14.17l-1.88-1.88c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7c.39-.39.39-1.02 0-1.41-.39-.39-1.03-.39-1.42 0z"/>
            </svg>
        </a>
    @endif
</div>