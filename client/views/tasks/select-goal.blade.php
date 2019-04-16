@extends ( 'page' )

@section ( 'content' )

    @if ( count ( $goals ) )
        <section class="mdc-card" id="goal-listing">
            <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list target-listing-2">
                @foreach ( $goals as $goal )
                    <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">

                        <a href="/add/task/{{ $goal->id }}">
                            <span class="mdc-list-item__text">
                                <span class="mdc-list-item__primary-text">{{ $goal->description }}</span>
                                <span class="mdc-list-item__secondary-text">Due {{  date ( 'M d, Y ', $goal->due ) }}</span>
                            </span>
                        </a>                        
                    </li>
                @endforeach
            </ul>
        </section>
    @endif

@endsection