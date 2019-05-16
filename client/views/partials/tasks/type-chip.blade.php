@switch ( $task )
    @case ( $task instanceof task\product\count )
        <span class="mdc-list-chip">Product count</span>
        @break
    
    @case ( $task instanceof task\count )
        <span class="mdc-list-chip">Count</span>
        @break

    @case ( $task instanceof task\protein )
        <span class="mdc-list-chip">Protein</span>
        @break

    @case ( $task instanceof task\daily )
        <span class="mdc-list-chip">Daily</span>
        @break

    @case ( $task instanceof task\due )
        <span class="mdc-list-chip">Due</span>
        @break

    @default
        
@endswitch
