<div class="mdc-text-field form-field" id="kcal-field">
    <input 
        type="number" 
        id="kcal" name="kcal"
        class="mdc-text-field__input"
        required
        step="1"
        value="{{ $value ?? '' }}"
        min="0">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="kcal">Kcal</label>
    <div class="mdc-line-ripple"></div>
</div>


@section ( 'js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'kcal-field' ) );
    </script>    
@endsection