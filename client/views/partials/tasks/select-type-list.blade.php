<ul class="mdc-list mdc-list--two-line" role="radiogroup">
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

    <li class="mdc-list-item" role="radio" aria-checked="{{ input::get ( 'type' ) === 'protein' ? 'true' : 'false' }}" tabindex="3">
        <span class="mdc-list-item__graphic">
            <div class="mdc-radio">
                <input class="mdc-radio__native-control"
                    type="radio"
                    id="type-3"
                    name="type"
                    value="protein"
                    checked="{{ input::get ( 'type' ) === 'protein' ? 'true' : 'false' }}">
                <div class="mdc-radio__background">
                    <div class="mdc-radio__outer-circle"></div>
                    <div class="mdc-radio__inner-circle"></div>
                </div>
            </div>
        </span>
        <label class="mdc-list-item__text" for="type-3" style="width: 100%;">
            <span class="mdc-list-item__text" style="width: 100%;">
                <span class="mdc-list-item__primary-text">Protein task</span>
                <span class="mdc-list-item__secondary-text">Daily protein consumption task</span>
            </span>
        </label>
    </li>
</ul>