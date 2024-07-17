
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
            Anxiety
        </h2>
     <?php $__env->endSlot(); ?>
   
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Room Simulation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        #chat-box {
            width: 80%;
            height: 400px;
            border: 1px solid #000;
            overflow-y: scroll;
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f1f1f1;
        }
        #message-box {
            width: 80%;
            padding: 10px;
        }
        .message {
            margin-bottom: 10px;
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }
        .username {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Chat Room</h1>
    <div id="chat-box">
        <div class="message">
            <span class="username"></span> 
        </div>
        <div class="message">
            <span class="username"></span> 
        </div>
        <div class="message">
            <span class="username"></span> 
        </div>
    </div>
    <input type="text" id="message-box" placeholder="Type your message here...">
    <button onclick="sendMessage()">Send</button>

    <script>
        function sendMessage() {
            const messageBox = document.getElementById('message-box');
            const chatBox = document.getElementById('chat-box');

            if (messageBox.value.trim() !== '') {
                const messageDiv = document.createElement('div');
                messageDiv.classList.add('message');
                
                const usernameSpan = document.createElement('span');
                usernameSpan.classList.add('username');
                usernameSpan.textContent = 'You: ';

                const messageSpan = document.createElement('span');
                messageSpan.textContent = messageBox.value;

                messageDiv.appendChild(usernameSpan);
                messageDiv.appendChild(messageSpan);
                chatBox.appendChild(messageDiv);

                // Scroll to the bottom of the chat box
                chatBox.scrollTop = chatBox.scrollHeight;

                // Clear the message box
                messageBox.value = '';
            }
        }
    </script>
</body>
</html>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?>
<?php /**PATH C:\xampp3\htdocs\MentalHealthApp\mental_health\resources\views/chatrooms/index1.blade.php ENDPATH**/ ?>