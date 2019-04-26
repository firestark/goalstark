@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    @if ( count ( $goals ) )
        <section class="mdc-card" id="goal-listing">
            <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list target-listing-2">
                @foreach ( $goals as $goal )
                    <li class="mdc-list-item mdc-ripple-upgraded" tabindex="0">

                        <a href="/tasks/{{ $goal->id }}/select-type">
                            <span class="mdc-list-item__text" style="width: 100%;">
                                <span class="mdc-list-item__primary-text">{{ $goal->title }}</span>
                                <span class="mdc-list-item__secondary-text"><span>Due {{  date ( 'M d, Y ', $goal->due ) }}</span>        
                                    
                                    <span style="position: relative; top: 6px; left: 8px;">
                                        @for ( $i = 0; $i < $goal->rating; $i++ )
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" style="fill: var(--mdc-theme-text-secondary-on-background, rgba(0, 0, 0, 0.54));">
                                                <path fill="none" d="M0 0h18v18H0V0z"/>
                                                <path d="M9 11.3l2.46 1.79c.39.29.92-.1.77-.56l-.94-2.89 2.43-1.73c.4-.28.2-.91-.29-.91h-2.98l-.97-3.02c-.15-.46-.8-.46-.95 0L7.55 7H4.57c-.49 0-.69.63-.29.91l2.43 1.73-.94 2.89c-.15.46.38.84.77.56L9 11.3z"/>
                                            </svg>
                                        @endfor
                                    </span>
                                    
                                </span>
                            </span>
                        </a>

                    </li>
                @endforeach
            </ul>
        </section>
    @endif

@endsection