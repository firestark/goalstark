<?php $__env->startSection('content'); ?>
    <?php if(count($goals)): ?>
        <section id="goal-listing" class="mdc-card">
            <ul class="mdc-list">
                <?php $__currentLoopData = $goals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $goal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="mdc-list-item">
                        <a href="/<?php echo e($goal->id); ?>">
                            <span class="mdc-list-item__text"><?php echo e($goal->description); ?></span>
                        </a>
                        <a href="/remove/<?php echo e($goal->id); ?>" class="mdc-list-item__meta material-icons" aria-hidden="true">delete</a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </section>
    <?php endif; ?>

    <a href="/add" class="mdc-fab">
        <span class="mdc-fab__icon material-icons">add</span>
    </a>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('mdc-js'); ?>
    <script>
        mdc.ripple.MDCRipple.attachTo(document.querySelector('.mdc-fab'));
        
        <?php if(count($goals)): ?>
            mdc.list.MDCList.attachTo(document.querySelector('.mdc-list'));
        <?php endif; ?>
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>