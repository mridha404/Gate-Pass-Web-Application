<!-- resources/views/users.blade.php -->
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
<?php $component->withAttributes([]); ?>Users <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8026f1991abb42645b4d7cc7ace47942)): ?>
<?php $attributes = $__attributesOriginal8026f1991abb42645b4d7cc7ace47942; ?>
<?php unset($__attributesOriginal8026f1991abb42645b4d7cc7ace47942); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8026f1991abb42645b4d7cc7ace47942)): ?>
<?php $component = $__componentOriginal8026f1991abb42645b4d7cc7ace47942; ?>
<?php unset($__componentOriginal8026f1991abb42645b4d7cc7ace47942); ?>
<?php endif; ?>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <div class="overflow-x-auto">
        <table class="table table-bordered border-success w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2 border border-green-500">Name</th>
                    <th class="px-4 py-2 border border-green-500">Email</th>
                    <th class="px-4 py-2 border border-green-500">Department</th>
                    <th class="px-4 py-2 border border-green-500">Designation</th>
                    <th class="px-4 py-2 border border-green-500">Supervisor</th>
                    <th class="px-4 py-2 border border-green-500">Actions</th>
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
                        <td class="px-4 py-2 border border-green-500">
                            <div class="flex space-x-2">
                                <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Edit</a>
                                <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="POST" onsubmit="return confirm('Are you sure you want to delete this user?')">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                </form>
                            </div>
                        </td>
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
<?php /**PATH /var/www/html/resources/views/users.blade.php ENDPATH**/ ?>