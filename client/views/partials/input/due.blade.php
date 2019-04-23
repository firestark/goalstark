<div class="mdc-text-field mdc-text-field--with-leading-icon" id="due-field">
    <span class="material-icons mdc-text-field__icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0V0z"/>
            <path d="M19 4h-1V3c0-.55-.45-1-1-1s-1 .45-1 1v1H8V3c0-.55-.45-1-1-1s-1 .45-1 1v1H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15c0 .55-.45 1-1 1H6c-.55 0-1-.45-1-1V9h14v10zM7 11h2v2H7zm4 0h2v2h-2zm4 0h2v2h-2z"/>
        </svg>
    </span>            
    <input 
        type="date" 
        id="due" name="due"
        class="mdc-text-field__input"
        value="{{ date ( 'Y-m-d', $value ) }}" 
        min="{{ date ( 'Y-m-d', $value ) }}">
    <label class="mdc-floating-label mdc-floating-label--float-above" for="due">Due date</label>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'due-field' ) );
    </script>    
@endsection