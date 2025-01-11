<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 text-gray-800">
    <header class="bg-blue-600 text-white py-4 shadow-md">
        <div class="container mx-auto px-4">
            <h1 class="text-3xl font-bold">List of Flights</h1>
        </div>
    </header>

    <main class="container mx-auto px-4 py-6">
        <ul class="space-y-4">
            <?php $__currentLoopData = $flights; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $flight): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="bg-white rounded-lg shadow p-4">
                    <h2 class="text-xl font-semibold text-blue-600"><?php echo e($flight->airline); ?></h2>
                    <p class="text-sm text-gray-500">Flight ID: <?php echo e($flight->flight_id); ?></p>

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700">Passengers:</h3>
                        <ul class="list-disc list-inside mt-2">
                            <?php $__currentLoopData = $flight->passengers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $passenger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="text-gray-600"><?php echo e($passenger->name); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </main>

    <footer class="bg-gray-800 text-white py-4 mt-10">
        <div class="container mx-auto px-4 text-center">
            <p>&copy; 2025 Flight Management. All rights reserved.</p>
        </div>
    </footer>
</body>

</html>
<?php /**PATH C:\Users\rafli\flightorm\resources\views/flights/index.blade.php ENDPATH**/ ?>