@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/food-tracker/products' ] )
@endsection

@section ( 'title' )
    Add product
@endsection

@section ( 'content' )
    <form method="POST" action="/apps/food-tracker/products" style="padding: 16px 8px 80px;">
        
        @include ( 'partials.input.name' )
        @include ( 'partials.input.product.per' )

        <section style="margin-bottom: 32px;" class="mdc-text-field--group">
            <h3 class="mdc-typography--caption">Fats</h3>
            
            @include ( 'partials.input.product.total-fats' )
            @include ( 'partials.input.product.saturated-fats' )
        </section>            

        <section style="margin-bottom: 32px;" class="mdc-text-field--group">
            <h3 class="mdc-typography--caption">Carbohydrates</h3>

            @include ( 'partials.input.product.total-carbohydrates' )
            @include ( 'partials.input.product.fibers' )
            @include ( 'partials.input.product.sugars' )
        </section>

        
        @include ( 'partials.input.product.protein' )
        @include ( 'partials.input.product.salt' )
        @include ( 'partials.input.fab', [ 'action' => 'save' ] )            
    </form>
@endsection