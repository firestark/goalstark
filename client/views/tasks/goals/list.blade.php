@extends ( 'page' )

@section ( 'navigation' )
    @include ( 'partials.up-arrow', [ 'link' => '/tasks/' ] )
@endsection

@section ( 'title' )
    My task's goals
@endsection

@include ( 'tasks.tab-bar' )

@section ( 'content' )
    @if ( count ( $goals ) )
        <ul class="mdc-list mdc-list--two-line mdc-list--avatar-list mdc-list--highlight mdc-list--linked">
            @foreach ( $goals as $goal )
                <li class="mdc-list-item" tabindex="0">

                   <span 
                        class="mdc-list-item__graphic" 
                        aria-hidden="true">
                        
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"/>
                            <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
                        </svg>
                    </span>

                    <a href="/goals/{{ $goal->id }}">
                        <span class="mdc-list-item__text" style="width: 100%;">
                            <span class="mdc-list-item__primary-text">{{ $goal->title }}</span>
                            <span class="mdc-list-item__secondary-text"><span>Due {{  date ( 'M d, Y ', $goal->due ) }}</span>        
                        </span>
                    </a>
                    
                    <a href="/tasks/remove/{{ $taskid }}/{{ $goal->id }}" class="mdc-list-item__meta" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"/>
                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                        </svg>
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <div style="text-align: center; margin: 56px auto 0; width: 230px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="96" height="96" viewBox="0 0 24 24" fill="var(--mdc-theme-secondary)" style="opacity: 0.7;">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <circle opacity=".3" cx="17.5" cy="17.5" r="2.5"/>
                <path opacity=".3" d="M5 15.5h4v4H5zm7-9.66L10.07 9h3.86z"/>
                <path d="M12 2l-5.5 9h11L12 2zm0 3.84L13.93 9h-3.87L12 5.84zM17.5 13c-2.49 0-4.5 2.01-4.5 4.5s2.01 4.5 4.5 4.5 4.5-2.01 4.5-4.5-2.01-4.5-4.5-4.5zm0 7c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5zM11 13.5H3v8h8v-8zm-2 6H5v-4h4v4z"/>
            </svg>

            <h3 class="mdc-typography--subtitle2" style="font-weight: bold; margin: 8px 0 0;">No goals here</h3>
            <p class="mdc-typography--body2" style="color: var(--mdc-theme-text-secondary-on-background); margin: 0; line-height: 1.5rem;">Add goals to your task with the
                <span style="vertical-align: text-top;"> 
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: var(--mdc-theme-text-secondary-on-background); position: relative; top: 4px;">
                        <path fill="none" d="M0 0h24v24H0V0z"/>
                        <path d="M3 17.46v3.04c0 .28.22.5.5.5h3.04c.13 0 .26-.05.35-.15L17.81 9.94l-3.75-3.75L3.15 17.1c-.1.1-.15.22-.15.36zM20.71 7.04c.39-.39.39-1.02 0-1.41l-2.34-2.34c-.39-.39-1.02-.39-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"/>
                    </svg> 
                </span> button
            </p>
        </div>
    @endif

    @include ( 'partials.link.fab', [ 'link' => "/tasks/{$taskid}/goals/add", 'action' => 'edit' ] )
    
@endsection