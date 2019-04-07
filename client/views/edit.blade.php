@extends('master')

@section('navigation')
    <a href="/" class="material-icons mdc-top-app-bar__navigation-icon">arrow_back</a>
@endsection

@section('content')
    <form method="POST" action="/{{ $goal->id }}">
        <input type="hidden" name="id" value="{{ $goal->id }}">
        <div id="description-input" class="mdc-text-field mdc-text-field--textarea">
            <textarea id="description" name="description" class="mdc-text-field__input" rows="8" cols="40" required>{{ $goal->description }}</textarea>
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label for="goal" class="mdc-floating-label">Goal description</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>

        <div class="mdc-text-field mdc-text-field--no-label">
            <input 
                type="date" 
                id="completeBy" name="completeBy"
                class="mdc-text-field__input"
                value="{{ date('Y-m-d', $goal->completeBy) }}" 
                min="{{ date('Y-m-d') }}">
            <div class="mdc-line-ripple"></div>
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