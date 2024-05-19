<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Document</title>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <div class="p-2 text-center grid gap-x-1 gap-y-1 grid-cols-12 border border-transparent">
            <a href="Create.php"
                class="mt-4 col-span-4 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add
                New Staff
                </a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-6">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">Email</th>
                        <th scope="col" class="px-6 py-3">Phone</th>
                        <th scope="col" class="px-6 py-3">Password</th>
                        <th scope="col" class="px-6 py-3">Role</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white  dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Sarak</th>
                        <td class="px-6 py-4">sarak@gmail.com</td>
                        <td class="px-6 py-4">0987237839</td>
                        <td class="px-6 py-4">1111</td>
                        <td class="px-6 py-4">User</td>
                        <td class="px-6 py-4 relative">
                            <button
                                class="dropdownButton px-6 py-1 text-center inline-flex items-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800 dropdown-toggle">
                                <i class="material-icons" style="font-size:16px;">more_horiz</i>
                            </button>
                            <div class="dropdown-menu right-0 absolute hidden bg-white border shadow-lg">
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-500 hover:text-white"
                                    href="Edit.php">
                                    <i class="material-icons" style="font-size:16px;">edit</i> Edit
                                </a>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-500 hover:text-white"
                                    href="#">
                                    <i class="material-icons" style="font-size:16px;">delete</i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white  dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Sarak</th>
                        <td class="px-6 py-4">sarak@gmail.com</td>
                        <td class="px-6 py-4">0987237839</td>
                        <td class="px-6 py-4">1111</td>
                        <td class="px-6 py-4">Admin</td>
                        <td class="px-6 py-4 relative">
                            <button
                                class="dropdownButton px-6 py-1 text-center inline-flex items-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800 dropdown-toggle">
                                <i class="material-icons" style="font-size:16px;">more_horiz</i>
                            </button>
                            <div class="dropdown-menu right-0 absolute hidden bg-white border shadow-lg">
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-500 hover:text-white"
                                    href="Edit.php">
                                    <i class="material-icons" style="font-size:16px;">edit</i> Edit
                                </a>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-500 hover:text-white"
                                    href="#">
                                    <i class="material-icons" style="font-size:16px;">delete</i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="bg-white  dark:bg-gray-900 dark:border-gray-700 ">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Sarak</th>
                        <td class="px-6 py-4">sarak@gmail.com</td>
                        <td class="px-6 py-4">0987237839</td>
                        <td class="px-6 py-4">1111</td>
                        <td class="px-6 py-4">User</td>
                        <td class="px-6 py-4 relative">
                            <button
                                class="dropdownButton px-6 py-1 text-center inline-flex items-center dark:bg-pink-600 dark:hover:bg-pink-700 dark:focus:ring-pink-800 dropdown-toggle">
                                <i class="material-icons" style="font-size:16px;">more_horiz</i>
                            </button>
                            <div class="dropdown-menu z-10 right-0 absolute hidden bg-white border shadow-lg  ">
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-500 hover:text-white"
                                    href="Edit.php">
                                    <i class="material-icons" style="font-size:16px;">edit</i> Edit
                                </a>
                                <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-pink-500 hover:text-white"
                                    href="#">
                                    <i class="material-icons" style="font-size:16px;">delete</i> Delete
                                </a>
                            </div>
                        </td>
                    </tr>
                    <!-- Add similar rows for other entries -->

                </tbody>
            </table>

            <div class="flex items-center justify-between border-t border-gray-200 bg-white  px-4 py-3 sm:px-6">
                <div class="flex flex-1 justify-between sm:hidden">
                    <a href="#"
                        class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                    <a href="#"
                        class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                </div>
                <div class=" sm:flex sm:flex-1 sm:items-center sm:justify-between">
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
                        <nav class="inline-flex -space-x-px rounded-md " aria-label="Pagination">
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

            </div>

        </div>

        <script>
            $(document).ready(function () {
                // Function to handle the dropdown button click
                function handleDropdownClick() {
                    $(".dropdown-menu").addClass("hidden"); // Hide all dropdown menus
                    $(this).next(".dropdown-menu").toggleClass("hidden"); // Toggle the visibility of the clicked dropdown menu
                }

                // Function to handle clicks on the document
                function handleDocumentClick(event) {
                    if (!$(event.target).closest('.dropdownButton').length) {
                        $(".dropdown-menu").addClass("hidden"); // Hide all dropdown menus if clicked outside
                    }
                }

                $(".dropdownButton").click(handleDropdownClick); // Attach the click event handler to all dropdown buttons
                $(document).click(handleDocumentClick); // Attach the click event handler to the document
            });
        </script>
</body>

</html>