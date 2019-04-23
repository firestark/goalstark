@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/food-tracker/products' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">
        <form method="POST" action="/apps/food-tracker/products">
            
            <div class="mdc-text-field" id="name-field">
                <input 
                    type="text" 
                    id="name" name="name"
                    class="mdc-text-field__input"
                    value=""
                    required>
                <label class="mdc-floating-label" for="name">Name</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <div class="mdc-text-field" id="saturated-fats-field">
                <input 
                    type="number" 
                    id="saturated-fats" name="saturated-fats"
                    class="mdc-text-field__input"
                    value=""
                    required
                    step="any">
                <label class="mdc-floating-label" for="saturated-fats">Saturated fats</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <div class="mdc-text-field" id="unsaturated-fats-field">
                <input 
                    type="number" 
                    id="unsaturated-fats" name="unsaturated-fats"
                    class="mdc-text-field__input"
                    value=""
                    required
                    step="any">
                <label class="mdc-floating-label" for="unsaturated-fats">Unsaturated fats</label>
                <div class="mdc-line-ripple"></div>
            </div>
            
            <div class="mdc-text-field" id="protein-field">
                <input 
                    type="number" 
                    id="protein" name="protein"
                    class="mdc-text-field__input"
                    value=""
                    required
                    step="any">
                <label class="mdc-floating-label" for="protein">Protein</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <div class="mdc-text-field" id="sugars-field">
                <input 
                    type="number" 
                    id="sugars" name="sugars"
                    class="mdc-text-field__input"
                    value=""
                    required
                    step="any">
                <label class="mdc-floating-label" for="sugars">Sugars</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <div class="mdc-text-field" id="salt-field">
                <input 
                    type="number" 
                    id="salt" name="salt"
                    class="mdc-text-field__input"
                    value=""
                    required
                    step="any">
                <label class="mdc-floating-label" for="salt">Salt</label>
                <div class="mdc-line-ripple"></div>
            </div>

            @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
        </form>
    </section>
@endsection

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'name-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'protein-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'sugars-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'saturated-fats-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'unsaturated-fats-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'salt-field' ) );
    </script>    
@endsection