<span class="mdc-list-item__text" style="width: 100%;">
    <span class="mdc-list-item__primary-text">{{ $task->description }}</span>
    <span class="mdc-list-item__secondary-text">{{ app::make ( dietitian::class )->kcal ( ) }} kcal consumed today</span>
</span>