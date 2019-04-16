@extends ( 'page' )

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

                            <a href="/{{ $goal->id }}/tasks">
                                <button class="mdc-tab" role="tab" aria-selected="true" tabindex="0">
                                    <span class="mdc-tab__content">
                                        <span class="mdc-tab__text-label">Tasks</span>
                                    </span>
                                    <span class="mdc-tab-indicator">
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

@section ( 'content' )
    <section class="mdc-card form-section">    
        <form method="POST" action="/{{ $goal->id }}">
            <input type="hidden" name="id" value="{{ $goal->id }}">
            
            <div id="description-field" class="mdc-text-field mdc-text-field--textarea">
                <textarea id="description" name="description" class="mdc-text-field__input" rows="8" cols="40" required>{{ $goal->description }}</textarea>
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="goal" class="mdc-floating-label">Goal description</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>

            @include ( 'partials.input.due', [ 'value' => $goal->due ] )
            
            <button type="submit" class="mdc-fab">
                <span class="mdc-fab__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>
                </span>
            </button>
        </form>
    </section>
@endsection

@section ( 'mdc-js' )
    <script>
        mdc.ripple.MDCRipple.attachTo ( document.querySelector ( '.mdc-fab' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'description-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'due-field' ) );       
    </script>
@endsection