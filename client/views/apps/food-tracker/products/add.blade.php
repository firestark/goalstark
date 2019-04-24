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
                    required>
                <label class="mdc-floating-label" for="name">Name</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <div class="mdc-text-field" id="per-field">
                <input 
                    type="text" 
                    id="per" name="per"
                    class="mdc-text-field__input"
                    required>
                <label class="mdc-floating-label" for="per">Per</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <section style="margin-bottom: 32px;">
                <h3 class="mdc-typography--caption">Fats</h3>
                
                <div class="mdc-text-field" id="saturated-fats-field">
                    <input 
                        type="number" 
                        id="saturated-fats" name="saturated-fats"
                        class="mdc-text-field__input"
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
                        required
                        step="any">
                    <label class="mdc-floating-label" for="unsaturated-fats">Unsaturated fats</label>
                    <div class="mdc-line-ripple"></div>
                </div>
            </section>            

            <section style="margin-bottom: 32px;">
                <h3 class="mdc-typography--caption">Carbohydrates</h3>

                <div class="mdc-text-field" id="carbohydrates-total-field">
                    <input 
                        type="number" 
                        id="carbohydrates-total" name="carbohydrates-total"
                        class="mdc-text-field__input"
                        required
                        step="any">
                    <label class="mdc-floating-label" for="carbohydrates-total">Total</label>
                    <div class="mdc-line-ripple"></div>
                </div>

                <div class="mdc-text-field" id="fiber-field">
                    <input 
                        type="number" 
                        id="fiber" name="fiber"
                        class="mdc-text-field__input"
                        required
                        step="any">
                    <label class="mdc-floating-label" for="fiber">Fiber</label>
                    <div class="mdc-line-ripple"></div>
                </div>

                <div class="mdc-text-field" id="sugars-field">
                    <input 
                        type="number" 
                        id="sugars" name="sugars"
                        class="mdc-text-field__input"
                        required
                        step="any">
                    <label class="mdc-floating-label" for="sugars">Sugars</label>
                    <div class="mdc-line-ripple"></div>
                </div>
            </section>

            <div class="mdc-text-field" id="protein-field">
                <input 
                    type="number" 
                    id="protein" name="protein"
                    class="mdc-text-field__input"
                    required
                    step="any">
                <label class="mdc-floating-label" for="protein">Protein</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <div class="mdc-text-field" id="salt-field">
                <input 
                    type="number" 
                    id="salt" name="salt"
                    class="mdc-text-field__input"
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
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'per-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'protein-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'sugars-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'saturated-fats-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'unsaturated-fats-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'salt-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'fiber-field' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'carbohydrates-total-field' ) );
    </script>    
@endsection