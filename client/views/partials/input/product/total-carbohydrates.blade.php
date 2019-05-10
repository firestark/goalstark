<div class="mdc-text-field" id="total-carbohydrates-field">
    <input 
        type="number" 
        id="total-carbohydrates" name="total-carbohydrates"
        class="mdc-text-field__input"
        required
        step="any"
        value="{{ $value ?? '' }}">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="total-carbohydrates">Total carbohydrates</label>
    <div class="mdc-line-ripple"></div>
</div>


@section ( 'js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'total-carbohydrates-field' ) );
    </script>    
@endsection