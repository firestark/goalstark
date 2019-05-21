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
            <input type="hidden" name="old-scheme_id" value="{{ $scheme->id }}">

            @include ( 'partials.input.name', [ 'value' => $scheme->name ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>   
    </section>

    <a href="/apps/fitness/{{ $scheme->id }}/routines/add" class="mdc-button">
        <span class="mdc-button__label">Add routine</span>
    </a>

    @if ( count ( $scheme->routines ) )
        <ul class="mdc-list mdc-list--two-line mdc-list--linked">
            @foreach ( $scheme->routines as $routine )
                <li class="mdc-list-item" tabindex="0">
                    <a href="#" style="position: relative">
                        <span class="mdc-list-item__text" style="width: 100%;">
                            <span class="mdc-list-item__primary-text">{{ $routine->exercise->name }}</span>
                            <span class="mdc-list-item__secondary-text">{{ $routine->sets }} x {{ $routine->reps }}</span>     
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
@endsection 