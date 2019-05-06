@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goalid}/tasks" ] )
@endsection

@section ( 'title' )
    Select goal tasks
@endsection

@section ( 'content' )
    
    @if ( count ( $tasks ) )
        <form action="/{{ $goalid }}/tasks" method="POST">
            <section class="mdc-card">
                <ul class="mdc-list" role="group">
                    @foreach ( $tasks as $task )
                        <li class="mdc-list-item" role="checkbox" aria-checked="{{ in_array ( $goalid, $task->goals ) ? 'true' : 'false' }}">
                            <span class="mdc-list-item__graphic">
                                <div class="mdc-checkbox">
                                    <input 
                                        type="checkbox"
                                        class="mdc-checkbox__native-control"
                                        id="{{ $task->id }}"
                                        name="tasks[]"
                                        value="{{ $task->id }}"
                                        {{ in_array ( $goalid, $task->goals ) ? 'checked' : '' }}>
                            
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

                            <label class="mdc-list-item__text" for="{{ $task->id }}" style="width: 100%;">
                                {{ $task->description }}
                            </label>
                        </li>
                    
                    @endforeach
                </ul>

                <div class="mdc-card__actions">
                    <button type="submit" class="mdc-button mdc-card__action mdc-card__action--button">
                        <span class="mdc-button__label">Choose</span>
                    </button>
                </div>
            </section>
        </form>
    @endif

@endsection

@if ( count ( $tasks ) )
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
@endif