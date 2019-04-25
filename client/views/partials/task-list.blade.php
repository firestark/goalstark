@if ( count ( $tasks ) )
    <section class="mdc-card" style="padding-top: 16px; position: relative;">
        <a href="/{{ $goal->id }}/tasks/add" class="mdc-button mdc-button--raised" style="position: absolute; right: 16px; top: 16px;">Add task</a>

        <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list target-listing">
            @if ( count ( $dailies ) )
                <h6 class="mdc-list-group__subheader">Daily tasks</h6>
                @foreach ( $dailies as $task )
                    <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">
                        @if( $task->isCompleted ( ) )
                            <a  href="/tasks/{{ $task->id }}/uncomplete" 
                                class="mdc-list-item__graphic completed" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>
                        @else
                            <a  href="/tasks/{{ $task->id }}/complete" 
                                class="mdc-list-item__graphic {{ ( $task->due < time() ) ? 'overdue' : '' }}" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>
                        @endif

                        <a href="/tasks/{{ $task->id }}">
                            <span class="mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">{{ $task->description }}</span>
                                <span class="mdc-list-item__secondary-text">Finishes {{  date ( 'M d, Y ', $task->due ) }}</span>
                            </span>
                        </a>
                        
                        <a href="/tasks/{{ $task->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            @endif
            @if ( count ( $oneTimers ) )
                @if ( count ( $dailies ) )
                    <hr class="mdc-list-divider">
                @endif
                <h6 class="mdc-list-group__subheader">Onetime tasks</h6>
                @foreach ( $oneTimers as $task )
                    <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">
                        @if( $task->isCompleted ( ) )
                            <a  href="/tasks/{{ $task->id }}/uncomplete" 
                                class="mdc-list-item__graphic completed" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>
                        @else
                            <a  href="/tasks/{{ $task->id }}/complete" 
                                class="mdc-list-item__graphic {{ ( $task->due < time ( ) ) ? 'overdue' : '' }}" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>
                        @endif

                        <a href="/tasks/{{ $task->id }}">
                            <span class="mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">{{ $task->description }}</span>
                                <span class="mdc-list-item__secondary-text">Due {{  date ( 'M d, Y ', $task->due ) }}</span>
                            </span>
                        </a>
                        
                        <a href="/tasks/{{ $task->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </section>
@else
    <div style="text-align: right; padding: 0 16px;">
        <a href="/{{ $goal->id }}/tasks/add" class="mdc-button mdc-button--raised">Add task</a>
    </div>
@endif

@section( 'mdc-js' )
    @parent
    
    <script>
        @if ( count ( $tasks ) )
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        @endif
    </script>
@endsection