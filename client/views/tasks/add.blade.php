@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    Add task
@endsection

@section ( 'top-app-bar' )
   @include ( 'partials.wizard.header', [ 'title' => 'Step 3 of 3: Describe task' ] )
@endsection

@section ( 'content' )
    <section style="height: 100%; display: grid;">
        @include ( 'tasks.types.' . $type . '.description' )

        <form id="form" method="POST" action="/tasks/" 
            style="
                display: grid;
                grid-template-rows: 1fr auto;
                overflow: hidden;
                box-sizing: border-box;">
            <section style="overflow: overlay; padding: 16px 8px;">

                @foreach ( $goals as $goal )
                    <input type="hidden" name="goals[]" value="{{ $goal }}">
                @endforeach
                
                <input type="hidden" name="type" value="{{ $type }}">

                @include ( 'tasks.types.' . $type . '.fields' )
            </section>

            <footer class="mdc-wizard">
                <section class="mdc-wizard__section mdc-wizard__section--align-start">
                    <a href="/tasks/select-type?{{ http_build_query ( input::all ( ) ) }}" class="mdc-button">
                        <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                        <span class="mdc-button__label">SELECT TYPE</span>
                    </a>
                </section>
                <section class="mdc-wizard__section mdc-wizard__section--align-end">
                    <button class="mdc-button" type="submit">
                        <span class="mdc-button__label">ADD</span>
                        <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                            <path d="M0 0h24v24H0z" fill="none"/>
                        </svg>
                    </button>
                </section>
            </footer>
        </form>
    </section>
@endsection