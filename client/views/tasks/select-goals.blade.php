@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    
    @if ( count ( $goals ) )
        <form action="/tasks/{{ $task->id }}/goals/add" method="POST">
            <section class="mdc-card" id="goal-listing">
                <ul class="mdc-list mdc-list--two-line" role="group">
                    @foreach ( $goals as $goal )
                        <li class="mdc-list-item" role="checkbox" aria-checked="{{ in_array ( $goal->id, $task->goals ) ? 'true' : 'false' }}">
                            <span class="mdc-list-item__graphic">
                                <div class="mdc-checkbox">
                                    <input 
                                        type="checkbox"
                                        class="mdc-checkbox__native-control"
                                        id="{{ $goal->id }}"
                                        name="goals[]"
                                        value="{{ $goal->id }}"
                                        {{ in_array ( $goal->id, $task->goals ) ? 'checked' : '' }}>
                            
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
                                        
                                        <span style="position: relative; top: 6px; left: 8px;">
                                            @for ( $i = 0; $i < $goal->rating; $i++ )
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" style="fill: var(--mdc-theme-text-secondary-on-background, rgba(0, 0, 0, 0.54));">
                                                    <path fill="none" d="M0 0h18v18H0V0z"/>
                                                    <path d="M9 11.3l2.46 1.79c.39.29.92-.1.77-.56l-.94-2.89 2.43-1.73c.4-.28.2-.91-.29-.91h-2.98l-.97-3.02c-.15-.46-.8-.46-.95 0L7.55 7H4.57c-.49 0-.69.63-.29.91l2.43 1.73-.94 2.89c-.15.46.38.84.77.56L9 11.3z"/>
                                                </svg>
                                            @endfor
                                        </span>
                                    </span>
                                </span>
                            </label>
                        </li>
                    
                    @endforeach
                </ul>

                <div class="mdc-card__actions">
                    <button type="submit" class="mdc-button mdc-card__action mdc-card__action--button">
                        <span class="mdc-button__label">Add</span>
                    </button>
                </div>
            </section>
        </form>
    @endif

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