<li class="mdc-list-item" tabindex="0">
    <span 
        class="mdc-list-item__graphic {{ goalStatusClass ( $goal, $goal->tasks ) }}" 
        aria-hidden="true">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path fill="none" d="M0 0h24v24H0V0z"/>
            <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"/>
        </svg>
    </span>

    <a href="/goals/{{ $goal->id }}">
        <span class="mdc-list-item__text" style="width: 100%;">
            <span class="mdc-list-item__primary-text">{{ $goal->title }}</span>
            <span class="mdc-list-item__secondary-text" style="font-weight: 500;">Due {{  date ( 'M d, Y ', $goal->due ) }}</span>
            <span class="mdc-list-item__secondary-text" style="font-weight: 500;">{{ count ( $goal->tasks ) }}
                {{ ( count ( $goal->tasks ) === 1 ) ? 'task' : 'tasks' }}
            </span>
        </span>
    </a>
    
    <a href="/goals/{{ $goal->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"/>
            <path d="M0 0h24v24H0z" fill="none"/>
        </svg>
    </a>
</li>