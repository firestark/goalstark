<div class="mdc-text-field" id="fibers-field">
    <input 
        type="number" 
        id="fibers" name="fibers"
        class="mdc-text-field__input"
        required
        step="any"
        value="{{ $value ?? '' }}">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="fibers">Fibers</label>
    <div class="mdc-line-ripple"></div>
</div>


@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'fibers-field' ) );
    </script>    
@endsection