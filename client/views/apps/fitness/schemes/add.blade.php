@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/fitness/' ] )
@endsection

@section ( 'title' )
    Add a scheme
@endsection

@section ( 'content' )
    <section class="content" style="padding: 16px 8px 80px;">
        <form action="/apps/fitness" method="POST">
            @include ( 'partials.input.name' )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>   
    </section>
@endsection