<?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('header', null, []); ?> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Mental Health Professionals
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                    <!-- Search bar -->
                    <div class="mb-4">
                        <input type="text" id="search" placeholder="Search professionals..." class="w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4" id="professionals">
                        <?php $__currentLoopData = $professionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-4 bg-gray-200 rounded-lg">
                                <h3 class="text-lg font-semibold"><?php echo e($professional->name); ?></h3>
                                <p class="text-sm text-gray-600 mt-2"><?php echo e($professional->specialization); ?></p>
                                <a href= "" class="block mt-2 text-sm text-blue-600">Book Appointment</a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search');
            const professionalsContainer = document.getElementById('professionals').getElementsByClassName('rounded-lg');

            searchInput.addEventListener('input', function () {
                const searchValue = searchInput.value.toLowerCase().trim();

                Array.from(professionalsContainer).forEach(function (professional) {
                    const title = professional.querySelector('h3').textContent.toLowerCase();
                    const description = professional.querySelector('p').textContent.toLowerCase();
                    const shouldShow = title.includes(searchValue) || description.includes(searchValue);

                    if (shouldShow) {
                        professional.style.display = 'block';
                    } else {
                        professional.style.display = 'none';
                    }
                });
            });
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp3\htdocs\MentalHealthApp\mental_health\resources\views/mental_health_professionals/index.blade.php ENDPATH**/ ?>