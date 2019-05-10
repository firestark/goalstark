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
                                <svg width="40" height="40" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
                                        <path fill="#2568EF" d="M32,0c17.7,0,32,14.3,32,32S49.7,64,32,64S0,49.7,0,32S14.4,0,32,0z"/>
                                        <path fill="#FFFFFF" d="M32,11c-10.5,0-17.4,15-17.4,24.9c0,10.2,7,17.1,17.4,17.1s17.4-6.9,17.4-17.1C49.4,26,42.5,11,32,11z"/>
                                        <circle fill="#E5E5E5" cx="36" cy="19" r="1"/>
                                        <circle fill="#E5E5E5" cx="34" cy="24" r="2"/>
                                        <circle fill="#E5E5E5" cx="39" cy="25" r="1"/>
                                </svg>
                            </span>
                            <span class="mdc-list-item__text">{{ $app->title }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
@endsection