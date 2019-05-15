<form method="POST" action="/tasks/{{ $task->id }}">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach
        <input type="hidden" name="type" value="product count">

        @include ( 'partials.input.product.select', [ 'products' => app::make ( productManager::class )->all ( ), 'selected' => $task->product ] )

        @include ( 'partials.input.count', [ 'value' => $task->times ] )
        @include ( 'partials.input.due', [ 'value' => $task->due ] )        
    </section>

    @include ( 'partials.input.fab', [ 'action' => 'save' ] )
</form>

<div style="font-size: 64px; text-align: center;">
    <a href="/tasks/{{ $task->id }}/uncomplete">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="var(--mdc-theme-text-primary-on-background)">
            <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
            <path d="M4 11v2h8v-2H4zm15 7h-2V7.38L14 8.4V6.7L18.7 5h.3v13z"/>
        </svg>
    </a>
    {{ count ( $task->completions ) }}
    <a href="/tasks/{{ $task->id }}/complete">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="var(--mdc-theme-text-primary-on-background)">
            <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
            <path d="M10 7H8v4H4v2h4v4h2v-4h4v-2h-4V7zm10 11h-2V7.38L15 8.4V6.7L19.7 5h.3v13z"/>
        </svg>
    </a>
</div>