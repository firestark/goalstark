@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/" ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section" style="margin-bottom: 40px;">    
        <form method="POST" action="/{{ $goal->id }}">
            <input type="hidden" name="goalid" value="{{ $goal->id }}">

            <div id="title-and-due">
                @include ( 'partials.input.title', [ 'value' => $goal->title ] )
                @include ( 'partials.input.due', [ 'value' => $goal->due ] )
            </div>
            
            @include ( 'partials.input.description', [ 'value' => $goal->description ] )
            @include ( 'partials.input.rating', [ 'value' => $goal->rating, 'caption' => 'Importance' ] )

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>
    </section>

    @if ( count ( $tasks ) )
        <section class="mdc-card">
            <ul class="mdc-list linked">
                @foreach ( $tasks as $task )
                    <li class="mdc-list-item" tabindex="0">
                        <a href="/tasks/{{ $task->id }}">
                            <span class="mdc-list-item__text">{{ $task->description }}</span>
                        </a>

                        <a href="/tasks/{{ $task->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
@endsection

@section( 'mdc-js' )
    @parent
    
    <script>
        @if ( count ( $tasks ) )
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        @endif
    </script>
@endsection