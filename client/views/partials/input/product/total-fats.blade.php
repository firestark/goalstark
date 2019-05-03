<div class="mdc-text-field" id="total-fats-field">
    <input 
        type="number" 
        id="total-fats" name="total-fats"
        class="mdc-text-field__input"
        required
        step="any"
        value="{{ $value ?? '' }}">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="total-fats">Total fats</label>
    <div class="mdc-line-ripple"></div>
</div>


@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'total-fats-field' ) );
    </script>    
@endsection