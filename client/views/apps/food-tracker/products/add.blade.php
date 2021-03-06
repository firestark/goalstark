@extends ( 'page.details' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/food-tracker/products' ] )
@endsection

@section ( 'content' )
    <section class="mdc-card form-section">
        <form method="POST" action="/apps/food-tracker/products">
            
            @include ( 'partials.input.name' )
            @include ( 'partials.input.product.per' )

            <section style="margin-bottom: 32px;">
                <h3 class="mdc-typography--caption">Fats</h3>
                
                @include ( 'partials.input.product.total-fats' )
                @include ( 'partials.input.product.saturated-fats' )
            </section>            

            <section style="margin-bottom: 32px;">
                <h3 class="mdc-typography--caption">Carbohydrates</h3>

                @include ( 'partials.input.product.total-carbohydrates' )
                @include ( 'partials.input.product.fibers' )
                @include ( 'partials.input.product.sugars' )
            </section>

            
            @include ( 'partials.input.product.protein' )
            @include ( 'partials.input.product.salt' )
            @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
        </form>
    </section>
@endsection