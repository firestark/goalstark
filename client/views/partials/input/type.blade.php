<div id="type-field">
    <div class="mdc-form-field" id="once-type-field">
        <div class="mdc-radio" id="once-radio">
            <input 
                class="mdc-radio__native-control" 
                type="radio" 
                id="once" 
                value="once" 
                name="type"
                {{ ( $value === 'once' ) ? 'checked' : '' }}>
            
            <div class="mdc-radio__background">
                <div class="mdc-radio__outer-circle"></div>
                <div class="mdc-radio__inner-circle"></div>
            </div>
        </div>
        <label for="once">Once</label>
    </div>

    <div class="mdc-form-field" id="daily-type-field">
        <div class="mdc-radio" id="daily-radio">
            <input 
                class="mdc-radio__native-control" 
                type="radio" 
                id="daily" 
                value="daily" 
                name="type"
                {{ ( $value === 'daily' ) ? 'checked' : '' }}>
            
            <div class="mdc-radio__background">
                <div class="mdc-radio__outer-circle"></div>
                <div class="mdc-radio__inner-circle"></div>
            </div>
        </div>
        <label for="daily">Daily</label>
    </div>
</div>

@section ( 'js' )
    @parent
    
    <script>
        const onceRadio = mdc.radio.MDCRadio.attachTo ( document.getElementById ( 'once-radio' ) );
        const onceField = mdc.formField.MDCFormField.attachTo ( document.getElementById ( 'once-type-field' ) );
        onceField.input = onceRadio;

        const dailyRadio = mdc.radio.MDCRadio.attachTo ( document.getElementById ( 'daily-radio' ) );
        const dailyField = mdc.formField.MDCFormField.attachTo ( document.getElementById ( 'daily-type-field' ) );
        dailyField.input = dailyRadio;
    </script>
@endsection