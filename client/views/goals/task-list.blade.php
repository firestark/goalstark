@extends ( 'page' )

@section('navigation')
    @include('partials.up-arrow', [ 'link' => "/" ] )
@endsection

@section ( 'top-app-bar-second-row' )
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


@section( 'content' )
    @include ( 'partials.task-list' )
    @include ( 'partials.link.fab', [ 'link' => "/{$goal->id}/tasks/add", 'action' => 'add' ] )
@endsection