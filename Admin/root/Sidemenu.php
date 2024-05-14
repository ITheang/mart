<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Agregar el enlace al archivo de la biblioteca FontAwesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>

<body>
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
    <aside class="w-100 bg-pink-200 h-screen p-5 transition-all duration-300 flex flex-col text-md font-semibold">
        <!-- Sidebar header -->
        <div class="inline-block py-2 mb-2">
            <h1 class="text-pink-600 transition-opacity duration-300 font-bold text-2xl">
                PINK Mart
            </h1>
        </div>

        <!-- Sidebar menu -->
        <ul class="flex flex-col space-y-1 overflow-y-auto overflow-x-hidden scrollbar">
            <li class="group">
                <a href="Content.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Dashboard</span>
                </a>
            </li>
            <!-- <li class="group">
                <a href="../view//index.php" target="content" class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Users</span>
                </a>
            </li> -->
            <li class="group">
                <a href="../view/products/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Products</span>
                </a>
            </li>
            <li class="group">
                <a href="../view/sex/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Sex</span>
                </a>
            </li>
            <li class="group">
                <a href="../view/customers/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Customers</span>
                </a>
            </li>
            <li class="group">
                <a href="../view/stock_in/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Stock</span>
                </a>
            </li>
            <li class="opcion-con-desplegable group">
                <div class="flex items-center justify-between p-4 space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <div class="flex items-center">
                        <span>employees</span>
                    </div>
                    <i class="fas fa-chevron-down text-xs"></i>
                </div>
                <ul class="desplegable ml-4 hidden">
                    <li>
                        <a href="../view/employees/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                            Staff Information
                        </a>
                    </li>
                    <li>
                        <a href="../view/Permission/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                            Add Permission
                        </a>
                    </li>
                </ul>
            </li>
            <li class="group">
                <a href="../view/suppliers/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Suppliers</span>
                </a>
            </li>
            <li class="group">
                <a href="../view/payment_type/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Payment Type</span>
                </a>
            </li>
            <li class="group">
                <a href="../view/payments/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Payment</span>
                </a>
            </li>
            <li class="group">
                <a href="../view/Order/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Orders</span>
                </a>
            </li>
            <li class="group">
                <a href="../view/transactions/index.php" target="content"
                    class="flex items-center space-x-2 py-2 px-4 rounded-md text-gray-500 hover:bg-pink-500 hover:text-white transition-colors duration-300">
                    <span>Transaction</span>
                </a>
            </li>
        </ul>

        <!-- Sidebar Footer -->
        <div class="mt-auto py-4 px-2 bg-mint-green-400 rounded-lg shadow-sm">
            <div class="flex items-center space-x-3">
                <img class="h-10 w-10 rounded-full object-cover" src="profile-icon.png" alt="User Name">
                <span class="text-gray-500">User Name</span>
            </div>
            <button
                class="mt-1 w-full bg-pink-500 text-white py-2 px-4 rounded hover:bg-pink-600 focus:outline-none focus:bg-sky-300 transition-colors duration-300">
                Logout
            </button>
        </div>
    </aside>

    <script>
    document.addEventListener("DOMContentLoaded", function () {
      // Obtener todas las opciones principales con desplegables
      const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");

      // Agregar evento de clic a cada opción principal
      opcionesConDesplegable.forEach(function (opcion) {
        opcion.addEventListener("click", function () {
          // Obtener el desplegable asociado a la opción
          const desplegable = opcion.querySelector(".desplegable");

          // Alternar la clase "hidden" para mostrar u ocultar el desplegable
          desplegable.classList.toggle("hidden");
        });
      });
    });
  </script>
</body>

</html>