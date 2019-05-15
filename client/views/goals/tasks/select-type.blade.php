@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goalid}/tasks" ] )
@endsection

@section ( 'title' )
    Add goal task
@endsection

@section ( 'top-app-bar' )
   @include ( 'partials.wizard.header', [ 'title' => 'Step 1 of 2: Select type' ] )
@endsection

@section ( 'content' )

    <form action="/goals/{{ $goalid }}/tasks/add" method="GET" style="
            display: grid;
            grid-template-rows: 1fr auto;
            height: 100%;
            overflow: hidden;">

        <section style="overflow: overlay;">
            @include ( 'partials.tasks.select-type-list' )
        </section>

        <footer class="mdc-wizard">
            <section class="mdc-wizard__section mdc-wizard__section--align-end">
                <button class="mdc-button" type="submit">
                    <span class="mdc-button__label">DESCRIBE TASK</span>
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </button>
            </section>
        </footer>
    </form>
@endsection

@section ( 'js' )
    @parent

    <script>
        const selector = '.mdc-button';
        const ripples = [].map.call ( document.querySelectorAll ( selector ), function ( el ) {
            mdc.ripple.MDCRipple.attachTo ( el );
        } );
    </script>
@endsection