@extends ( 'page' )

@section ( 'title' )
    My goals
@endsection

@section ( 'content' )
    @if ( count ( $goals ) )
        <section class="content">
            <ul class="mdc-list mdc-list--three-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked" style="padding-top: 0;">
                @if ( count ( $due ) )
                    <h6 class="mdc-list-group__subheader">Due</h6>

                    @foreach ( $due as $goal )
                        @include ( 'goals.goal', [ 'goal' => $goal ] )
                    @endforeach
                @endif
                
                @if ( count ( $overdue ) )
                    <h6 class="mdc-list-group__subheader">Overdue</h6>

                    @foreach ( $overdue as $goal )
                        @include ( 'goals.goal', [ 'goal' => $goal ] )
                    @endforeach
                @endif

                @if ( count ( $completed ) )
                    <h6 class="mdc-list-group__subheader">Completed</h6>

                    @foreach ( $completed as $goal )
                        @include ( 'goals.goal', [ 'goal' => $goal ] )
                    @endforeach
                @endif
            </ul>
        </section>
    @else
        <div style="text-align: center; margin: 56px auto 0; width: 230px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-secondary)" style="opacity: 0.7;">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <circle opacity=".3" cx="17.5" cy="17.5" r="2.5"/>
                <path opacity=".3" d="M5 15.5h4v4H5zm7-9.66L10.07 9h3.86z"/>
                <path d="M12 2l-5.5 9h11L12 2zm0 3.84L13.93 9h-3.87L12 5.84zM17.5 13c-2.49 0-4.5 2.01-4.5 4.5s2.01 4.5 4.5 4.5 4.5-2.01 4.5-4.5-2.01-4.5-4.5-4.5zm0 7c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM11 13.5H3v8h8v-8zm-2 6H5v-4h4v4z"/>
            </svg>

            <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">No goals here</h3>
            <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">Add goals with the
                <span style="vertical-align: text-top;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--mdc-theme-text-secondary-on-background); position: relative; top: 4px;">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M18 13h-5v5c0 .55-.45 1-1 1s-1-.45-1-1v-5H6c-.55 0-1-.45-1-1s.45-1 1-1h5V6c0-.55.45-1 1-1s1 .45 1 1v5h5c.55 0 1 .45 1 1s-.45 1-1 1z"/>
                    </svg>
                </span> button
            </p>
        </div>
    @endif

    @include ( 'partials.link.fab', [ 'link' => '/goals/add', 'action' => 'add' ] )
@endsection


@section ( 'js' )
    @parent

    <script>        
        @if ( count ( $goals ) )
            const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
            const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
        @endif
    </script>
@endsection