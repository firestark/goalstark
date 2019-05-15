<div class="mdc-text-field mdc-text-field--with-trailing-icon form-field" id="completions-field">
    <input 
        type="number" 
        id="completions" name="completions"
        class="mdc-text-field__input"
        value="{{ $value ?? 1 }}"
        required
        min="1"
        {{ ( isset ( $autofocus ) and $autofocus ) ? 'autofocus' : '' }}
        onFocus="this.select();">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ?  'mdc-floating-label--float-above' : '' }}" for="completions">Completions</label>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'completions-field' ) );
    </script>    
@endsection