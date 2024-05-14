<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>

<body>
    <div class="contanner">
        <div class="p-2 text-center grid gap-x-1 gap-y-1 grid-cols-12 border border-transparent">
            <a href="Create.php"
                class="mt-4 col-span-4 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Add New
                Permission</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg flex justify-between mt-2">
            <table class="max-w-6xl   text-sm text-left rtl:text-right text-gray-500 dark:text-gray-200">
                <thead class="text-xs text-gray-200 uppercase bg-pink-300 dark:bg-gray-200 dark:text-gray-200">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td class="px-6 py-4">
                            User
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="Edit.php"
                                class="justify-center py-1 px-2 text-center border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">Edit</a>
                            <a href="#"
                                class="justify-center py-1 px-2 text-center border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">Delete</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        
                        <td class="px-6 py-4">
                            Admin
                        </td>
                        <td class="px-6 py-4 flex">
                            <a href="Edit.php"
                                class="justify-center py-1 px-2 text-center border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ml-2">Edit</a>
                            <a href="#"
                                class="justify-center py-1 px-2 text-center border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">Delete</a>
                        </td>
                    </tr>
                    
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>