@extends('page')

@section('top-app-bar-alt-row')

    <div class="mdc-top-app-bar__row mdc-top-app-bar__tabrow">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
               <div class="mdc-tab-bar" role="tablist">
                    <div class="mdc-tab-scroller">
                        <div class="mdc-tab-scroller__scroll-area">
                            <div class="mdc-tab-scroller__scroll-content">
                                <a href="/" id="all">
                                    <button class="mdc-tab {{ ( request::uri ( ) === '/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                        <span class="mdc-tab__content">
                                            <span class="mdc-tab__text-label">All goals</span>
                                        </span>
                                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                        </span>
                                        <span class="mdc-tab__ripple"></span>
                                    </button>
                                </a>
                                <a href="/open" id="open">
                                    <button class="mdc-tab {{ ( request::uri ( ) === '/open' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                        <span class="mdc-tab__content">
                                            <span class="mdc-tab__text-label">Open goals</span>
                                        </span>
                                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/open' ) ? 'mdc-tab-indicator--active' : '' }}">
                                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                        </span>
                                        <span class="mdc-tab__ripple"></span>
                                    </button>
                                </a>
                                <a href="/completed" id="completed">
                                    <button class="mdc-tab {{ ( request::uri ( ) === '/completed' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                        <span class="mdc-tab__content">
                                            <span class="mdc-tab__text-label">Completed goals</span>
                                        </span>
                                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/completed' ) ? 'mdc-tab-indicator--active' : '' }}">
                                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                        </span>
                                        <span class="mdc-tab__ripple"></span>
                                    </button>
                                </a>
                                <a href="/overdue" id="overdue">
                                    <button class="mdc-tab {{ ( request::uri ( ) === '/overdue' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                        <span class="mdc-tab__content">
                                            <span class="mdc-tab__text-label">Overdue goals</span>
                                        </span>
                                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/overdue' ) ? 'mdc-tab-indicator--active' : '' }}">
                                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                        </span>
                                        <span class="mdc-tab__ripple"></span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection

@section('content')

    @if(count($goals))
        <section id="goal-listing" class="mdc-card">
            <ul class="mdc-list demo-list mdc-list--two-line mdc-list--avatar-list">
                @foreach($goals as $goal)
                    <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">

                        @if($goal->completed)
                            <a  href="/uncomplete/{{ $goal->id }}" 
                                class="mdc-list-item__graphic completed" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>
                        @else
                            <a  href="/complete/{{ $goal->id }}" 
                                class="mdc-list-item__graphic {{ ( $goal->completeBy < time() ) ? 'overdue' : '' }}" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                                </svg>
                            </a>
                        @endif

                        <a href="/{{ $goal->id }}">
                            <span class="mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">{{ $goal->description }}</span>
                                <span class="mdc-list-item__secondary-text">Due {{  date("M d, Y ", $goal->completeBy) }}</span>
                            </span>
                        </a>
                        
                        <a href="/remove/{{ $goal->id }}" class="mdc-list-item__meta" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif

    <a href="/add" class="mdc-fab">
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
        mdc.tabBar.MDCTabBar.attachTo(document.querySelector('.mdc-tab-bar'));
        
        @if(count($goals))
            mdc.list.MDCList.attachTo(document.querySelector('.mdc-list'));
        @endif
    </script>

    @include('handlebars.goals')
@endsection