@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/tasks" ] )
@endsection

@section ( 'content' )
    <section class="mdc-card">
        <ul class="mdc-list linked">
            <li class="mdc-list-item" tabindex="0">
                <a href="#">
                    <span class="mdc-list-item__text">One time task</span>
                </a>
            </li>
            <li class="mdc-list-item" tabindex="0">
                <a href="#">
                    <span class="mdc-list-item__text">Daily task</span>
                </a>
            </li>
            <li class="mdc-list-item" tabindex="0">
                <a href="#">
                    <span class="mdc-list-item__text">Protein task</span>
                </a>
            </li>
        </ul>
    </section>
@endsection