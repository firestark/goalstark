<span class="mdc-list-item__text" style="width: 100%;">
    <span class="mdc-list-item__primary-text">{{ $task->description }}</span>
    <span class="mdc-list-item__secondary-text">Due {{  date ( 'M d, Y ', $task->due ) }}</span>
</span>