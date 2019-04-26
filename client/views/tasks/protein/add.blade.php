@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">    
        <form method="POST" action="/tasks/{{ $goalid }}/protein">

            <div class="mdc-text-field" id="protein-field">
                <input 
                    type="number" 
                    id="protein" name="protein"
                    class="mdc-text-field__input"
                    value="{{ $value ?? '' }}"
                    required>
                <label class="mdc-floating-label {{ ( isset ( $value ) ) ?  'mdc-floating-label--float-above' : '' }}" for="protein">Protein</label>
                <div class="mdc-line-ripple"></div>
            </div>            
            
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )
        </form>
    </section>
@endsection

@section ( 'mdc-js' )
    @parent
    
    <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'protein-field' ) );
    </script>    
@endsection