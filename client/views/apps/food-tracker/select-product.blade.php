@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/food-tracker' ] )
@endsection

@section ( 'title' )
    Select product
@endsection

@section ( 'content' )
    @if ( count ( $products ) )
        <ul class="mdc-list mdc-list--two-line mdc-list--linked">
            @foreach ( $products as $product )
                <li class="mdc-list-item" tabindex="0">
                    <a href="/apps/food-tracker/add/{{ $product->id }}">
                        <span class="mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">{{ $product->name }}</span>
                            <span class="mdc-list-item__secondary-text">{{ $product->nutrition->per }}</span>
                        </span>
                    </a>
                </li>
            @endforeach
        </ul>
    @endif    
@endsection