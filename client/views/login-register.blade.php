@extends ( 'master' )

@section ( 'page' )

    <main style="display: grid; grid-template-rows: auto 1fr; height: 100%;">
        <section id="login">
            <form action="{{ request::uri ( ) }}" method="POST" autocomplete="{{ ( request::uri ( ) === '/login' ) ? 'on' : 'off' }}">                
                <div id="username-input" class="mdc-text-field mdc-text-field--with-leading-icon" style="margin-bottom: 32px;">
                    <span class="mdc-text-field__icon" tabindex="0" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"/>
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/>
                        </svg>
                    </span>
                    <input type="text" id="username" name="username" class="mdc-text-field__input" required autocomplete="{{ ( request::uri ( ) === '/login' ) ? 'on' : 'new-password' }}">
                    <label class="mdc-floating-label" for="username">Username</label>
                    <div class="mdc-line-ripple"></div>
                </div>

                <div id="password-input" class="mdc-text-field mdc-text-field--with-leading-icon">
                    <span class="mdc-text-field__icon" tabindex="0" role="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"/>
                            <path d="M12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm6-5h-1V6c0-2.76-2.24-5-5-5-2.28 0-4.27 1.54-4.84 3.75-.14.54.18 1.08.72 1.22.53.14 1.08-.18 1.22-.72C9.44 3.93 10.63 3 12 3c1.65 0 3 1.35 3 3v2H6c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V10c0-1.1-.9-2-2-2zm0 11c0 .55-.45 1-1 1H7c-.55 0-1-.45-1-1v-8c0-.55.45-1 1-1h10c.55 0 1 .45 1 1v8z"/>
                        </svg>
                    </span>
                    <input type="password" id="password" name="password" class="mdc-text-field__input" required autocomplete="{{ ( request::uri ( ) === '/login' ) ? 'on' : 'new-password' }}">
                    <label class="mdc-floating-label" for="password">Password</label>
                    <div class="mdc-line-ripple"></div>
                </div>

                <button type="submit" class="mdc-button mdc-button--raised">
                    <span class="mdc-button__label">{{ ( request::uri ( ) === '/login' ) ? 'login' : 'register' }}</span>
                </button>
            </form>

        </section>

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
    </main>

@endsection

@section ( 'js' )
    {{-- <script>
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'username-input' ) );
        mdc.textField.MDCTextField.attachTo ( document.getElementById ( 'password-input' ) );
        
        mdc.ripple.MDCRipple.attachTo ( document.querySelector ( '.mdc-button' ) );
        mdc.tabBar.MDCTabBar.attachTo ( document.querySelector ( '.mdc-tab-bar' ) );
    </script> --}}
@endsection