<div>
    <div id="reasons-field" class="mdc-text-field mdc-text-field--textarea">
        <textarea id="reasons" name="reasons" class="mdc-text-field__input" required>{{ $value }}</textarea>
        <div class="mdc-notched-outline">
            <div class="mdc-notched-outline__leading"></div>
            <div class="mdc-notched-outline__notch">
                <label for="goal" class="mdc-floating-label {{ ( $value ) ?  'mdc-floating-label--float-above' : '' }}">Reasons</label>
            </div>
            <div class="mdc-notched-outline__trailing"></div>
        </div>
    </div>
    <div class="mdc-text-field-helper-line">
        <div class="mdc-text-field-helper-text mdc-text-field-helper-text--persistent">Define why this goal</div>
    </div>
</div>

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'reasons-field' ) );
    </script>    
@endsection