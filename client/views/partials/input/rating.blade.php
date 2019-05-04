<div style="display: inline-block; position: relative; z-index: 1;">
    <svg class="svg-icon__sprite">
        <defs>
            <symbol id="star" viewbox="0 0 32 32">
                <title>Star icon.</title>
                <desc>For ratings.</desc>
                <path d="M12.224 11.623L16 0l3.776 11.623H32l-9.888 6.865 3.776 11.417L16 22.668 6.112 29.85l3.776-11.362L0 11.623h12.224"></path>
            </symbol>
        </defs>
    </svg>

    <fieldset>
        <div class="rating rating__fx--1 flexy__item">
            <input type="radio" id="value-1-4" name="rating" value="5" {{ ( $value === 5 ) ? 'checked' : '' }}>
            <label class="rating__label sparks" for="value-1-4">
                <svg class="rating__label__icon svg-icon">
                    <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
            </label>
            
            <input type="radio" id="value-1-3" name="rating" value="4" {{ ( $value === 4 ) ? 'checked' : '' }}>
            <label class="rating__label" for="value-1-3">
                <svg class="rating__label__icon svg-icon">
                    <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
            </label>
            
            <input type="radio" id="value-1-2" name="rating" value="3" {{ ( $value === 3 ) ? 'checked' : '' }}>
            <label class="rating__label" for="value-1-2">
                <svg class="rating__label__icon svg-icon">
                    <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
            </label>
            
            <input type="radio" id="value-1-1" name="rating" value="2" {{ ( $value === 2 ) ? 'checked' : '' }}>
            <label class="rating__label" for="value-1-1">
                <svg class="rating__label__icon svg-icon">
                    <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
            </label>
            
            <input type="radio" id="value-1-0" name="rating" value="1" {{ ( $value === 1 ) ? 'checked' : '' }}>
            <label class="rating__label" for="value-1-0">
                <svg class="rating__label__icon svg-icon">
                    <use class="use" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#star"></use>
                </svg>
            </label>
            
            <div class="rating__background"></div>
        </div>
    </fieldset>

    @if ( $caption )
        <h3 style="padding-left: 16px; color: var(--mdc-theme-text-secondary-on-light);" class="mdc-typography--caption">{{ $caption }}</h3>
    @endif
</div>