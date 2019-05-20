@extends ( 'page' )

@section ( 'title' )
    Apps
@endsection

@section ( 'content' )
    @if ( count ( $apps ) )
        <section class="content">
            <ul class="mdc-list mdc-list--avatar-list mdc-list--linked mdc-list--highlight">
                @foreach ( $apps as $app )
                    <li class="mdc-list-item" tabindex="0">
                        <a href="/apps/{{ $app->uri }}">
                            <span class="mdc-list-item__graphic" aria-hidden="true">
                                <img src="{{ $app->icon }}" width="40" height="40">
                            </span>
                            <span class="mdc-list-item__text">{{ $app->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
@endsection