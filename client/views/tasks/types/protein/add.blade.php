@extends ( 'tasks.add' )

@section ( 'description')
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
@endsection

@section ( 'form-fields' )
    @include ( 'partials.input.protein', [ 'value' => 0, 'autofocus' => true ] )
@endsection