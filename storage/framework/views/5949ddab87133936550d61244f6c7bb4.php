<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name', 'label']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name', 'label']); ?>
<?php foreach (array_filter((['name', 'label']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="inline-flex items-center gap-x-2">
    <span class="w-2 h-2 bg-white inline-block"></span>
    <label class="font-bold" for="<?php echo e($name); ?>"><?php echo e($label); ?></label>
</div>
<?php /**PATH /var/www/html/resources/views/components/forms/label.blade.php ENDPATH**/ ?>