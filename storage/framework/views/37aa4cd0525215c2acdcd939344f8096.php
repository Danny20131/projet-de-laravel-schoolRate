

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
        <h2 class="text-2xl font-semibold leading-tight text-gray-800">
            Classements des Universités
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mb-6">
                <form method="GET" class="max-w-sm mx-auto">
                    <label for="criteria" class="block mb-2 text-sm font-medium text-gray-700">Sélectionnez le critère de tri :</label>
                    <select id="criteria" name="criteria" onchange="this.form.submit()" class="block w-full p-2 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50">
                        <option value="">Sélectionnez le critère de tri :</option>
                        <?php $__currentLoopData = $criteria; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criterion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($criterion->id); ?>" <?php echo e($selectedCriterion == $criterion->id ? 'selected' : ''); ?>><?php echo e($criterion->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </form>
            </div>
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="mb-4 overflow-hidden bg-white rounded-lg shadow-lg">
                    <div class="md:flex">
                        <div class="md:flex-shrink-0">
                            <img class="object-cover w-full h-48 md:w-48 md:h-full" src="<?php echo e(asset($university->picture)); ?>">
                        </div>
                        <div class="p-8">
                            <div class="text-sm font-semibold tracking-wide text-indigo-500 uppercase">University</div>
                            <a href="<?php echo e(route('universities.show', $university->id)); ?>" class="block mt-1 text-lg font-medium leading-tight text-black hover:underline">
                                <?php echo e($university->name); ?>

                            </a>
                            <p class="mt-2 text-gray-500"><?php echo e($university->description); ?></p>
                            <div class="mt-4">
                                <h4 class="font-semibold text-gray-600">Ratings:</h4>
                                <?php $__currentLoopData = $university->averageRatings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $criterionName => $averageRating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <p><strong><?php echo e($criterionName); ?>:</strong> <?php echo e(number_format($averageRating, 2)); ?> / 5</p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\Users\adral\Desktop\UniversityRatingTogo\resources\views/universities/rankings.blade.php ENDPATH**/ ?>