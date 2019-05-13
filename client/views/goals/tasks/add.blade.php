@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goalid}/tasks" ] )
@endsection

@section ( 'title' )
    Add goal task
@endsection

@section ( 'top-app-bar' )
    <div class="mdc-top-app-bar__row">
        <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">            
            <span style="padding-left: 20px;">
                Step 2 of 2: Describe task
            </span>
        </section>
    </div>
@endsection

@section ( 'content' )
    <form action="" method="POST" style="padding: 16px 8px 80px;">
        <input type="hidden" name="goal" value="{{ $goalid }}">
        <input type="hidden" name="type" value="{{ $type }}">

        @if ( $type === 'due' )
            @include ( 'partials.input.due', [ 'value' => time ( ) ] )
        @endif

        @if ( $type !== 'protein' )
            @include ( 'partials.input.description', [ 'value' => '' ] )
        @endif

        @if ( $type === 'protein' )
            @include ( 'partials.input.protein', [ 'value' => 0, 'autofocus' => true ] )
        @endif

        <section 
            style="
                height: 56px;
                width: 100%;
                box-sizing: border-box;
                display: grid; 
                grid-template-columns: 1fr 1fr; 
                padding: 0; 
                align-items: center;
                position: fixed; 
                bottom: 64px;
                left: 0;
                background-color: var(--mdc-theme-background);">
            <div>
                <a href="/goals/{$goalid}/tasks/select-type?{{ http_build_query ( input::all ( ) ) }}" class="mdc-button">
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                    <span class="mdc-button__label">SELECT TYPE</span>
                </a>
            </div>
            <div style="display: flex; justify-content: flex-end;">
                <button class="mdc-button" type="submit">
                    <span class="mdc-button__label">DESCRIBE TASK</span>
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </button>
            </div>
        </section>
    </form>
@endsection