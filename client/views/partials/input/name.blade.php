<div class="mdc-text-field form-field" id="name-field">
    <input 
        type="text" 
        id="name" name="name"
        class="mdc-text-field__input"
        required
        value="{{ $value ?? '' }}"">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ? 'mdc-floating-label--float-above' : '' }}" for="name">Name</label>
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'name-field' ) );
    </script>    
@endsection