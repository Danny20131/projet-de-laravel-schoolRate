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
            <?php if(Auth::user() && Auth::user()->role == 'admin'): ?>
            <?php echo e(__('Tableau de Bord')); ?>

            <?php else: ?>
            <?php echo e(__('Liste des Universités')); ?>

            <?php endif; ?>

        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="container px-4 py-8 mx-auto">
                    <?php if(Auth::user() && Auth::user()->role == 'admin'): ?>
                    <div class="container w-full pt-20 mx-auto">

                        <div class="w-full px-4 mb-16 leading-normal text-gray-800 md:px-0 md:mt-8">
                            <!--Console Content-->
                            <div class="flex flex-wrap">
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-green-600 rounded"><i class="fi fi-rr-users-alt"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Total Revenue</h5>
                                                <h3 class="text-3xl font-bold">$3249 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-pink-600 rounded"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Total d'Utilisateurs</h5>
                                                <h3 class="text-3xl font-bold"><?php echo e($users->count()); ?> <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-yellow-600 rounded"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Nouveau Utilisateur</h5>
                                                <h3 class="text-3xl font-bold"><?php echo e($newUserCount); ?> <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-blue-600 rounded"><i class="fas fa-server fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Server Uptime</h5>
                                                <h3 class="text-3xl font-bold">152 days</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-indigo-600 rounded"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Nombre d'Universités</h5>
                                                <h3 class="text-3xl font-bold"><?php echo e($universities->count()); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                                <div class="w-full p-3 md:w-1/2 xl:w-1/3">
                                    <!--Metric Card-->
                                    <div class="p-2 bg-white border rounded shadow">
                                        <div class="flex flex-row items-center">
                                            <div class="flex-shrink pr-4">
                                                <div class="p-3 bg-red-600 rounded"><i class="fas fa-inbox fa-2x fa-fw fa-inverse"></i></div>
                                            </div>
                                            <div class="flex-1 text-right md:text-center">
                                                <h5 class="font-bold text-gray-500 uppercase">Nombre de Critères</h5>
                                                <h3 class="text-3xl font-bold"><?php echo e($critere->count()); ?> <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/Metric Card-->
                                </div>
                            </div>
                            <div class="w-full p-3">
                                <!--Table Card-->
                                <div class="bg-white border rounded shadow">
                                    <div class="p-3 border-b">
                                        <h5 class="font-bold text-gray-600 uppercase">Liste des Utilisateurs</h5>
                                    </div>
                                    <div class="p-5">
                                        <table class="w-full p-5 text-gray-700">
                                            <thead>
                                                <tr>
                                                    <th class="text-left text-blue-900">Nom</th>
                                                    <th class="text-left text-blue-900">Email</th>
                                                    <th class="text-left text-blue-900">Role</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($user->name); ?></td>
                                                    <td><?php echo e($user->email); ?></td>
                                                    <td><?php echo e($user->role); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>

                                        <p class="py-2"><a href="<?php echo e(route('admin.users.index')); ?>">Voir plus...</a></p>

                                    </div>
                                </div>
                                <!--/table Card-->
                            </div>
                        </div>
                        <!--/ Console Content-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php else: ?>
    
    <div class="max-w-screen-xl px-5 mx-auto mt-6 sm:px-10 lg:px-16">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="overflow-hidden transition duration-300 ease-in-out transform rounded-lg shadow-lg hover:scale-105">
                <a href="<?php echo e(route('universities.show', $university->id)); ?>">
                    <div class="relative">
                        <img class="object-cover w-full h-48 hover:opacity-75" src="<?php echo e(asset($university->picture)); ?>" alt="Image of <?php echo e($university->name); ?>">
                        <div class="absolute top-0 bottom-0 left-0 right-0 transition duration-500 bg-gray-900 bg-opacity-50 hover:bg-opacity-30"></div>
                    </div>
                </a>
                <div class="px-6 py-4 bg-white">
                    <a href="<?php echo e(route('universities.show', $university->id)); ?>" class="block text-lg font-semibold text-gray-800 transition-colors duration-300 hover:text-indigo-600">
                        <?php echo e($university->name); ?>

                    </a>
                    <p class="text-sm text-gray-600 truncate">
                        <?php echo e($university->description); ?>

                    </p>
                </div>
                <div class="flex items-center justify-between px-6 pt-4 pb-2 bg-white">
                    <a href="<?php echo e(route('universities.show', $university->id)); ?>" class="px-4 py-2 text-sm font-semibold text-white transition duration-150 ease-in-out bg-blue-500 rounded hover:bg-blue-700">
                        A Propos
                    </a>
                    <span class="flex items-center text-sm text-gray-600">
                        <svg fill="currentColor" class="w-5 h-5 mr-2" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 17h-2v-2h2v2zm0-4h-2V7h2v8z"/></svg>
                        <?php echo e($university->created_at->format('d M Y')); ?>

                    </span>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <?php endif; ?>
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
<?php /**PATH C:\Users\adral\Desktop\UniversityRatingTogo\resources\views/dashboard.blade.php ENDPATH**/ ?>