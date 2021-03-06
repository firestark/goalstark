@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/" ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section" style="margin-bottom: 40px;">    
        <form method="POST" action="/{{ $goal->id }}">
            <input type="hidden" name="goalid" value="{{ $goal->id }}">

            <div id="title-and-due">
                @include ( 'partials.input.title', [ 'value' => $goal->title ] )
                @include ( 'partials.input.due', [ 'value' => $goal->due ] )
            </div>
            
            @include ( 'partials.input.description', [ 'value' => $goal->description ] )
            @include ( 'partials.input.reasons', [ 'value' => $goal->reasons ] )
            @include ( 'partials.input.rating', [ 'value' => $goal->rating, 'caption' => 'Importance' ] )

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>
    </section>

    
    <section class="mdc-card">
        <header style="display: grid; grid-template-columns: auto 1fr; padding: 8px 16px; align-items: center;">
            <h2 class="mdc-typography--subtitle1" style="margin: 0;">Tasks</h2>   
            <div style="text-align: right;">
                <a href="/{{ $goal->id }}/select-tasks" class="mdc-button mdc-button--raised">Choose tasks</a>
            </div>
        </header>
        @if ( count ( $tasks ) )
            <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list linked">
                @foreach ( $tasks as $task )
                    <li class="mdc-list-item" tabindex="0">
                        @if ( $task instanceof task\due or ( $task instanceof task\daily and ! $task instanceof task\protein ) )
                            @if ( $task->isCompleted ( ) )
                                <a  href="/tasks/{{ $task->id }}/uncomplete" 
                                    class="mdc-list-item__graphic completed" 
                                    aria-hidden="true">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"/>
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM9.29 16.29L5.7 12.7c-.39-.39-.39-1.02 0-1.41.39-.39 1.02-.39 1.41 0L10 14.17l6.88-6.88c.39-.39 1.02-.39 1.41 0 .39.39.39 1.02 0 1.41l-7.59 7.59c-.38.39-1.02.39-1.41 0z"/>
                                    </svg>
                                </a>
                            @else
                                <a  href="/tasks/{{ $task->id }}/complete" 
                                    class="mdc-list-item__graphic {{ ( isset ( $task->due ) and $task->due < time ( ) ) ? 'overdue' : '' }}" 
                                    aria-hidden="true">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"/>
                                        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm3.88-11.71L10 14.17l-1.88-1.88c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l2.59 2.59c.39.39 1.02.39 1.41 0L17.3 9.7c.39-.39.39-1.02 0-1.41-.39-.39-1.03-.39-1.42 0z"/>
                                    </svg>
                                </a>
                            @endif
                        @else
                            <span class="mdc-list-item__graphic material-icons {{ ( $protein > $task->goal ) ? 'completed' : '' }}" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </span>
                        @endif

                        <a href="/tasks/{{ $task->id }}">
                            <span class="mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">{{ $task->description }}</span>
                                @if ( isset ( $task->due ) )
                                    <span class="mdc-list-item__secondary-text">Due {{  date ( 'M d, Y ', $task->due ) }}</span>
                                @elseif ( isset ( $task->goal ) )
                                    <span class="mdc-list-item__secondary-text">Consumed {{ $protein }} of {{ $task->goal }}</span>
                                @else
                                    <span class="mdc-list-item__secondary-text">Daily task</span>
                                @endif
                            </span>
                        </a>

                        <a href="/{{ $goal->id }}/tasks/{{ $task->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </section>
    
@endsection

@section( 'mdc-js' )
    @parent
    
    <script>
        @if ( count ( $tasks ) )
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        @endif
    </script>
@endsection