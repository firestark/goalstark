@extends('master')

@section('navigation')
    <a href="/" class="material-icons mdc-top-app-bar__navigation-icon">arrow_back</a>
@endsection

@section('content')
    <form method="POST" action="/">        
        <div id="description-input" class="mdc-text-field mdc-text-field--textarea">
            <textarea id="description" name="description" class="mdc-text-field__input" required></textarea>
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label for="goal" class="mdc-floating-label">Goal description</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>

        <button type="submit" class="mdc-fab">
            <span class="mdc-fab__icon material-icons">check</span>
        </button>
    </form>
@endsection


@section('mdc-js')
    <script>
        mdc.ripple.MDCRipple.attachTo(document.querySelector('.mdc-fab'));
        mdc.textField.MDCTextField.attachTo(document.querySelector('.mdc-text-field'));        
    </script>
@endsection