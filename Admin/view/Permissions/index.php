<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permission Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-6xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <h1 class="text-xl font-bold mb-4">Manage User Permissions</h1>
        <form id="selectForm">
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700">User name</label>
                <input type="text" id="role" name="role"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                    required>
            </div>
            <div>
                <label for="permissions" class="block text-sm font-medium text-gray-700">Select Permissions</label>
                <select id="permissions" class="permission-select mt-1 block w-full" multiple>
                    <option value="Write">Write</option>
                    <option value="employees">employees</option>
                    <option value="View">View</option>
                    <option value="Orders">Orders</option>
                    <option value="products">products</option>
                    <option value="Delete">Delete</option>
                </select>
            </div>
            <button type="button" id="addPermissionsBtn"
                class="mt-4 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Permissions
            </button>
        </form>
    </div>
    <section class="bg-white ">
        <div class="container ">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="max-w-full overflow-x-auto">
                        <table id="permissionsTable" class="table-auto">
                            <thead>
                                <tr class="text-center bg-primary">
                                    <th
                                        class="w-1/6 min-w-[160px] border-l border-transparent py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                                        Role
                                    </th>
                                    <th
                                        class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                                        Permissions
                                    </th>
                                    <th
                                        class="w-1/6 min-w-[160px] py-4 px-3 text-lg font-medium text-white lg:py-7 lg:px-4">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Existing rows will be added here dynamically -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        $(document).ready(function () {
            $("#addPermissionsBtn").click(function () {
                var role = $("#role").val();
                var permissions = $("#permissions").val().join(", ");
                var newRow = "<tr>" +
                    "<td class='text-dark border-b border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium'>" + role + "</td>" +
                    "<td class='text-dark border-b border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 py-5 px-2 text-center text-base font-medium'>" + permissions + "</td>" +
                    "<td class='text-dark border-b border-r border-[#E8E8E8] bg-white dark:border-dark dark:bg-dark-2 dark:text-dark-7 py-5 px-2 text-center text-base font-medium'>" +
                    "<button type='button' class='btn btn-primary btnEdit'>Edit</button>" +
                    "<button type='button' class='btn btn-primary btnDelete'>Delete</button>" +
                    "</td>" +
                    "</tr>";
                $("#permissionsTable tbody").append(newRow);
            });
        });
    </script>
</body>

</html>
