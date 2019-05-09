@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    Add task
@endsection


@section ( 'content' )
    <ol class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--stepper" style="padding-top: 0;">
        <li class="mdc-list-item" tabindex="0" style="align-items: flex-start;">
            <a 
                style="display: flex; align-items: flex-end; color: inherit;"
                href="/tasks/select-goal?{{ http_build_query ( input::all ( ) ) }}" 
                tabindex="5">

                <span 
                    class="mdc-list-item__graphic" 
                    aria-hidden="true">
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>

                    <span class="mdc-list-stepper-line--after"></span>
                </span>

                <span class="mdc-list-item__text">
                    <span class="mdc-list-item__primary-text">Select goals</span>
                    <span class="mdc-list-item__secondary-text">Select goals for tasks</span>                                        
                </span>
            </a>
        </li>

        <li class="mdc-list-item" tabindex="0" style="align-items: flex-start;">
            <a 
                style="display: flex; align-items: flex-end; color: inherit;"
                href="/tasks/select-type?{{ http_build_query ( input::all ( ) ) }}" 
                tabindex="5">

                <span 
                    class="mdc-list-item__graphic" 
                    aria-hidden="true">

                    <span class="mdc-list-stepper-line--before"></span>
                    
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>

                    <span class="mdc-list-stepper-line--after"></span>
                </span>

                <span class="mdc-list-item__text">
                    <span class="mdc-list-item__primary-text">Select task type</span>
                    <span class="mdc-list-item__secondary-text">Select a type of task</span>                                        
                </span>
            </a>
        </li>
        <li class="mdc-list-item mdc-list-stepper--current" tabindex="0">    
            <span 
                class="mdc-list-item__graphic" 
                aria-hidden="true">

                <span class="mdc-list-stepper-line--before"></span>
                
                <span>3</span>
            </span>


            <span class="mdc-list-item__text">
                <span class="mdc-list-item__primary-text">Describe task</span>
                <span class="mdc-list-item__secondary-text">Create that task</span>                                        
            </span>
        </li>
    </ol>

    <form method="POST" action="/tasks/" style="padding: 0 8px;">
        @foreach ( $goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

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

        @include ( 'partials.input.fab', [ 'action' => 'save' ] )
    </form>

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
@endsection