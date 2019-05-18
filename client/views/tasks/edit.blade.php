@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    My task
@endsection

@include ( 'tasks.tab-bar', [ 'taskid' => $task->id ] )

@section ( 'content' )
    @if ( $task instanceof task\protein )
        @include ( 'tasks.types.protein.edit' )
    @elseif ( $task instanceof task\product\maxKcal )
        @include ( 'tasks.types.product.max-kcal.edit' )
    @elseif ( $task instanceof task\product\count )
        @include ( 'tasks.types.product.count.edit' )
    @elseif ( $task instanceof task\count )
        @include ( 'tasks.types.count.edit' )
    @elseif ( $task instanceof task\due )
        @include ( 'tasks.types.due.edit' )
    @elseif ( $task instanceof task\daily )
        @include ( 'tasks.types.daily.edit' )
    @endif
@endsection

@section ( 'js' )
    @parent
    
    <script>
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script>
@endsection