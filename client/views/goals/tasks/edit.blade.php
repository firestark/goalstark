@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => "/goals/{$goal->id}/tasks" ] )
@endsection

@section ( 'title' )
    My task
@endsection

@section ( 'top-app-bar-actions' )
    <span class="mdc-top-app-bar__action-item" id="info">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M0 0h24v24H0z" fill="none"/>
            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"/>
        </svg>
    </span>
@endsection

@section ( 'content' )

    <section class="content">        
        <form method="POST" action="/goals/{{ $goal->id}}/tasks/{{ $task->id }}" style="display: grid; grid-template-rows: 1fr auto;">
            <section style="overflow: overlay; padding: 16px 8px 80px;">
                <input type="hidden" name="type" value="{{ $type }}">
                @include ( 'tasks.types.' . $type . '.fields' )

                @include ( 'partials.input.fab', [ 'action' => 'save' ] )
            </section>
        </form>

        @include ( 'tasks.types.' . $type . '.status' )
    </section>


    <div 
        class="mdc-dialog"
        role="alertdialog"
        aria-modal="true"
        aria-labelledby="my-dialog-title"
        aria-describedby="my-dialog-content">
        
        <div class="mdc-dialog__container">
            <div class="mdc-dialog__surface">
                <!-- Title cannot contain leading whitespace due to mdc-typography-baseline-top() -->
                <h2 class="mdc-dialog__title" id="my-dialog-title"><!--
                -->Info<!--
            --></h2>
                <div class="mdc-dialog__content" id="my-dialog-content">
                    @include ( 'tasks.types.' . $type . '.description' )
                </div>
            
                <footer class="mdc-dialog__actions">
                    <button type="button" class="mdc-button mdc-dialog__button" data-mdc-dialog-action="yes">
                        <span class="mdc-button__label">OK</span>
                    </button>
                </footer>
            </div>
        </div>
        <div class="mdc-dialog__scrim"></div>
    </div>
@endsection

@section ( 'js' )
    @parent

    <script>
        const dialog = mdc.dialog.MDCDialog.attachTo ( document.querySelector ( '.mdc-dialog' ) );
        info.onclick = function ( ) {
            dialog.open ( );
        };
    </script>
@endsection