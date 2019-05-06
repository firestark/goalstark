@extends ( 'page.overview' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/apps/' ] )
@endsection

@section ( 'title' )
    Consumptions
@endsection

@section ( 'tab-bar' )
    <div class="mdc-tab-bar mdc-tab-bar--top" role="tablist">
        <div class="mdc-tab-scroller">
            <div class="mdc-tab-scroller__scroll-area">
                <div class="mdc-tab-scroller__scroll-content">
                    
                    <a href="/apps/food-tracker" class="mdc-tab {{ ( request::uri ( ) === "/apps/food-tracker" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Consumptions</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/apps/food-tracker" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>

                    <a href="/apps/food-tracker/products" class="mdc-tab {{ ( request::uri ( ) === "/apps/food-tracker/products" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                        <span class="mdc-tab__content">
                            <span class="mdc-tab__text-label">Products</span>
                        </span>
                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/apps/food-tracker/products" ) ? 'mdc-tab-indicator--active' : '' }}">
                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                        </span>
                        <span class="mdc-tab__ripple"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ( 'content' )
    @if ( count ( $consumations ) )
        <section class="mdc-card">
            <ul class="mdc-list mdc-list--two-line mdc-list--linked">
                @foreach ( $consumations as $consumation )
                    <li class="mdc-list-item" tabindex="0">
                        <span class="mdc-list-item__text">
                            <span class="mdc-list-item__primary-text">{{ $consumation->product->name }}</span>
                            <span class="mdc-list-item__secondary-text">{{  date ( 'M d, Y ', $consumation->date ) }}</span>
                        </span>

                        <a href="/apps/food-tracker/remove/{{ $consumation->id }}" class="mdc-list-item__meta" aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path fill="none" d="M0 0h24v24H0V0z"/>
                                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                            </svg>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endif
    
    @include ( 'partials.link.fab', [ 'link' => '/apps/food-tracker/add', 'action' => 'add' ] )
@endsection