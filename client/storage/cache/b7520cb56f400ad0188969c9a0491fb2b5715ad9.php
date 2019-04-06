<?php $__env->startSection('content'); ?>
    <form method="POST" action="/<?php echo e($goal->id); ?>">
        <input type="hidden" name="id" value="<?php echo e($goal->id); ?>">
        <div class="mdc-text-field mdc-text-field--textarea">
            <textarea id="description" name="description" class="mdc-text-field__input" rows="8" cols="40" required><?php echo e($goal->description); ?></textarea>
            <div class="mdc-notched-outline">
                <div class="mdc-notched-outline__leading"></div>
                <div class="mdc-notched-outline__notch">
                    <label for="goal" class="mdc-floating-label">Goal description</label>
                </div>
                <div class="mdc-notched-outline__trailing"></div>
            </div>
        </div>

        <button type="submit" class="mdc-fab">
            <span class="mdc-fab__icon material-icons">check</span>
        </button>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('mdc-js'); ?>
    <script>
        mdc.ripple.MDCRipple.attachTo(document.querySelector('.mdc-fab'));
        mdc.textField.MDCTextField.attachTo(document.querySelector('.mdc-text-field'));        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>