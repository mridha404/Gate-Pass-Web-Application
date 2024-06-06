<form <?php echo e($attributes(["class" => "max-w-xl mx-auto space-y-6", "method" => "GET"])); ?>>
    <?php if($attributes->get('method', 'GET') !== 'GET'): ?>
        <?php echo csrf_field(); ?>
        <?php echo method_field($attributes->get('method')); ?>
    <?php endif; ?>

    <?php echo e($slot); ?>

</form>
<?php /**PATH /var/www/html/resources/views/components/forms/form.blade.php ENDPATH**/ ?>