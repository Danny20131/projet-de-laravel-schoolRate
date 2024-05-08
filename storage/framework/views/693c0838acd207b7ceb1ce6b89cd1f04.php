<?php if (isset($component)) { $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54 = $attributes; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            <?php echo e(__('Tableau des notations')); ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
        <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="p-6 bg-white border-b border-gray-200">
                <table class="w-full table-auto">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Utilisateur</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Université</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Critère</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Note</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-blue-500 uppercase tracking-wider border-b-2 border-gray-300">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <?php echo e($rating->user->name); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <?php echo e($rating->university->name); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <?php echo e($rating->criteria->name); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <?php echo e($rating->score); ?>

                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-500">
                                <form action="<?php echo e(route('ratings.destroy', $rating->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="text-red-600 hover:text-red-900">
                                        Supprimer
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $attributes = $__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__attributesOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54)): ?>
<?php $component = $__componentOriginal9ac128a9029c0e4701924bd2d73d7f54; ?>
<?php unset($__componentOriginal9ac128a9029c0e4701924bd2d73d7f54); ?>
<?php endif; ?>
<?php /**PATH C:\Users\adral\Desktop\UniversityRatingTogo\resources\views/ratings/index.blade.php ENDPATH**/ ?>