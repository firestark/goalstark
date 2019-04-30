@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section" style="margin-bottom: 24px;">
        <form method="POST" action="/tasks/{{ $task->id }}">

            @foreach ( $task->goals as $goal )
                <input type="hidden" name="goals[]" value="{{ $goal }}">
            @endforeach

            @if ( $task instanceof task\due )
                @include ( 'partials.input.due', [ 'value' => $task->due ] )
            @endif

            @if ( ! $task instanceof task\protein )
                @include ( 'partials.input.description', [ 'value' => $task->description ] )
            @endif

            @if ( $task instanceof task\protein )
                @include ( 'partials.input.protein', [ 'value' => $task->goal ] )
            @endif

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>    
    </section>
        
    
    <section class="mdc-card" id="goal-listing">
        <header style="display: grid; grid-template-columns: auto 1fr; padding: 8px 16px; align-items: center;">
            <h2 class="mdc-typography--subtitle1" style="margin: 0;">Goals</h2>   
            <div style="text-align: right;">
                <a href="/tasks/{{ $task->id }}/goals/add" class="mdc-button mdc-button--raised">Add goal</a>
            </div>
        </header>

        @if ( count ( $goals ) )
            <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list linked">
                @foreach ( $goals as $goal )
                    <li class="mdc-list-item" tabindex="0">

                        @if ( $goal->completed )
                            <a  href="/{{ $goal->id }}/uncomplete" 
                                class="mdc-list-item__graphic completed" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>
                        @else
                            <a  href="/{{ $goal->id }}/complete" 
                                class="mdc-list-item__graphic {{ ( $goal->due < time ( ) ) ? 'overdue' : '' }}" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>
                        @endif

                        <a href="/{{ $goal->id }}">
                            <span class="mdc-list-item__text" style="width: 100%;">
                                <span class="mdc-list-item__primary-text">{{ $goal->title }}</span>
                                <span class="mdc-list-item__secondary-text"><span>Due {{  date ( 'M d, Y ', $goal->due ) }}</span>        
                                    
                                    <span style="position: relative; top: 6px; left: 8px;">
                                        @for ( $i = 0; $i < $goal->rating; $i++ )
                                            <svg class="star" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                                                <path fill="none" d="M0 0h18v18H0V0z"/>
                                                <path d="M9 11.3l2.46 1.79c.39.29.92-.1.77-.56l-.94-2.89 2.43-1.73c.4-.28.2-.91-.29-.91h-2.98l-.97-3.02c-.15-.46-.8-.46-.95 0L7.55 7H4.57c-.49 0-.69.63-.29.91l2.43 1.73-.94 2.89c-.15.46.38.84.77.56L9 11.3z"/>
                                            </svg>
                                        @endfor
                                    </span>
                                    
                                </span>
                            </span>
                        </a>
                        
                        <a href="/tasks/remove/{{ $task->id }}/{{ $goal->id }}" class="mdc-list-item__meta" aria-hidden="true">
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