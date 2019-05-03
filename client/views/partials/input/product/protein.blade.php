<div class="mdc-text-field" id="protein-field">
    <input 
        type="number" 
        id="protein" name="protein"
        class="mdc-text-field__input"
        required
        step="any"
        value="{{ $value ?? '' }}"">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="protein">Protein</label>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'protein-field' ) );
    </script>    
@endsection