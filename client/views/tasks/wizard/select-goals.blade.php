@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    Add task
@endsection

@section ( 'content' )
    <form action="/tasks/select-type" method="GET">
        <ol class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--stepper" style="padding-top: 0;">
            <li class="mdc-list-item mdc-list-stepper--current" tabindex="0">
                <span 
                    class="mdc-list-item__graphic" 
                    aria-hidden="true">
                    
                    <span>1</span>

                    <span class="mdc-list-stepper-line--after"></span>
                </span>

                <span class="mdc-list-item__text">
                    <span class="mdc-list-item__primary-text">Select goals</span>
                    <span class="mdc-list-item__secondary-text">Select goals for tasks</span>                                        
                </span>
            </li>

            <li class="mdc-list-item" tabindex="0">
                <button type="submit" class="reset">     
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
                </button>
            </li>
            <li class="mdc-list-item" tabindex="0">
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
            </li>
        </ol>

        @if ( count ( $goals ) )
            <section class="mdc-card">
                <ul class="mdc-list mdc-list--two-line" role="group">
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
            </section>
        @else
            <div style="text-align: center; margin: 16px auto 56px; width: 230px;">

                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-secondary)" style="opacity: 0.7;">
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                    <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 13h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                </svg>

                <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">No goals</h3>
                <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">
                    There are no goals to select but you may still add a task, press 2: Select task type to proceed
                </p>
            </div>
        @endif
    </form>
@endsection

@if ( count ( $goals ) )
    @section ( 'mdc-js' )
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