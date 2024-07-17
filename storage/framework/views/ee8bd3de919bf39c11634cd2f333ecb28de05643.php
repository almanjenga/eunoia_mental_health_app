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
            Available Mental Health Professionals
        </h2>
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    <div class="p-4 bg-gray-200 rounded-lg">
                                <h3 class="text-lg font-semibold">View Your Appointments</h3>
                                <p class="text-sm text-gray-600 mt-2"></p>
                                <a href="<?php echo e(route('appointments.index')); ?>" class="block mt-2 text-sm text-blue-600">View</a>
                            </div>
                        <?php $__currentLoopData = $professionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $professional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-4 bg-gray-200 rounded-lg">
                                <h3 class="text-lg font-semibold"><?php echo e($professional->name); ?></h3>
                                <p class="text-sm text-gray-600 mt-2"><?php echo e($professional->specialization); ?></p>
                                <a href="<?php echo e(route('professional.show', $professional->id)); ?>" class="block mt-2 text-sm text-blue-600">Book Appointment</a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php
                            $placeholders = [
                                ['name' => 'Jane Sylvia', 'specialization' => 'Psychologist'],
                                ['name' => 'John Smith', 'specialization' => 'Therapist'],
                                ['name' => 'Emily Brown', 'specialization' => 'Counselor'],
                                
                
                            ];
                        ?>

                        <?php $__currentLoopData = $placeholders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $placeholder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="p-4 bg-gray-200 rounded-lg">
                                <h3 class="text-lg font-semibold"><?php echo e($placeholder['name']); ?></h3>
                                <p class="text-sm text-gray-600 mt-2"><?php echo e($placeholder['specialization']); ?></p>
                                <a href="#" class="block mt-2 text-sm text-blue-600">Book Appointment</a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp3\htdocs\MentalHealthApp\mental_health\resources\views/professional/index.blade.php ENDPATH**/ ?>