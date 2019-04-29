<div class="mdc-text-field mdc-text-field--with-trailing-icon" id="protein-field">
    <input 
        type="number" 
        id="protein" name="protein"
        class="mdc-text-field__input"
        value="{{ $value }}"
        required
        {{ ( isset ( $autofocus ) and $autofocus ) ? 'autofocus' : '' }}
        onFocus="this.select();">
    <label class="mdc-floating-label {{ ( $value ) ?  'mdc-floating-label--float-above' : '' }}" for="protein">Protein</label>
    <span class="mdc-text-field__icon">
        g
    </span>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'protein-field' ) );
    </script>    
@endsection