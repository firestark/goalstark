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
        @if ( $type === 'protein' )
            <div style="text-align: center; margin: 56px auto 0; width: 230px;">

                <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-secondary)" style="opacity: 0.7;">
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                    <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm1 13h-2v-6h2v6zm0-8h-2V7h2v2z"/>
                    <path d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                </svg>

                <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">Protein task</h3>
                <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">
                    A protein task sets a goal to consume an amount of protein every day
                </p>
            </div>
        @endif

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

                @if ( $type === 'max kcal' )
                    @include ( 'partials.input.product.kcal' )
                @endif

                @if ( $type === 'product count' )
                    @include ( 'partials.input.product.select', [ 'products' => $products ] )
                @endif

                @if ( $type === 'count' or $type === 'product count' )
                    @include ( 'partials.input.count' )
                @endif

                @if ( $type === 'due' )
                    @include ( 'partials.input.due', [ 'value' => time ( ) ] )
                @endif

                @if ( $type !== 'protein' and $type !== 'product count' and $type !== 'max kcal' )
                    @include ( 'partials.input.description', [ 'value' => '' ] )
                @endif

                @if ( $type === 'protein' )
                    @include ( 'partials.input.protein', [ 'value' => 0, 'autofocus' => true ] )
                @endif

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