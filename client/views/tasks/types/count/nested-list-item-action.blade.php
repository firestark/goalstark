<a href="/goals/{{ $tasks [ 0 ]->goal->id }}/tasks/{{ $tasks [ 0 ]->id }}/complete" class="mdc-list-item__graphic {{ taskStatusClass ( $tasks [ 0 ] ) }}" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M0 0h24v24H0zm0 0h24v24H0z" fill="none"/>
        <path d="M10 7H8v4H4v2h4v4h2v-4h4v-2h-4V7zm10 11h-2V7.38L15 8.4V6.7L19.7 5h.3v13z"/>
    </svg>
</a>