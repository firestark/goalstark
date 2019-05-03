@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/food-tracker/products' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">
        <form method="POST" action="/apps/food-tracker/products/{{ $product->id }}">
            
            @include ( 'partials.input.name', [ 'value' => $product->name ] )
            @include ( 'partials.input.product.per', [ 'value' => $product->nutrition->per ] )

            <section style="margin-bottom: 32px;">
                <h3 class="mdc-typography--caption">Fats</h3>

                @include ( 'partials.input.product.total-fats', [ 'value' => $product->nutrition->fats->total ] )
                @include ( 'partials.input.product.saturated-fats', [ 'value' => $product->nutrition->fats->saturated ] )
            </section>            

            <section style="margin-bottom: 32px;">
                <h3 class="mdc-typography--caption">Carbohydrates</h3>

                @include ( 'partials.input.product.total-carbohydrates', [ 'value' => $product->nutrition->carbohydrates->total] )
                @include ( 'partials.input.product.fibers', [ 'value' => $product->nutrition->carbohydrates->fiber ] )
                @include ( 'partials.input.product.sugars', [ 'value' => $product->nutrition->carbohydrates->sugars ] )
            </section>


            @include ( 'partials.input.product.protein', [ 'value' => $product->nutrition->protein ] )
            @include ( 'partials.input.product.salt', [ 'value' => $product->nutrition->salt ] )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
        </form>
    </section>
@endsection