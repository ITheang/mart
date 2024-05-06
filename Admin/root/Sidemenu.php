<!-- component -->
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body x-data="{sidebarOpen: false}">
    <!-- Add custom scrollbar styles -->
    <style>
        /* Customize scrollbar width */
        .scrollbar::-webkit-scrollbar {
            width: 1px;
        }

        /* Customize scrollbar track */
        .scrollbar::-webkit-scrollbar-track {
            background: #cae9ff;
        }

        /* Customize scrollbar thumb */
        .scrollbar::-webkit-scrollbar-thumb {
            background: #5fa8d3;
            border-radius: 4px;
        }

        /* Customize scrollbar thumb on hover */
        .scrollbar::-webkit-scrollbar-thumb:hover {
            background: #1b4965;
        }

        [x-cloak] {
            display: none !important;
        }
    </style>

    <!-- Sidebar -->
    <aside :class="sidebarOpen ? 'w-100' : 'w-12'" class="relative bg-pink-200 h-screen p-5 transition-all duration-300 flex flex-col text-md font-semibold ">
        <!-- Toggle button -->
        <button @click="sidebarOpen = !sidebarOpen" class="absolute -right-0 top-5 cursor-pointer rounded-full border-2 border-red-600 bg-white p-1">
            <!-- SVG icon -->
            <svg :class="sidebarOpen ? 'rotate-270' : 'rotate-90'" class="h-6 w-6 transform transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Sidebar header -->
        <div class="inline-block py-2 mb-2">
            <h1 class=" text-pink-600 transition-opacity duration-300 font-bold text-2xl" x-show="sidebarOpen" x-cloak>
                PINK Mart
            </h1>
            <p class="text-gray-500 transition-opacity duration-300 font-medium text-md" x-show=" sidebarOpen" x-cloak>
                
            </p>
        </div>

        <!-- Sidebar menu -->
        <ul class="flex flex-col space-y-1 overflow-y-auto overflow-x-hidden scrollbar">
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="Content.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Dashboard</span>
                </a>
            </li>
                <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <!-- Additional main menu items -->
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/employees/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Users</span>
                </a>

            </li>
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/products/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Products</span>
                </a>

            </li>
             
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/sex/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Sex</span>
                </a>

            </li>
             
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/customers/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Customers</span>
                </a>

            </li>
             
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/stock_in/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Stock</span>
                </a>

            </li>
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/Permissions/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Permissions</span>
                </a>

            </li>
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/suppliers/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Supliers</span>
                </a>

            </li>
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/payment_type/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Payment Type</span>
                </a>

            </li>
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/payments/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Payment</span>
                </a>

            </li>
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/Order/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Orders</span>
                </a>

            </li>
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />
            <li x-show="sidebarOpen || !sidebarOpen" class="group">
                <a href="../view/transactions/index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <!-- Icon -->
                    <!-- <span>🏠</span> -->
                    <!-- Text -->
                    <span x-show="sidebarOpen" x-cloak>Transaction</span>
                </a>

            </li>
            <hr class="border-t border-black" x-show="sidebarOpen" x-cloak />

             
        </ul>
        <!-- Sidebar Footer -->
        <div class="mt-auto py-4 px-2 bg-mint-green-400 rounded-lg shadow-sm" x-show="sidebarOpen" x-cloak>
            <!-- User Profile -->
            <div class="flex items-center space-x-3">
                <!-- Profile Picture -->
                <img class="h-10 w-10 rounded-full object-cover" src="profile-icon.png" alt="User Name">
                <!-- User Name -->
                <span class="text-gray-500 ">User Name</span>
            </div>
            <div class="hidden md:flex flex-wrap justify-end font-normal gap-2">
                <a href="#" target="content" class="rounded-full bg-white shadow-md px-2 py-1 text-gray-500">Tag 1</a>
                <a href="#" target="content" class="rounded-full bg-white shadow-md px-2 py-1 text-gray-500">Tag 2</a>
                <a href="#" target="content" class="rounded-full bg-white shadow-md px-2 py-1 text-gray-500">Tag 1</a>

                <!-- Add more tags as needed -->
            </div>
            <hr class=" mt-2 border-t border-black" x-show="sidebarOpen" x-cloak />
            <!-- Logout Button -->
            <button class="mt-1 w-full bg-pink-500 text-white py-2 px-4 rounded hover:bg-pink-600 focus:outline-none focus:bg-sky-300 transition-colors duration-300">
                Logout
            </button>
        </div>

    </aside>
    <!-- Sidebar -->

</body>

</html>