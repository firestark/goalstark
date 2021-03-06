@extends ( 'apps.food-tracker.page.overview' )

@section ( 'content' )
    @if ( count ( $products ) )
        <section class="mdc-card">
            <ul class="mdc-list mdc-list--two-line linked">
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
        </section>
    @endif    
@endsection