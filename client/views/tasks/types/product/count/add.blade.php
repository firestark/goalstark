@extends ( 'tasks.add' )

@section ( 'form-fields' )
    @include ( 'partials.input.product.select', [ 'products' => $products ] )
    @include ( 'partials.input.count' )
@endsection


