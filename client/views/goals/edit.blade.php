@extends ( 'page' )

@section ( 'title' )
    My goal
@endsection

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/goals/' ] )
@endsection

@include ( 'goals.tab-bar', [ 'goalid' => $goal->id ] )

@section ( 'content' )
    <form method="POST" action="/goals/{{ $goal->id }}" style="padding: 16px 8px;">
        <input type="hidden" name="goalid" value="{{ $goal->id }}">

        @foreach ( $goal->reasons as $reason )
            <input type="hidden" name="reasons[{{ $reason->id }}]" value="{{ $reason->description }}">
        @endforeach

        @include ( 'partials.input.title', [ 'value' => $goal->title ] )
        @include ( 'partials.input.due', [ 'value' => $goal->due ] )
        
        @include ( 'partials.input.description', [ 'value' => $goal->description ] )

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </form>
@endsection

@section ( 'js' )
    @parent
    
    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection