<?php if (isset($component)) { $__componentOriginal23a33f287873b564aaf305a1526eada4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a33f287873b564aaf305a1526eada4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
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

    <?php if(session('message')): ?>
    <div class="alert alert-success">
        <?php echo e(session('message')); ?>

    </div>
    <?php endif; ?>

   <div class="mb-4 text-right">
        <a href="<?php echo e(route('users.create')); ?>"
            class="bg-teal-900 hover:bg-teal-700 text-white font-bold py-2 px-4 rounded">Add New User</a>
        <a href="<?php echo e(route('departments.create')); ?>"
            class="bg-cyan-900 hover:bg-cyan-700 text-white font-bold py-2 px-4 rounded ml-2">Add Department</a>
        <a href="<?php echo e(route('designations.create')); ?>"
            class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-2">Add Designation</a>
    </div>

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
                    <td class="px-4 py-2 border border-green-500"><?php echo e($user->department->name ?? 'N/A'); ?></td>
                    <td class="px-4 py-2 border border-green-500"><?php echo e($user->designation->name ?? 'N/A'); ?></td>
                    <td class="px-4 py-2 border border-green-500"><?php echo e($user->supervisor->name ?? 'N/A'); ?></td>
                    <td class="px-4 py-2 border border-green-500">
                        <div class="flex space-x-2">
                            <a href="<?php echo e(route('users.edit', $user->id)); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</a>
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
<?php if (isset($__attributesOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $attributes = $__attributesOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__attributesOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a33f287873b564aaf305a1526eada4)): ?>
<?php $component = $__componentOriginal23a33f287873b564aaf305a1526eada4; ?>
<?php unset($__componentOriginal23a33f287873b564aaf305a1526eada4); ?>
<?php endif; ?>
<?php /**PATH /var/www/html/resources/views/users/index.blade.php ENDPATH**/ ?>