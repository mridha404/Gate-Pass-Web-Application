<?php if (isset($component)) { $__componentOriginal51da7a32851521952e1d3cb2ae8a8f80 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal51da7a32851521952e1d3cb2ae8a8f80 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout-login','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout-login'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginal8026f1991abb42645b4d7cc7ace47942 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8026f1991abb42645b4d7cc7ace47942 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.page-heading','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('page-heading'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>User List <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8026f1991abb42645b4d7cc7ace47942)): ?>
<?php $attributes = $__attributesOriginal8026f1991abb42645b4d7cc7ace47942; ?>
<?php unset($__attributesOriginal8026f1991abb42645b4d7cc7ace47942); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8026f1991abb42645b4d7cc7ace47942)): ?>
<?php $component = $__componentOriginal8026f1991abb42645b4d7cc7ace47942; ?>
<?php unset($__componentOriginal8026f1991abb42645b4d7cc7ace47942); ?>
<?php endif; ?>

    <div class="overflow-x-auto">
        <table class="table table-bordered border-success">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-green-500">Name</th>
                    <th class="px-4 py-2 border border-green-500">Email</th>
                    <th class="px-4 py-2 border border-green-500">Department</th>
                    <th class="px-4 py-2 border border-green-500">Designation</th>
                    <th class="px-4 py-2 border border-green-500">Supervisor</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="px-4 py-2 border border-green-500"><?php echo e($user->name); ?></td>
                        <td class="px-4 py-2 border border-green-500"><?php echo e($user->email); ?></td>
                        <td class="px-4 py-2 border border-green-500"><?php echo e($user->department->name); ?></td>
                        <td class="px-4 py-2 border border-green-500"><?php echo e($user->designation->name); ?></td>
                        <td class="px-4 py-2 border border-green-500"><?php echo e($user->supervisor ? $user->supervisor->name : 'N/A'); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal51da7a32851521952e1d3cb2ae8a8f80)): ?>
<?php $attributes = $__attributesOriginal51da7a32851521952e1d3cb2ae8a8f80; ?>
<?php unset($__attributesOriginal51da7a32851521952e1d3cb2ae8a8f80); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal51da7a32851521952e1d3cb2ae8a8f80)): ?>
<?php $component = $__componentOriginal51da7a32851521952e1d3cb2ae8a8f80; ?>
<?php unset($__componentOriginal51da7a32851521952e1d3cb2ae8a8f80); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/users/list.blade.php ENDPATH**/ ?>