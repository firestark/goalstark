<form method="POST" action="/tasks/{{ $task->id }}" style="display: grid; grid-template-rows: 1fr auto; height: 100%;">
    <section style="overflow: overlay; padding: 16px 8px 80px;">
        @foreach ( $task->goals as $goal )
            <input type="hidden" name="goals[]" value="{{ $goal }}">
        @endforeach

        <input type="hidden" name="type" value="daily">
        @include ( 'partials.input.description', [ 'value' => $task->description ] )
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