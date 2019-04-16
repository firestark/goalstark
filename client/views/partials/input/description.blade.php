<div id="description-field" class="mdc-text-field mdc-text-field--textarea">
    <textarea id="description" name="description" class="mdc-text-field__input" required>{{ $value }}</textarea>
    <div class="mdc-notched-outline">
        <div class="mdc-notched-outline__leading"></div>
        <div class="mdc-notched-outline__notch">
            <label for="goal" class="mdc-floating-label">Description</label>
        </div>
        <div class="mdc-notched-outline__trailing"></div>
    </div>
</div>

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'description-field' ) );
    </script>    
@endsection