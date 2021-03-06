<div class="mdc-text-field" id="saturated-fats-field">
    <input 
        type="number" 
        id="saturated-fats" name="saturated-fats"
        class="mdc-text-field__input"
        required
        step="any"
        value="{{ $value ?? '' }}">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="saturated-fats">Saturated fats</label>
    <div class="mdc-line-ripple"></div>
</div>


@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'saturated-fats-field' ) );
    </script>    
@endsection