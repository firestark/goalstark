@extends ( 'master' )

@section ( 'page' )

    <div style="display: grid; grid-template-rows: 1fr auto; height: 100%;">    
        <div class="slider">
            <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav"/>
            <input type="radio" name="slider" title="slide2" class="slider__nav"/>
            <input type="radio" name="slider" title="slide3" class="slider__nav"/>
            <input type="radio" name="slider" title="slide4" class="slider__nav"/>
            <div class="slider__inner">
                <div class="slider__contents">
                    <i class="slider__image fab fa-galactic-senate"></i>
                    <h2 class="slider__caption">Create your goals</h2>
                    <p class="slider__txt">Achieve your goals by completing trackable tasks.</p>
                </div>
                <div class="slider__contents">
                    <i class="slider__image fab fa-jedi-order"></i>
                    <h2 class="slider__caption">Add your tasks</h2>
                    <p class="slider__txt">Choose from a range of tasks.</p>
                </div>
                <div class="slider__contents">
                    <i class="slider__image fab fa-old-republic"></i>
                    <h2 class="slider__caption">television</h2>
                    <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                </div>
                <div class="slider__contents">
                    <i class="slider__image fab fa-galactic-republic"></i>
                    <h2 class="slider__caption">diamond</h2>
                    <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cupiditate omnis possimus illo quos, corporis minima!</p>
                </div>
            </div>
        </div>

        <footer class="mdc-wizard">
            <section class="mdc-wizard__section mdc-wizard__section--align-end">
                <a href="/goals/" class="mdc-button">
                    <span class="mdc-button__label">GET STARTED</span>
                    <svg class="mdc-button__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </a>
            </section>
        </footer>
    </div>
@endsection