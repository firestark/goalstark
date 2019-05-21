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

    <section>
        <div style="text-align: right; padding: 0 16px;">
            <a href="/apps/fitness/{{ $scheme->id }}/routines/add" class="mdc-button" style="align-self: flex-end;">
                <span class="mdc-button__label">Add routine</span>
            </a>
        </div>
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

                        <a href="/apps/fitness/{{ $scheme->id }}/routines/{{ $routine->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
    </section>
@endsection 