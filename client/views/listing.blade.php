@extends('master')

@section('styles')
    <style>
        .mdc-top-app-bar--fixed-adjust {
            padding-top: 128px;
        }
    </style>
@endsection

@section('top-app-bar-alt-row')

    <div class="mdc-top-app-bar__row mdc-top-app-bar__tabrow">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
               <div class="mdc-tab-bar" role="tablist">
                    <div class="mdc-tab-scroller">
                        <div class="mdc-tab-scroller__scroll-area">
                            <div class="mdc-tab-scroller__scroll-content">
                                <a href="/">
                                    <button class="mdc-tab {{ ( request::uri() === '/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                        <span class="mdc-tab__content">
                                            <span class="mdc-tab__text-label">All goals</span>
                                        </span>
                                        <span class="mdc-tab-indicator {{ ( request::uri() === '/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                        </span>
                                        <span class="mdc-tab__ripple"></span>
                                    </button>
                                </a>
                                <a href="/overdue">
                                    <button class="mdc-tab {{ ( request::uri() === '/overdue' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                        <span class="mdc-tab__content">
                                            <span class="mdc-tab__text-label">Overdue goals</span>
                                        </span>
                                        <span class="mdc-tab-indicator {{ ( request::uri() === '/overdue' ) ? 'mdc-tab-indicator--active' : '' }}">
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
                                    <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm-2 13l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/>
                                </svg>
                            </a>
                        @else
                            <a  href="/complete/{{ $goal->id }}" 
                                class="mdc-list-item__graphic {{ ( $goal->completeBy < time() ) ? 'overdue' : '' }}" 
                                aria-hidden="true">
                                
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path fill="none" d="M0 0h24v24H0V0z"/>
                                    <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm-2 13l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/>
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
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"/>
                                <path opacity=".3" d="M8 9h8v10H8z"/>
                                <path d="M15.5 4l-1-1h-5l-1 1H5v2h14V4zM6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM8 9h8v10H8V9z"/>
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
                <path fill="none" d="M0 0h24v24H0V0z"/><path opacity=".3" d="M13 4H6v16h12V9h-5V4zm3 10v2h-3v3h-2v-3H8v-2h3v-3h2v3h3z"/>
                <path d="M13 11h-2v3H8v2h3v3h2v-3h3v-2h-3zm1-9H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z"/>
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
@endsection