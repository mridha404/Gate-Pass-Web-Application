<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gate Pass Homepage</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto px-4 py-8">
        <header class="flex justify-between items-center mb-8">
            <div>
                <a href="#" class="mr-4 hover:underline">GatePass</a>
                <a href="#" class="hover:underline">Login</a>
            </div>
            <div class="relative">
                <button id="profileButton" class="bg-blue-600 rounded-full w-8 h-8 flex items-center justify-center">
                    t
                </button>
                <div id="profileDropdown" class="absolute right-0 mt-2 w-80 bg-gray-800 rounded-lg shadow-lg hidden">
                    <div class="p-4">
                        <div class="flex items-center mb-4">
                            <div class="bg-blue-600 rounded-full w-10 h-10 flex items-center justify-center mr-3">
                                t
                            </div>
                            <div>
                                <p class="font-semibold">Hi, tinku!</p>
                                <p class="text-sm text-gray-400">tinku.shovon09@gmail.com</p>
                            </div>
                        </div>
                        <button class="w-full text-center py-2 border border-gray-600 rounded-full text-sm mb-4 hover:bg-gray-700">
                            Manage your Gate Pass Account
                        </button>
                        <div class="flex justify-between mb-2">
                            <button class="bg-gray-700 text-sm px-4 py-2 rounded-md hover:bg-gray-600">
                                + Add account
                            </button>
                            <button class="bg-gray-700 text-sm px-4 py-2 rounded-md hover:bg-gray-600">
                                Sign out
                            </button>
                        </div>
                    </div>
                    <div class="border-t border-gray-700 px-4 py-3 text-xs">
                        <a href="#" class="hover:underline">Privacy Policy</a> •
                        <a href="#" class="hover:underline">Terms of Service</a>
                    </div>
                </div>
            </div>
        </header>

        <!-- Rest of the body content remains the same -->

    </div>

    <script>
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!profileButton.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>
</body>

        <main class="text-center">
            <h1 class="text-6xl font-bold mb-10">
                <span class="text-blue-500">G</span><span class="text-red-500">a</span><span class="text-yellow-500">t</span><span class="text-blue-500">e</span><span class="text-green-500">P</span><span class="text-red-500">a</span><span class="text-green-500">s</span><span class="text-red-500">s</span>
            </h1>
            <div class="mb-8">
                <div class="relative max-w-2xl mx-auto">
                    <input type="text" placeholder="Search " class="w-full px-4 py-2 pl-10 rounded-full bg-gray-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                </div>
            </div>
            <div class="grid grid-cols-4 sm:grid-cols-6 md:grid-cols-8 gap-4 max-w-3xl mx-auto">
                <?php
                $shortcuts = [
                    ['name' => 'Gate Pass', 'icon' => 'fa-id-card'],
                    //['name' => 'Cricbuzz', 'icon' => 'fa-cricket'],
                    ['name' => 'ChatGPT', 'icon' => 'fa-comments'],
                    ['name' => 'Installation', 'icon' => 'fa-download'],
                    ['name' => 'Gemini', 'icon' => 'fa-gem'],
                    ['name' => 'Web Store', 'icon' => 'fa-store'],
                ];
                ?>

                <?php $__currentLoopData = $shortcuts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shortcut): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="text-center">
                    <div class="bg-gray-800 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-2 hover:bg-gray-700 cursor-pointer">
                        <i class="fas <?php echo e($shortcut['icon']); ?>"></i>
                    </div>
                    <p class="text-xs"><?php echo e($shortcut['name']); ?></p>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <div class="text-center">
                    <div class="bg-blue-600 rounded-full w-12 h-12 flex items-center justify-center mx-auto mb-2 hover:bg-blue-700 cursor-pointer">
                        <span class="text-2xl">+</span>
                    </div>
                    <p class="text-xs">Add shortcut</p>
                </div>
            </div>
        </main>
    </div>

    <script>
        const profileButton = document.getElementById('profileButton');
        const profileDropdown = document.getElementById('profileDropdown');

        profileButton.addEventListener('click', () => {
            profileDropdown.classList.toggle('hidden');
        });

        document.addEventListener('click', (event) => {
            if (!profileButton.contains(event.target) && !profileDropdown.contains(event.target)) {
                profileDropdown.classList.add('hidden');
            }
        });
    </script>
</body>
</html>
<?php /**PATH /var/www/html/resources/views/users/app.blade.php ENDPATH**/ ?>