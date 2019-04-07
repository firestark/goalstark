@extends('master')

@section('navigation')
    <a href="/" class="mdc-top-app-bar__navigation-icon">
       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0V0z"/>
            <path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20v-2z"/>
        </svg>
    </a>
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
                value="{{ date('Y-m-d') }}" 
                min="{{ date('Y-m-d') }}">
            <label class="mdc-floating-label" for="complete-by">Due date</label>
            <div class="mdc-line-ripple"></div>
        </div>

        
        <button type="submit" class="mdc-fab">
            <span class="mdc-fab__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                    <path opacity=".3" d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8 8-3.59 8-8-3.59-8-8-8zm-2 13l-4-4 1.41-1.41L10 14.17l6.59-6.59L18 9l-8 8z"/><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8zm4.59-12.42L10 14.17l-2.59-2.58L6 13l4 4 8-8z"/>
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