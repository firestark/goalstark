@extends ( 'apps.food-tracker.page.overview' )

@section ( 'content' )
    @if ( count ( $products ) )
        <section class="mdc-card">
            <ul class="mdc-list linked">
                @foreach ( $products as $product )
                    <li class="mdc-list-item" tabindex="0">
                        <a href="/apps/food-tracker/products/{{ $product->name }}">
                            <span class="mdc-list-item__text">{{ $product->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
    
    @include ( 'partials.link.fab', [ 'link' => '/apps/food-tracker/products/add', 'action' => 'add' ] )
@endsection