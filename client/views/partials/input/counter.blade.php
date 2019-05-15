<div style="text-align: center;">
    <h2 class="mdc-typography--headline6">{{ $title }}</h2>
    @if ( ! count ( $task->completions ) < 1 )
        <a href="/tasks/{{ $task->id }}/uncomplete">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="var(--mdc-theme-text-primary-on-background)">
                <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
                <path d="M4 11v2h8v-2H4zm15 7h-2V7.38L14 8.4V6.7L18.7 5h.3v13z"/>
            </svg>
        </a>
    @endif
    <span style="font-size: 64px;">{{ count ( $task->completions ) }}</span>
    <a href="/tasks/{{ $task->id }}/complete">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="var(--mdc-theme-text-primary-on-background)">
            <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
            <path d="M10 7H8v4H4v2h4v4h2v-4h4v-2h-4V7zm10 11h-2V7.38L15 8.4V6.7L19.7 5h.3v13z"/>
        </svg>
    </a>
</div>