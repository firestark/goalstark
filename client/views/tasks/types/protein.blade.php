<div style="text-align: center; margin: 16px auto 56px; width: 230px;">

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

<form method="POST" action="/tasks/{{ $task->id }}" style="display: grid; grid-template-rows: 1fr auto; height: 100%;">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

        <input type="hidden" name="type" value="protein">
        @include ( 'partials.input.protein', [ 'value' => $task->goal ] )
    </section>

    <footer class="mdc-bottom-app-bar" style="width: 100%; position: relative;">
        <button class="mdc-bottom-app-bar__fab mdc-bottom-app-bar__fab--center-cut mdc-fab">
            <span class="mdc-fab__icon" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"/>
                </svg>
            </span>
        </button>

        <div class="mdc-bottom-app-bar__row">
            <section class="mdc-bottom-app-bar__section mdc-bottom-app-bar__section--align-end">
                <span class="mdc-bottom-app-bar__action-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
                        <path d="M4 11v2h8v-2H4zm15 7h-2V7.38L14 8.4V6.7L18.7 5h.3v13z"/>
                    </svg>
                </span>
                <span class="mdc-bottom-app-bar__action-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
                        <path d="M10 7H8v4H4v2h4v4h2v-4h4v-2h-4V7zm10 11h-2V7.38L15 8.4V6.7L19.7 5h.3v13z"/>
                    </svg>
                </span>
            </section>
        </div>
    </footer>
</form>