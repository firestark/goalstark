@switch ( $task )
    @case ( $task instanceof task\product\count )
        <span class="mdc-list-chip" style="background-color: #9c27b0; color: white;">Product count</span>
        @break
    
    @case ( $task instanceof task\count )
        <span class="mdc-list-chip" style="background-color: #3f51b5; color: white;">Count</span>
        @break

    @case ( $task instanceof task\protein )
        <span class="mdc-list-chip" style="background-color: #03a9f4;">Protein</span>
        @break

    @case ( $task instanceof task\daily )
        <span class="mdc-list-chip" style="background-color: #009688;">Daily</span>
        @break

    @case ( $task instanceof task\due )
        <span class="mdc-list-chip" style="background-color: #ff9800;">Due</span>
        @break

    @default
        
@endswitch
