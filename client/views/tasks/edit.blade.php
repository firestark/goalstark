@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    My task
@endsection

@include ( 'tasks.tab-bar', [ 'taskid' => $task->id ] )

@section ( 'content' )

    @include ( 'tasks.types.' . $type . '.description' )
        
    <form method="POST" action="/tasks/{{ $task->id }}" style="display: grid; grid-template-rows: 1fr auto;">
        <section style="overflow: overlay; padding: 16px 8px 80px;">
            @foreach ( $task->goals as $goal )
                <input type="hidden" name="goals[]" value="{{ $goal }}">
            @endforeach

            <input type="hidden" name="type" value="{{ $type }}">
            @include ( 'tasks.types.' . $type . '.fields' )

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </section>
    </form>

    @include ( 'tasks.types.' . $type . '.status' )
@endsection

