<!-- resources/views/onboarding/step1.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/onboarding.css')); ?>">
</head>
<body>
    <div class="popup">
        <div class="popup-content">
        <h2>Welcome <?php echo e(session('user_name')); ?></h2>
            <p>Let's Get Started!</p>
            <button onclick="nextStep()">Next</button>
        </div>
    </div>
    <script>
        function nextStep() {
            window.location.href = "<?php echo e(route('onboarding.step2')); ?>";
        }
    </script>
</body>
</html>
<?php /**PATH C:\xampp3\htdocs\MentalHealthApp\mental_health\resources\views/onboardingStep1.blade.php ENDPATH**/ ?>