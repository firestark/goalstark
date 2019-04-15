@extends('page')

@section('navigation')
    @include('partials.up-arrow', [ 'link' => "/" ] )
@endsection

@section('top-app-bar-second-row')
    <div class="mdc-top-app-bar__row mdc-top-app-bar__tabrow">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <div class="mdc-tab-bar" role="tablist">
                <div class="mdc-tab-scroller">
                    <div class="mdc-tab-scroller__scroll-area">
                        <div class="mdc-tab-scroller__scroll-content">
                            <a href="/{{ $goal->id }}">
                                <button class="mdc-tab" role="tab" aria-selected="true" tabindex="0">
                                    <span class="mdc-tab__content">
                                        <span class="mdc-tab__text-label">General</span>
                                    </span>
                                    <span class="mdc-tab-indicator">
                                        <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                    </span>
                                    <span class="mdc-tab__ripple"></span>
                                </button>
                            </a>

                            <button class="mdc-tab mdc-tab--active" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__text-label">Tasks</span>
                                </span>
                                <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@section('content')
    @if( count ( $goal->tasks ) )
        <section>            
            <ul class="mdc-card mdc-list mdc-list--two-line mdc-list--avatar-list target-listing">
                @if( count ( $goal->dailies ( ) ) )
                    <h6 class="mdc-list-group__subheader">Daily tasks</h6>
                    @foreach ( $goal->dailies ( ) as $task )
                        <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">

                            @if($task->completed)
                                <a  href="/{{ $goal->id }}/tasks/uncomplete/{{ $task->id }}" 
                                    class="mdc-list-item__graphic completed" 
                                    aria-hidden="true">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"/>
                                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                    </svg>
                                </a>
                            @else
                                <a  href="/{{ $goal->id }}/tasks/complete/{{ $task->id }}" 
                                    class="mdc-list-item__graphic {{ ( $goal->completeBy < time() ) ? 'overdue' : '' }}" 
                                    aria-hidden="true">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"/>
                                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                    </svg>
                                </a>
                            @endif

                            <a href="/{{ $goal->id }}/tasks/{{ $task->id }}">
                                <span class="mdc-list-item__text">
                                    <span class="mdc-list-item__primary-text">{{ $task->description }}</span>
                                    <span class="mdc-list-item__secondary-text">Due {{  date ( "M d, Y ", $goal->completeBy ) }}</span>
                                </span>
                            </a>
                            
                            <a href="/{{ $goal->id }}/tasks/remove/{{ $task->id }}" class="mdc-list-item__meta" aria-hidden="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                                </svg>
                            </a>
                        </li>
                    @endforeach
                @endif
                @if( count ( $goal->oneTimers ( ) ) )
                    <hr class="mdc-list-divider">
                    <h6 class="mdc-list-group__subheader">Other tasks</h6>
                    @foreach ( $goal->oneTimers ( ) as $task )
                        <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">

                            @if ( $task->completed )
                                <a  href="/{{ $goal->id }}/tasks/{{ $task->id }}/uncomplete" 
                                    class="mdc-list-item__graphic completed" 
                                    aria-hidden="true">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"/>
                                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                    </svg>
                                </a>
                            @else
                                <a  href="/{{ $goal->id }}/tasks/complete/{{ $task->id }}" 
                                    class="mdc-list-item__graphic {{ ( $goal->completeBy < time() ) ? 'overdue' : '' }}" 
                                    aria-hidden="true">
                                    
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                        <path fill="none" d="M0 0h24v24H0V0z"/>
                                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                    </svg>
                                </a>
                            @endif

                            <a href="/{{ $goal->id }}/tasks/{{ $task->id }}">
                                <span class="mdc-list-item__text">
                                    <span class="mdc-list-item__primary-text">{{ $task->description }}</span>
                                    <span class="mdc-list-item__secondary-text">Due {{  date ( "M d, Y ", $goal->completeBy ) }}</span>
                                </span>
                            </a>
                            
                            <a href="/{{ $goal->id }}/tasks/remove/{{ $task->id }}" class="mdc-list-item__meta" aria-hidden="true">
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
    @endif

    <a href="/{{ $goal->id }}/tasks/add" class="mdc-fab">
        <span class="mdc-fab__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <path d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
            </svg>
        </span>
    </a>

    
@endsection

@section('mdc-js')
    <script>
        mdc.ripple.MDCRipple.attachTo(document.querySelector('.mdc-fab'));

        @if(count($goal->tasks))
            mdc.list.MDCList.attachTo(document.querySelector('.mdc-list'));
        @endif
    </script>
@endsection