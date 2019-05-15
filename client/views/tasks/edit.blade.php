@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    My task
@endsection

@include ( 'tasks.tab-bar' )

@section ( 'content' )
    @if ( $task instanceof task\protein )
        @include ( 'tasks.types.protein' )
    @elseif ( $task instanceof task\count )
        @include ( 'tasks.types.count' )
    @elseif ( $task instanceof task\due )
        @include ( 'tasks.types.due' )
    @elseif ( $task instanceof task\daily )
        @include ( 'tasks.types.daily' )
    @endif
@endsection

@section ( 'js' )
    @parent
    
    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection