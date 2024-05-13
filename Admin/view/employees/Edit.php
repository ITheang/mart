<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <title>Create Customer</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <!-- header -->
        <h1 class="text-xl font-bold mb-4">Update Information</h1>
        <form id="selecForm">
            <div class="p-2 grid gap-x-4 gap-y-1 grid-cols-3 border border-transparent">
                <div>
                    <input type="text" readonly value="Name" name="nameLabel"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="cusName" name="cusName"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="Email" name="EmailLabel"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="cusEmail" name="cusEmail"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="Phone" name="pNumberLabel"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="cusPNumber" name="cusPNumber"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="Password" name="PasswordLabel"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="cusPassword" name="cusPasswordr"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="Role" name="RoleLabel"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <select id="roleDropdown"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>
                        <option value="Manager">Manager</option>
                    </select>
                </div>
            </div>
            <div class="p-2 grid grid-cols-6 gap-x-3 gap-y-2 border border-transparent">
                <div class="col-span-4">
                </div>
                <button type="button"
                    class="justify-center py-1 px-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                <a href="index.php"
                    class="justify-center py-1 px-2 text-center border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</a>
            </div>
        </form>
    </div>
</body>

</html>