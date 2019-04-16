@extends('page')

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/" ] )
@endsection

@section ( 'top-app-bar-second-row' )
    <div class="mdc-top-app-bar__row mdc-top-app-bar__tabrow">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <div class="mdc-tab-bar" role="tablist">
                <div class="mdc-tab-scroller">
                    <div class="mdc-tab-scroller__scroll-area">
                        <div class="mdc-tab-scroller__scroll-content">
                            <button class="mdc-tab mdc-tab--active" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__text-label">General</span>
                                </span>
                                <span class="mdc-tab-indicator mdc-tab-indicator--active">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </button>

                            <button class="mdc-tab" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__text-label">Tasks</span>
                                </span>
                                <span class="mdc-tab-indicator">
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

@section ( 'content' )
    <section class="mdc-card form-section">
        <form method="POST" action="/">
            <input type="hidden" name="id" value="{{ uniqid ( ) }}">

            @include ( 'partials.input.description', [ 'value' => '' ] )
            @include ( 'partials.input.due', [ 'value' => time ( ) ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
            
        </form>
    </section>
@endsection