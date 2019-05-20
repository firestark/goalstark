@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/fitness/' ] )
@endsection

@section ( 'title' )
    Edit a scheme
@endsection

@section ( 'content' )
    <section class="content" style="padding: 16px 8px 80px;">
        <form action="/apps/fitness/{{ $scheme->id }}" method="POST">
            @include ( 'partials.input.name', [ 'value' => $scheme->name ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>   
    </section>

    <a href="/apps/fitness/{{ $scheme->id }}/routines/add" class="mdc-button">
        <span class="mdc-button__label">Add routine</span>
    </a>

    @if ( count ( $scheme->routines ) )
        <ul class="mdc-list">
            @foreach ( $scheme->routine as $routine )
                <li class="mdc-list-item" tabindex="0">
                    <span class="mdc-list-item__text">{{ $routine->exercise->name }}</span>
                </li>
            @endforeach
        </ul>
    @endif
@endsection