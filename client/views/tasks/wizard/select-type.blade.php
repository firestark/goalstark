@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
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
                            <span class="mdc-list-item__secondary-text">A task with a due date that has to be done once</span>
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
                            <span class="mdc-list-item__secondary-text">A task to track protein consumption daily until the last due date of given goals</span>
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
                </a>
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