<span style="
    background-color: var(--mdc-theme-surface);
    border-radius: 12px;
    position: absolute;
    bottom: 8px;
    font-size: 12px;
    color: var(--mdc-theme-on-surface);
    right: 16px;
    padding: 0 8px;">
    
    @switch ( $task )
        @case ( $task instanceof task\product\count )
            Product count
            @break
        
        @case ( $task instanceof task\count )
            Count
            @break

        @case ( $task instanceof task\protein )
            Protein
            @break

        @case ( $task instanceof task\daily )
            Daily
            @break

        @case ( $task instanceof task\due )
            Due
            @break

        @default
            
    @endswitch
</span>