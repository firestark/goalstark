@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    Add task
@endsection

@section ( 'top-app-bar' )
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">            
            <span style="padding-left: 20px;">
                Step 2 of 3: Select type
            </span>
        </section>
    </div>
@endsection

@section ( 'content' )

    <form action="/tasks/add" method="GET">
    
        @foreach ( $goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

        <section class="mdc-card">
            <ul class="mdc-list mdc-list--two-line" role="radiogroup">
                <li class="mdc-list-item" role="radio" aria-checked="true" tabindex="1">
                    <span class="mdc-list-item__graphic">
                        <div class="mdc-radio">
                            <input class="mdc-radio__native-control"
                                type="radio"
                                id="type-1"
                                name="type"
                                value="due"
                                checked>
                            <div class="mdc-radio__background">
                                <div class="mdc-radio__outer-circle"></div>
                                <div class="mdc-radio__inner-circle"></div>
                            </div>
                        </div>
                    </span>
                    <label class="mdc-list-item__text" for="type-1" style="width: 100%;">
                        <span class="mdc-list-item__text" style="width: 100%;">
                            <span class="mdc-list-item__primary-text">Due task</span>
                            <span class="mdc-list-item__secondary-text">A due task executed once</span>
                        </span>
                    </label>
                </li>

                <li class="mdc-list-item" role="radio" aria-checked="true" tabindex="2">
                    <span class="mdc-list-item__graphic">
                        <div class="mdc-radio">
                            <input class="mdc-radio__native-control"
                                type="radio"
                                id="type-2"
                                name="type"
                                value="daily"
                                checked>
                            <div class="mdc-radio__background">
                                <div class="mdc-radio__outer-circle"></div>
                                <div class="mdc-radio__inner-circle"></div>
                            </div>
                        </div>
                    </span>
                    <label class="mdc-list-item__text" for="type-2" style="width: 100%;">
                        <span class="mdc-list-item__text" style="width: 100%;">
                            <span class="mdc-list-item__primary-text">Daily task</span>
                            <span class="mdc-list-item__secondary-text">A task that has to be done daily</span>
                        </span>
                    </label>
                </li>
    
                <li class="mdc-list-item" role="radio" aria-checked="false" tabindex="3">
                    <span class="mdc-list-item__graphic">
                        <div class="mdc-radio">
                            <input class="mdc-radio__native-control"
                                type="radio"
                                id="type-3"
                                name="type"
                                value="protein">
                            <div class="mdc-radio__background">
                                <div class="mdc-radio__outer-circle"></div>
                                <div class="mdc-radio__inner-circle"></div>
                            </div>
                        </div>
                    </span>
                    <label class="mdc-list-item__text" for="type-3" style="width: 100%;">
                        <span class="mdc-list-item__text" style="width: 100%;">
                            <span class="mdc-list-item__primary-text">Protein task</span>
                            <span class="mdc-list-item__secondary-text">Daily protein consumption task</span>
                        </span>
                    </label>
                </li>
            </ul>
        </section>

        <section 
            style="
                height: 56px;
                width: 100%;
                box-sizing: border-box;
                display: grid; 
                grid-template-columns: 1fr 1fr; 
                padding: 0; 
                align-items: center;
                position: fixed; 
                bottom: 64px;
                left: 0;
                background-color: var(--mdc-theme-background);">
            <div>
                <a href="/tasks/select-goal?{{ http_build_query ( input::all ( ) ) }}" class="mdc-button">
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                    <span class="mdc-button__label">SELECT GOALS</span>
                </a>
            </div>
            <div style="display: flex; justify-content: flex-end;">
                <button class="mdc-button" type="submit">
                    <span class="mdc-button__label">DESCRIBE TASK</span>
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </button>
            </div>
        </section>
    </form>
@endsection

@section ( 'js' )
        @parent

        <script>
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );

            const selector = '.mdc-button';
            const ripples = [].map.call ( document.querySelectorAll ( selector ), function ( el ) {
                mdc.ripple.MDCRipple.attachTo ( el );
            } );
        </script>
    @endsection