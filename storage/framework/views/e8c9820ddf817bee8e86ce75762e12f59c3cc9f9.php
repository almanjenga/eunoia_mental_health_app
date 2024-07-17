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
            Professional Details - <?php echo e($professional->name); ?>

        </h2>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
     <?php $__env->endSlot(); ?>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mx-auto px-4">
                <?php if(session('success')): ?>
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Success!</strong>
                            <span class="block sm:inline"><?php echo e(session('success')); ?></span>
                        </div>
                    <?php endif; ?>
                    <div class="p-4 bg-gray-200 rounded-lg">
                        <h3 class="text-lg font-semibold"><?php echo e($professional->name); ?></h3>
                        <p class="text-sm text-gray-600 mt-2"><?php echo e($professional->specialization); ?></p>
                        <p class="text-sm text-gray-600 mt-2">Email: <?php echo e($professional->email); ?></p>
                        <p class="text-sm text-gray-600 mt-2">Phone: <?php echo e($professional->phone); ?></p>
                        <p>Call,Text or email <?php echo e($professional->name); ?> for any help you might need or book an appointment below</p>

                        <form action="<?php echo e(route('appointments.book')); ?>" method="POST" id="bookAppointmentForm">
                            <?php echo csrf_field(); ?>

                            <label for="professional_id">Select Professional:</label>
                            <select name="professional_id" id="professional_id">
                                <?php $__currentLoopData = $professionals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prof): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($prof->id); ?>"><?php echo e($prof->name); ?> - <?php echo e($prof->specialization); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <br>
                            <label for="appointment_date">Appointment Date:</label>
                            <input type="date" name="appointment_date" id="appointment_date" required min="<?php echo e(now()->toDateString()); ?>">
                            <br>
                            <label for="appointment_time">Appointment Time:</label>
                            <input type="time" name="appointment_time" id="appointment_time" required>
                            <br>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Book Appointment</button>
                            <a href="<?php echo e(route('appointments.index')); ?>" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded ml-4">View Appointments</a>
                        </form>
                        
                      
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('bookAppointmentForm');
            form.addEventListener('submit', function(event) {
                // Validate appointment date
                const appointmentDate = new Date(document.getElementById('appointment_date').value);
                const now = new Date();
                now.setHours(0, 0, 0, 0); // Set current time to midnight for comparison

                if (appointmentDate < now) {
                    event.preventDefault(); // Prevent form submission
                    alert('Please select a future date for your appointment.');
                }
            });
        });
    </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp3\htdocs\MentalHealthApp\mental_health\resources\views/professional/show.blade.php ENDPATH**/ ?>