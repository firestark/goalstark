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
            
            <div class="mdc-text-field" id="protein-field">
                <input 
                    type="number" 
                    id="protein" name="protein"
                    class="mdc-text-field__input"
                    value=""
                    required>
                <label class="mdc-floating-label" for="protein">Protein</label>
                <div class="mdc-line-ripple"></div>
            </div>

            <div class="mdc-text-field" id="sugars-field">
                <input 
                    type="number" 
                    id="sugars" name="sugars"
                    class="mdc-text-field__input"
                    value=""
                    required>
                <label class="mdc-floating-label" for="sugars">Sugars</label>
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
    </script>    
@endsection