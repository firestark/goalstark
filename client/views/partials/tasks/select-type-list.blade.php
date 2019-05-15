<ul class="mdc-list mdc-list--two-line" role="radiogroup">
    <h3 class="mdc-list-group__subheader">Simple tasks</h3>

    <li class="mdc-list-item" role="radio" aria-checked="{{ ! input::has ( 'type' ) ? 'true' : 'false' }}" tabindex="1">
        <span class="mdc-list-item__graphic">
            <div class="mdc-radio">
                <input class="mdc-radio__native-control"
                    type="radio"
                    id="type-1"
                    name="type"
                    value="due"
                    checked="{{ ! input::has ( 'type' ) ? 'true' : 'false' }}">
                <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                </div>
            </div>
        </span>
        <label class="mdc-list-item__text" for="type-1" style="width: 100%;">
            <span class="mdc-list-item__text" style="width: 100%;">
                <span class="mdc-list-item__primary-text">Due task</span>
                <span class="mdc-list-item__secondary-text">A due task executed once</span>
            </span>
        </label>
    </li>

    <li class="mdc-list-item" role="radio" aria-checked="{{ input::get ( 'type' ) === 'daily' ? 'true' : 'false' }}" tabindex="2">
        <span class="mdc-list-item__graphic">
            <div class="mdc-radio">
                <input class="mdc-radio__native-control"
                    type="radio"
                    id="type-2"
                    name="type"
                    value="daily"
                    checked="{{ input::get ( 'type' ) === 'daily' ? 'true' : 'false' }}">
                <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                </div>
            </div>
        </span>
        <label class="mdc-list-item__text" for="type-2" style="width: 100%;">
            <span class="mdc-list-item__text" style="width: 100%;">
                <span class="mdc-list-item__primary-text">Daily task</span>
                <span class="mdc-list-item__secondary-text">A task that has to be done daily</span>
            </span>
        </label>
    </li>

    <li class="mdc-list-item" role="radio" aria-checked="{{ input::get ( 'type' ) === 'count' ? 'true' : 'false' }}" tabindex="3">
        <span class="mdc-list-item__graphic">
            <div class="mdc-radio">
                <input class="mdc-radio__native-control"
                    type="radio"
                    id="type-3"
                    name="type"
                    value="count"
                    checked="{{ input::get ( 'type' ) === 'count' ? 'true' : 'false' }}">
                <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                </div>
            </div>
        </span>
        <label class="mdc-list-item__text" for="type-3" style="width: 100%;">
            <span class="mdc-list-item__text" style="width: 100%;">
                <span class="mdc-list-item__primary-text">Count task</span>
                <span class="mdc-list-item__secondary-text">A count task executed once</span>
            </span>
        </label>
    </li>

    <h3 class="mdc-list-group__subheader">Food consumption tasks</h3>

    <li class="mdc-list-item" role="radio" aria-checked="{{ input::get ( 'type' ) === 'protein' ? 'true' : 'false' }}" tabindex="4">
        <span class="mdc-list-item__graphic">
            <div class="mdc-radio">
                <input class="mdc-radio__native-control"
                    type="radio"
                    id="type-4"
                    name="type"
                    value="protein"
                    checked="{{ input::get ( 'type' ) === 'protein' ? 'true' : 'false' }}">
                <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                </div>
            </div>
        </span>
        <label class="mdc-list-item__text" for="type-4" style="width: 100%;">
            <span class="mdc-list-item__text" style="width: 100%;">
                <span class="mdc-list-item__primary-text">Protein task</span>
                <span class="mdc-list-item__secondary-text">Daily protein consumption task</span>
            </span>
        </label>
    </li>

    <li class="mdc-list-item" role="radio" aria-checked="{{ input::get ( 'type' ) === 'product count' ? 'true' : 'false' }}" tabindex="5">
        <span class="mdc-list-item__graphic">
            <div class="mdc-radio">
                <input class="mdc-radio__native-control"
                    type="radio"
                    id="type-5"
                    name="type"
                    value="product count"
                    checked="{{ input::get ( 'type' ) === 'product count' ? 'true' : 'false' }}">
                <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                </div>
            </div>
        </span>
        <label class="mdc-list-item__text" for="type-5" style="width: 100%;">
            <span class="mdc-list-item__text" style="width: 100%;">
                <span class="mdc-list-item__primary-text">Product count task</span>
                <span class="mdc-list-item__secondary-text">A product count task executed once</span>
            </span>
        </label>
    </li>
</ul>

@section ( 'js' )
    @parent

    <script>
        const list = mdc.list.MDCList.attachTo ( document.querySelector ( '.mdc-list' ) );
        const listItemRipples = list.listElements.map ( ( listItemEl ) => mdc.ripple.MDCRipple.attachTo ( listItemEl ) );
    </script>
@endsection