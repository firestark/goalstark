<div class="mdc-text-field form-field" id="protein-field">
    <input 
        type="number" 
        id="protein" name="protein"
        class="mdc-text-field__input"
        required
        step="any"
        value="{{ $value ?? '' }}"
        min="0">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="protein">Protein</label>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'protein-field' ) );
    </script>    
@endsection