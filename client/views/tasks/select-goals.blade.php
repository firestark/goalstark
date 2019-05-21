@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/tasks/{$task->id}/goals" ] )
@endsection

@section ( 'title' )
    Select task goals
@endsection

@section ( 'content' )
    
    @if ( count ( $goals ) )
        <form action="/tasks/{{ $task->id }}/goals/add" method="POST" 
            style="
                display: grid;
                grid-template-rows: 1fr auto;
                height: 100%;
                overflow: hidden;">
            <ul class="mdc-list mdc-list--two-line" role="group" style="padding: 0;">
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
                            </span>
                        </label>
                    </li>
                
                @endforeach
            </ul>

            <footer class="mdc-wizard">
                <section class="mdc-wizard__section mdc-wizard__section--align-end">
                    <button class="mdc-button" type="submit">
                        <span class="mdc-button__label">CHOOSE</span>
                        <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </button>
                </section>
            </footer>
        </form>
    @endif

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