<div class="mdc-text-field mdc-text-field--with-trailing-icon" id="count-field">
    <input 
        type="number" 
        id="count" name="count"
        class="mdc-text-field__input"
        value="{{ $value ?? 1 }}"
        required
        min="1"
        {{ ( isset ( $autofocus ) and $autofocus ) ? 'autofocus' : '' }}
        onFocus="this.select();">
    <label class="mdc-floating-label {{ ( isset ( $value ) and $value ) ?  'mdc-floating-label--float-above' : '' }}" for="count">Count</label>
    {{-- <span class="mdc-text-field__icon">
        g
    </span> --}}
    <div class="mdc-line-ripple"></div>
</div>

@section ( 'js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'count-field' ) );
    </script>    
@endsection