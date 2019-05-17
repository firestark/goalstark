@extends ( 'master' )

@section ( 'page' )

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

@endsection