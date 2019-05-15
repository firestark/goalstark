@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    Add task
@endsection

@section ( 'top-app-bar' )
   @include ( 'partials.wizard.header', [ 'title' => 'Step 1 of 3: Select goals' ] )
@endsection

@section ( 'content' )
    <form action="/tasks/select-type" method="GET" 
        style="
            display: grid;
            grid-template-rows: 1fr auto;
            height: 100%;
            overflow: hidden;">
        @if ( count ( $goals ) )
            <ul class="mdc-list mdc-list--two-line" role="group" style="overflow: overlay;">
                @foreach ( $goals as $goal )
                    <li class="mdc-list-item" role="checkbox" aria-checked="{{ in_array ( $goal->id, input::get ( 'goals', [ ] ) ) ? 'true' : 'false' }}">
                        <span class="mdc-list-item__graphic">
                            <div class="mdc-checkbox">
                                <input 
                                    type="checkbox"
                                    class="mdc-checkbox__native-control"
                                    id="{{ $goal->id }}"
                                    name="goals[]"
                                    value="{{ $goal->id }}"
                                    {{ in_array ( $goal->id, input::get ( 'goals', [ ] ) ) ? 'checked' : '' }}>
                        
                                <div class="mdc-checkbox__background">
                                    <svg class="mdc-checkbox__checkmark"
                                        viewBox="0 0 24 24">
                                        <path class="mdc-checkbox__checkmark-path"
                                            fill="none"
                                            d="M1.73,12.91 8.1,19.28 22.79,4.59"/>
                                    </svg>
                                    <div class="mdc-checkbox__mixedmark"></div>
                                </div>
                            </div>
                        </span>

                        <label class="mdc-list-item__text" for="{{ $goal->id }}" style="width: 100%;">
                            <span class="mdc-list-item__text" style="width: 100%;">
                                <span class="mdc-list-item__primary-text">{{ $goal->title }}</span>
                                <span class="mdc-list-item__secondary-text"><span>Due {{  date ( 'M d, Y ', $goal->due ) }}</span>                                                
                            </span>
                        </label>
                    </li>
                
                @endforeach
            </ul>
        @else
            <div style="text-align: center; margin: 16px auto 56px; width: 230px;">

                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-secondary)" style="opacity: 0.7;">
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                    <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 13h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                </svg>

                <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">No goals</h3>
                <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">
                    There are no goals to select but you may still add a task, press <span style="color: var(--mdc-theme-primary);">SELECT TYPE</span> to proceed
                </p>
            </div>
        @endif

        <footer class="mdc-wizard">
            <section class="mdc-wizard__section mdc-wizard__section--align-end">
                <button class="mdc-button" type="submit">
                    <span class="mdc-button__label">SELECT TYPE</span>
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </button>
            </section>
        </footer>
    </form>
@endsection

@if ( count ( $goals ) )
    @section ( 'js' )
        @parent

        <script>
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );

            const selector = '.mdc-button, .mdc-icon-button, .mdc-card__primary-action';
            const ripples = [].map.call ( document.querySelectorAll ( selector ), function ( el ) {
                mdc.ripple.MDCRipple.attachTo ( el );
            } );
        </script>
    @endsection
@endif