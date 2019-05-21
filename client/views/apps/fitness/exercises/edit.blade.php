@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/fitness/exercises/' ] )
@endsection

@section ( 'title' )
    Edit an exercise
@endsection

@section ( 'content' )
    <section class="content" style="padding: 16px 8px 80px;">
        <form action="/apps/fitness/exercises/" method="POST">
            @include ( 'partials.input.name', [ 'value' => $exercise->name ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>   
    </section>
@endsection