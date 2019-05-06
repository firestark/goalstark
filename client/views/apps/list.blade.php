@extends ( 'page' )

@section ( 'title' )
    Apps
@endsection

@section ( 'content' )
    @if ( count ( $apps ) )
        <section class="mdc-card">
            <ul class="mdc-list mdc-list--linked">
                @foreach ( $apps as $app )
                    <li class="mdc-list-item" tabindex="0">
                        <a href="/apps/{{ $app->uri }}">
                            <span class="mdc-list-item__text">{{ $app->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
@endsection