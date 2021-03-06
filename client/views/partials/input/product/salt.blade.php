<div class="mdc-text-field" id="salt-field">
    <input 
        type="number" 
        id="salt" name="salt"
        class="mdc-text-field__input"
        required
        step="any"
        value="{{ $value ?? '' }}">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="salt">Salt</label>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'salt-field' ) );
    </script>    
@endsection