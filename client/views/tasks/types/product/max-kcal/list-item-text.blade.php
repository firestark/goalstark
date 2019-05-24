<span class="mdc-list-item__text" style="width: 100%;">
    <span class="mdc-list-item__primary-text">{{ $task->description }}
        @if ( isset ( $task->total ) and $task->total > 1 )
            <span style="color: var(--mdc-theme-text-secondary-on-background); font-weight: normal; position: relative; top: 2px; left: 4px; font-size: 0.785rem;">{{ $task->total }}</span>
        @endif
    </span>
    <span class="mdc-list-item__secondary-text">{{ app::make ( dietitian::class )->kcal ( ) }} kcal consumed today</span>
</span>