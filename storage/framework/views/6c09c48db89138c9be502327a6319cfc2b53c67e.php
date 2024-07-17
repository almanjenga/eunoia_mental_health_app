<!-- resources/views/appointments/create.blade.php -->
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
<div class="container mt-5">
    <h2>Book an Appointment with <?php echo e($professional->name); ?></h2>
    <form action="" method="POST">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="professional_id" value="<?php echo e($professional->id); ?>">
        <input type="hidden" name="user_id" value="<?php echo e(Auth::id()); ?>">
        <div class="form-group">
            <label for="appointment_date">Appointment Date</label>
            <input type="date" name="appointment_date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="notes">Notes (optional)</label>
            <textarea name="notes" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Book Appointment</button>
    </form>
</div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp3\htdocs\MentalHealthApp\mental_health\resources\views/appointments/create.blade.php ENDPATH**/ ?>