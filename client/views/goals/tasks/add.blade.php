@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goalid}/tasks" ] )
@endsection

@section ( 'title' )
    Add goal task
@endsection

@section ( 'top-app-bar' )
   @include ( 'partials.wizard.header', [ 'title' => 'Step 2 of 2: Describe task' ] )
@endsection

@section ( 'content' )
    <form action="" method="POST" style="
            display: grid;
            grid-template-rows: 1fr auto;
            height: 100%;
            overflow: hidden;
            box-sizing: border-box;">
        <section style="overflow: overlay; padding: 16px 8px;">
            <input type="hidden" name="goal" value="{{ $goalid }}">
            <input type="hidden" name="type" value="{{ $type }}">

            @if ( $type === 'product count' )
                @include ( 'partials.input.product.select', [ 'products' => $products ] )
            @endif

            @if ( $type === 'count' or $type === 'product count' )
                @include ( 'partials.input.count' )
            @endif

            @if ( $type === 'due' or $type === 'count' )
                @include ( 'partials.input.due', [ 'value' => time ( ) ] )
            @endif

            @if ( $type !== 'protein' and $type !== 'product count' )
                @include ( 'partials.input.description', [ 'value' => '' ] )
            @endif

            @if ( $type === 'protein' )
                @include ( 'partials.input.protein', [ 'value' => 0, 'autofocus' => true ] )
            @endif
        </section>

        <footer class="mdc-wizard">
            <section class="mdc-wizard__section mdc-wizard__section--align-start">
                <a href="/goals/{{ $goalid }}/tasks/select-type?{{ http_build_query ( input::all ( ) ) }}" class="mdc-button">
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                    <span class="mdc-button__label">SELECT TYPE</span>
                </a>
            </section>
            <section class="mdc-wizard__section mdc-wizard__section--align-end">
                <button class="mdc-button" type="submit">
                    <span class="mdc-button__label">ADD TASK</span>
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </button>
            </section>
        </footer>  
    </form>
@endsection