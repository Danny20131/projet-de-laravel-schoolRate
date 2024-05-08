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
        <h2 class="mt-6 mb-4 text-xl font-semibold leading-tight text-gray-800">
            <?php echo e(__('Classements des Universités')); ?>

        </h2>
     <?php $__env->endSlot(); ?>
    <div class="max-w-screen-xl px-5 mx-auto mt-6 sm:px-10 md:px-16">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
            <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="overflow-hidden rounded shadow-lg">
                <a href="#">
                    <div class="relative">
                        <img class="w-full" src="<?php echo e(asset($university->picture)); ?>" alt="Image of <?php echo e($university->name); ?>">
                        <div class="absolute top-0 bottom-0 left-0 right-0 transition duration-300 bg-gray-900 opacity-25 hover:bg-transparent">
                    </div>
                </a>
            </div>
            <div class="px-6 py-4">
                <a href="#" class="inline-block text-lg font-semibold transition duration-500 ease-in-out hover:text-indigo-600">
                    <?php echo e($university->name); ?>

                </a>
                <p class="text-sm text-gray-500">
                    <?php echo e($university->description); ?>

                </p>
            </div>
            <div class="flex flex-row items-center px-6 pt-4 pb-2">
                <span class="flex flex-row items-center py-1 mr-1 text-sm text-gray-900 font-regular">
                    <svg height="13px" width="13px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                    c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                                    c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                    </svg>
                    <span class="ml-1"><?php echo e($university->created_at->format('d M Y')); ?></span>
                </span>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\Users\adral\Desktop\UniversityRatingTogo\resources\views/universities/index.blade.php ENDPATH**/ ?>