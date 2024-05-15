<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <title>Customer List</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>

    <!-- dropdown -->


</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <!-- header -->
        <h1 class="text-xl font-bold mb-4">Customer List</h1>
        <form id="selecForm">
            <div class="p-2 text-center grid gap-x-1 gap-y-1 grid-cols-12 border border-transparent">
                <a href="Create.php"
                    class="mt-4 col-span-4 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create
                    New Customer</a>
                <input type="text" id="cusSearch" name="cusSearch" placeholder="Enter Customer ID/Name/Phone Number"
                    class="mt-4 text-xs text-right grid col-span-5 col-start-7 py-2 px-4 bg-white border border-pink-300 rounded-full shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                <button type="button"
                    class="mt-4 text-center grid col-span-1 justify-center py-2 px-4 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><i
                        class="material-icons" style="font-size:16px;">search</i></button>
            </div>


            <div class="text-center grid grid-cols-12 border border-transparent">
                <div class="col-span-1"><label for="id"
                        class="block font-medium text-gray-700 py-1 px-2 bg-pink-300 border border-pink-600">ID</label>
                </div>
                <div class="col-span-5"><label for="name"
                        class="block font-medium text-gray-700 py-1 px-2 bg-pink-300 border border-pink-600">Name</label>
                </div>
                <div class="col-span-1"><label for="sex"
                        class="block font-medium text-gray-700 py-1 px-2 bg-pink-300 border border-pink-600">Sex</label>
                </div>
                <div class="col-span-4"><label for="pNumber"
                        class="block font-medium text-gray-700 py-1 px-2 bg-pink-300 border border-pink-600">Phone
                        Number</label></div>
                <div class="col-span-1"><label for="action"
                        class="block font-medium text-gray-700 py-1 px-2 bg-pink-300 border border-pink-600">Action</label>
                </div>
            </div>
            
            <div class="grid grid-cols-12 border border-collapse border-transparent">
                <div class="col-span-1">
                    <p class="py-1 px-2 text-center border border-pink-600">1</p>
                </div>
                <div class="col-span-5">
                    <p class="py-1 px-2 border border-pink-600">Heang</p>
                </div>
                <div class="col-span-1">
                    <p class="py-1 px-2 text-center border border-pink-600">M</p>
                </div>
                <div class="col-span-4">
                    <p class="py-1 px-2 text-center border border-pink-600">012345678</p>
                </div>
                <div class="col-span-1">
                    <div class="text-left border border-pink-600 hover:bg-pink-600 hover:text-white">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                            class=" px-6 py-1 text-center inline-flex items-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800"
                            type="button"><i class="material-icons py-1" style="font-size:16px;">more_horiz</i>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown"
                            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-28 dark:bg-gray-700">
                            <ul class="text-sm text-black dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-pink-300 dark:hover:bg-pink-300 dark:hover:text-white"><i
                                            class="material-icons" style="font-size:16px;">visibility</i> View</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-pink-300 dark:hover:bg-pink-300 dark:hover:text-white"><i
                                            class="material-icons" style="font-size:16px;">edit</i> Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-pink-300 dark:hover:bg-pink-300 dark:hover:text-white"><i
                                            class="material-icons" style="font-size:16px;">delete</i> Delete</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- pangination -->
            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                <div class="flex flex-1 justify-between sm:hidden">
                    <a href="#"
                        class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                    <a href="#"
                        class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                </div>
                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                    <div>
                        <p class="text-sm text-gray-700">
                            Showing
                            <span class="font-medium">1</span>
                            to
                            <span class="font-medium">10</span>
                            of
                            <span class="font-medium">97</span>
                            results
                        </p>
                    </div>
                    <div>
                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                            <a href="#"
                                class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                            <!-- Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" -->
                            <a href="#" aria-current="page"
                                class="relative z-10 inline-flex items-center bg-pink-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">1</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
                            <a href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
                            <span
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">...</span>
                            <a href="#"
                                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">8</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">9</a>
                            <a href="#"
                                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">10</a>
                            <a href="#"
                                class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </nav>
                    </div>
                </div>
        </form>
    </div>
</body>

</html>