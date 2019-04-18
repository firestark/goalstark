<div class="mdc-top-app-bar__row mdc-top-app-bar__tabrow">
    <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
        <div class="mdc-tab-bar" role="tablist">
            <div class="mdc-tab-scroller">
                <div class="mdc-tab-scroller__scroll-area">
                    <div class="mdc-tab-scroller__scroll-content">
                        <a href="/" id="all">
                            <button class="mdc-tab {{ ( request::uri ( ) === '/' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__text-label">Goals</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </button>
                        </a>
                        <a href="/tasks" id="tasks">
                            <button class="mdc-tab {{ ( request::uri ( ) === '/tasks' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__text-label">Tasks</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/tasks' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </button>
                        </a>
                        <a href="/apps" id="apps">
                            <button class="mdc-tab {{ ( request::uri ( ) === '/apps' ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                <span class="mdc-tab__content">
                                    <span class="mdc-tab__text-label">Apps</span>
                                </span>
                                <span class="mdc-tab-indicator {{ ( request::uri ( ) === '/apps' ) ? 'mdc-tab-indicator--active' : '' }}">
                                    <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                </span>
                                <span class="mdc-tab__ripple"></span>
                            </button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>