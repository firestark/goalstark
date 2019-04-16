@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/{$goal}/tasks" ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">    
        <form method="POST" action="/{{ $goal }}/tasks">
            <div id="description-field" class="mdc-text-field mdc-text-field--textarea">
                <textarea id="description" name="description" class="mdc-text-field__input" rows="8" cols="40" required></textarea>
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="description" class="mdc-floating-label">Task description</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>

            <button type="submit" class="mdc-fab">
                <span class="mdc-fab__icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                    </svg>
                </span>
            </button>
        </form>
    </section>
@endsection

@section ( 'mdc-js' )
    <script>
        mdc.ripple.MDCRipple.attachTo ( document.querySelector ( '.mdc-fab' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'description-field' ) );
    </script>
@endsection