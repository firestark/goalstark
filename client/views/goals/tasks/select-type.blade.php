@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goalid}/tasks" ] )
@endsection

@section ( 'title' )
    Add goal task
@endsection

@section ( 'top-app-bar' )
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">            
            <span style="padding-left: 20px;">
                Step 1 of 2: Select type
            </span>
        </section>
    </div>
@endsection

@section ( 'content' )

    <form action="/goals/{{ $goalid }}/tasks/add" method="GET">

        <ul class="mdc-list mdc-list--two-line" role="radiogroup">
            <li class="mdc-list-item" role="radio" aria-checked="{{ ! input::has ( 'type' ) ? 'true' : 'false' }}" tabindex="1">
                <span class="mdc-list-item__graphic">
                    <div class="mdc-radio">
                        <input class="mdc-radio__native-control"
                            type="radio"
                            id="type-1"
                            name="type"
                            value="due"
                            checked="{{ ! input::has ( 'type' ) ? 'true' : 'false' }}">
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

            <li class="mdc-list-item" role="radio" aria-checked="{{ input::get ( 'type' ) === 'daily' ? 'true' : 'false' }}" tabindex="2">
                <span class="mdc-list-item__graphic">
                    <div class="mdc-radio">
                        <input class="mdc-radio__native-control"
                            type="radio"
                            id="type-2"
                            name="type"
                            value="daily"
                            checked="{{ input::get ( 'type' ) === 'daily' ? 'true' : 'false' }}">
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

            <li class="mdc-list-item" role="radio" aria-checked="{{ input::get ( 'type' ) === 'protein' ? 'true' : 'false' }}" tabindex="3">
                <span class="mdc-list-item__graphic">
                    <div class="mdc-radio">
                        <input class="mdc-radio__native-control"
                            type="radio"
                            id="type-3"
                            name="type"
                            value="protein"
                            checked="{{ input::get ( 'type' ) === 'protein' ? 'true' : 'false' }}">
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