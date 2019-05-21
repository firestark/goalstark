@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/' ] )
@endsection

@section ( 'title' )
    Exercises
@endsection

@include ( 'apps.fitness.tab-bar' )

@section ( 'content' )
    @if ( count ( app::make ( exercise\manager::class )->all ( ) ) )
        <ul class="mdc-list mdc-list--linked">
            @foreach ( app::make ( exercise\manager::class )->all ( ) as $exercise )
                <li class="mdc-list-item" tabindex="0">
                    <a href="/apps/fitness/exercises/{{ $exercise->id }}">
                        <span class="mdc-list-item__text">{{ $exercise->name }}</span>
                    </a>

                    <a href="/apps/fitness/exercises/{{ $exercise->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"/>
                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
    
    @include ( 'partials.link.fab', [ 'link' => '/apps/fitness/exercises/add', 'action' => 'add' ] )
@endsection

@if ( count ( app::make ( exercise\manager::class )->all ( ) ) )
    @section ( 'js' )
        @parent

        <script>        
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        </script>        
    @endsection
@endif