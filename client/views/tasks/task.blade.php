@if ( count ( $task ) > 1 )
    <div class="tab">
        <input type="checkbox" id="{{ $task [ 0 ]->id }}">
        
        <label for="{{ $task [ 0 ]->id }}" class="tab-label">
            <li class="mdc-list-item" tabindex="0">
                @include ( 'tasks.types.' . taskToTypeString ( $task [ 0 ] ) . '.list-item-action', [ 'task' => $task [ 0 ] ] )
                
                <a style="position: relative">
                    <span class="mdc-list-item__text" style="width: 100%;">
                        <span class="mdc-list-item__primary-text">{{ $task [ 0 ]->description }}</span>
                        <span class="mdc-list-item__secondary-text">@include ( 'tasks.types.' . taskToTypeString ( $task [ 0 ] ) . '.list-item-text', [ 'task' => $task [ 0 ] ] )</span>
                        <span class="mdc-list-item__secondary-text">{{ count ( $task )}} goals</span>
                    </span>
                </a>

                

                <a href="/goals/{{ $task [ 0 ]->goal->id }}/tasks/{{ $task [ 0 ]->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
                        <path d="M0 0h24v24H0z" fill="none"/>
                    </svg>
                </a>
            </li>
        </label>

        <div class="tab-content">
            @foreach ( $task as $item )
                <li class="mdc-list-item" tabindex="0">
                    @include ( 'tasks.types.' . taskToTypeString ( $item ) . '.list-item-action', [ 'task' => $item ] )
                    
                    <a href="/goals/{{ $item->goal->id }}/tasks/{{ $item->id }}" style="position: relative">
                        <span class="mdc-list-item__text" style="width: 100%;">
                            <span class="mdc-list-item__primary-text">{{ $item->description }}</span>
                            <span class="mdc-list-item__secondary-text">@include ( 'tasks.types.' . taskToTypeString ( $item ) . '.list-item-text', [ 'task' => $item ] )</span>
                            <span class="mdc-list-item__secondary-text">{{ $item->goal->title }}</span>
                        </span>
                    </a>

                    <a href="/goals/{{ $item->goal->id }}/tasks/{{ $item->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" d="M0 0h24v24H0V0z"/>
                            <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
                        </svg>
                    </a>
                </li>
            @endforeach
        </div>
    </div>
@else
    <li class="mdc-list-item" tabindex="0">
        @include ( 'tasks.types.' . taskToTypeString ( $task [ 0 ] ) . '.list-item-action', [ 'task' => $task [ 0 ] ] )
        
        <a href="/goals/{{ $task [ 0 ]->goal->id }}/tasks/{{ $task [ 0 ]->id }}" style="position: relative">
            <span class="mdc-list-item__text" style="width: 100%;">
                <span class="mdc-list-item__primary-text">{{ $task [ 0 ]->description }}</span>
                <span class="mdc-list-item__secondary-text">@include ( 'tasks.types.' . taskToTypeString ( $task [ 0 ] ) . '.list-item-text', [ 'task' => $task [ 0 ] ] )</span>
                <span class="mdc-list-item__secondary-text">{{ $task [ 0 ]->goal->title }}</span>
            </span>
        </a>

        <a href="/goals/{{ $task [ 0 ]->goal->id }}/tasks/{{ $task [ 0 ]->id }}/remove" class="mdc-list-item__meta" aria-hidden="true">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                <path fill="none" d="M0 0h24v24H0V0z"/>
                <path d="M6 19c0 1.1.9 2 2 2h8c1.1 0 2-.9 2-2V9c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v10zM18 4h-2.5l-.71-.71c-.18-.18-.44-.29-.7-.29H9.91c-.26 0-.52.11-.7.29L8.5 4H6c-.55 0-1 .45-1 1s.45 1 1 1h12c.55 0 1-.45 1-1s-.45-1-1-1z"/>
            </svg>
        </a>
    </li>
@endif