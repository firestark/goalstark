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
            <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list linked">
                @foreach ( $tasks as $task )
                    @include ( 'partials.task', [ 'task' => $task, 'protein' => 0 ] )
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