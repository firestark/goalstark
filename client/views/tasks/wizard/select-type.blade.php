@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card">
        <ul class="mdc-list linked">
            <li class="mdc-list-item" tabindex="0">
                <a href="add/simple?{{ $payload }}">
                    <span class="mdc-list-item__text">Simple task</span>
                </a>
            </li>
            <li class="mdc-list-item" tabindex="1">
                <a href="add/daily?{{ $payload }}">
                    <span class="mdc-list-item__text">Daily task</span>
                </a>
            </li>
            <li class="mdc-list-item" tabindex="2">
                <a href="add/protein?{{ $payload }}">
                    <span class="mdc-list-item__text">Protein task</span>
                </a>
            </li>
            <li class="mdc-list-item" tabindex="3">
                <a href="add/due?{{ $payload }}">
                    <span class="mdc-list-item__text">Due task</span>
                </a>
            </li>
        </ul>

        <div class="mdc-card__actions">
            <a href="/tasks/select-goal?{{ http_build_query ( input::all ( ) ) }}" class="mdc-button mdc-card__action mdc-card__action--button">
                <span class="mdc-button__label">PREV</span>
            </a>
        </div>
    </section>
@endsection