<div class="mdc-text-field form-field" id="sugars-field">
    <input 
        type="number" 
        id="sugars" name="sugars"
        class="mdc-text-field__input"
        required
        step="any"
        value="{{ $value ?? '' }}">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="sugars">Sugars</label>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'sugars-field' ) );
    </script>    
@endsection