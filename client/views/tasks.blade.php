@extends('page')

@section('navigation')
    <a href="/" class="mdc-top-app-bar__navigation-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0V0z"/>
            <path d="M19 11H7.83l4.88-4.88c.39-.39.39-1.03 0-1.42-.39-.39-1.02-.39-1.41 0l-6.59 6.59c-.39.39-.39 1.02 0 1.41l6.59 6.59c.39.39 1.02.39 1.41 0 .39-.39.39-1.02 0-1.41L7.83 13H19c.55 0 1-.45 1-1s-.45-1-1-1z"/>
        </svg>
    </a>
@endsection

@section('top-app-bar-second-row')
    <div class="mdc-top-app-bar__row mdc-top-app-bar__tabrow">
            <section class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
               <div class="mdc-tab-bar" role="tablist">
                    <div class="mdc-tab-scroller">
                        <div class="mdc-tab-scroller__scroll-area">
                            <div class="mdc-tab-scroller__scroll-content">
                                <a href="/{{ $goal->id }}" id="all">
                                    <button class="mdc-tab {{ ( request::uri ( ) === "/{$goal->id}" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                        <span class="mdc-tab__content">
                                            <span class="mdc-tab__text-label">General</span>
                                        </span>
                                        <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/{$goal->id}" ) ? 'mdc-tab-indicator--active' : '' }}">
                                            <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                        </span>
                                        <span class="mdc-tab__ripple"></span>
                                    </button>
                                </a>

                                <button class="mdc-tab {{ ( request::uri ( ) === "/{$goal->id}/tasks" ) ? 'mdc-tab--active' : '' }}" role="tab" aria-selected="true" tabindex="0">
                                    <span class="mdc-tab__content">
                                        <span class="mdc-tab__text-label">Tasks</span>
                                    </span>
                                    <span class="mdc-tab-indicator {{ ( request::uri ( ) === "/{$goal->id}/tasks" ) ? 'mdc-tab-indicator--active' : '' }}">
                                        <span class="mdc-tab-indicator__content mdc-tab-indicator__content--underline"></span>
                                    </span>
                                    <span class="mdc-tab__ripple"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
@endsection


@section('content')
    <form method="POST" action="/{{ $goal->id }}" id="goal-tasks-form">
        <input type="hidden" name="id" value="{{ $goal->id }}">
        <input type="hidden" name="description" value="{{ $goal->description }}">
        <input type="hidden" name="completeBy" value="{{ date('Y-m-d', $goal->completeBy) }}" >

        <div id="tasks-input[0][description]" class="mdc-text-field mdc-text-field--textarea">
            <textarea id="tasks[description][0]" name="tasks[0][description]" class="mdc-text-field__input" rows="8" cols="40" required></textarea>
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label for="goal" class="mdc-floating-label">Task 1</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>

        @foreach($goal->tasks as $index => $task)
            <div id="tasks-input[{{ $index + 1 }}][description]" class="mdc-text-field mdc-text-field--textarea">
                <textarea id="tasks[{{ $index + 1 }}][description]" name="tasks[{{ $index + 1 }}][description]" class="mdc-text-field__input" rows="8" cols="40" required>{{ $task->description }}</textarea>
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="goal" class="mdc-floating-label">Task {{ $index + 2 }}</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        @endforeach

        <button type="submit" class="mdc-fab">
            <span class="mdc-fab__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="none" d="M0 0h24v24H0V0z"/>
                    <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                </svg>
            </span>
        </button>
    </form>
@endsection

@section('mdc-js')
    <script>
        mdc.ripple.MDCRipple.attachTo(document.querySelector('.mdc-fab'));
        mdc.textField.MDCTextField.attachTo(document.getElementById('tasks-input[0][description]'));

        @foreach($goal->tasks as $index => $task)
            mdc.textField.MDCTextField.attachTo(document.getElementById("tasks-input[{{ $index + 1 }}][description]"));
        @endforeach
    </script>
@endsection