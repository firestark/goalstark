<div class="mdc-text-field" id="per-field">
    <input 
        type="text"
        id="per" name="per"
        class="mdc-text-field__input"
        required
        value="{{ $value ?? '' }}">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="saturated-fats">Per</label>
    <div class="mdc-line-ripple"></div>
</div>


@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'per-field' ) );
    </script>    
@endsection