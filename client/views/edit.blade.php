@extends('page')

@section('navigation')
    <a href="/" class="mdc-top-app-bar__navigation-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0V0z"/>
            <path d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42-.39-.39-1.02-.39-1.41 0l-6.59 6.59c-.39.39-.39 1.02 0 1.41l6.59 6.59c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z"/>
        </svg>
    </a>
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

        <div class="mdc-text-field mdc-text-field--with-leading-icon" id="complete-by-input">
            <span class="material-icons mdc-text-field__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0V0z"/><path opacity=".3" d="M5 8h14V6H5z"/>
                    <path d="M19 4h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V10h14v10zm0-12H5V6h14v2zm-7 5h5v5h-5z"/>
                </svg>
            </span>
            <input 
                type="date" 
                id="complete-by" name="completeBy"
                class="mdc-text-field__input"
                value="{{ date('Y-m-d', $goal->completeBy) }}" 
                min="{{ date('Y-m-d') }}">
            <label class="mdc-floating-label" for="complete-by">Due date</label>
            <div class="mdc-line-ripple"></div>
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
@endsection

@section('mdc-js')
    <script>
        mdc.ripple.MDCRipple.attachTo(document.querySelector('.mdc-fab'));
        mdc.textField.MDCTextField.attachTo(document.getElementById('description-input'));
        mdc.textField.MDCTextField.attachTo(document.getElementById('complete-by-input'));       
    </script>
@endsection