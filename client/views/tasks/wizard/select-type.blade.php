@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    Add task
@endsection

@section ( 'content' )

    <form action="/tasks/add" method="GET">

        <ol class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--stepper" style="padding-top: 0;">
            <li class="mdc-list-item" tabindex="0" style="align-items: flex-start;">
                <a 
                    style="display: flex; align-items: flex-end; color: inherit;"
                    href="/tasks/select-goal?{{ http_build_query ( input::all ( ) ) }}" 
                    tabindex="5">

                    <span 
                        class="mdc-list-item__graphic" 
                        aria-hidden="true">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"/>
                            <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                        </svg>

                        <span class="mdc-list-stepper-line--after"></span>
                    </span>

                    <span class="mdc-list-item__text">
                        <span class="mdc-list-item__primary-text">Select goals</span>
                        <span class="mdc-list-item__secondary-text">Select goals for tasks</span>                                        
                    </span>
                </a>
            </li>

            <li class="mdc-list-item mdc-list-stepper--current" tabindex="0">
                <span 
                    class="mdc-list-item__graphic" 
                    aria-hidden="true">

                    <span class="mdc-list-stepper-line--before"></span>
                    
                    <span>2</span>

                    <span class="mdc-list-stepper-line--after"></span>
                </span>

                <span class="mdc-list-item__text">
                    <span class="mdc-list-item__primary-text">Select task type</span>
                    <span class="mdc-list-item__secondary-text">Select a type of task</span>                                        
                </span>
            </li>
            <li class="mdc-list-item" tabindex="0">
                <button 
                    type="submit" 
                    class="reset"
                    tabindex="4">
                
                    <span 
                        class="mdc-list-item__graphic" 
                        aria-hidden="true">

                        <span class="mdc-list-stepper-line--before"></span>
                        
                        <span>3</span>
                    </span>


                    <span class="mdc-list-item__text">
                        <span class="mdc-list-item__primary-text">Describe task</span>
                        <span class="mdc-list-item__secondary-text">Create that task</span>                                        
                    </span>
                </button>
            </li>
        </ol>


    
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

            <div class="mdc-card__actions">
                <a 
                    href="/tasks/select-goal?{{ http_build_query ( input::all ( ) ) }}" 
                    class="mdc-button mdc-card__action mdc-card__action--button"
                    tabindex="5">
                        <span class="mdc-button__label">PREV</span>
                </a>
                <button 
                    type="submit" 
                    class="mdc-button mdc-card__action mdc-card__action--button"
                    tabindex="4">
                        <span class="mdc-button__label">NEXT</span>
                </button>
            </div>
        </section>
    </form>
@endsection

@section ( 'mdc-js' )
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