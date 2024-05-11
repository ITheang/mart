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
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <h1 class="text-xl font-bold mb-4">Manage User Permissions</h1>
        <form id="selectForm">
            <div>
                <label for="role" class="block text-sm font-medium text-gray-700">User name</label>
                <input type="text" id="role" name="role"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600" required>
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
            <button type="button" id="addPermissionsBtn" class="mt-4 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Permissions
            </button>
        </form>
    </div>
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl mt-8 table-responsive">
        <h2 class="text-lg font-bold mb-4">Permission List</h2>
        <table class="table-auto table table-bordered" id="permissionList">
            <thead>
                <tr>
                    <th>Role</th>
                    <th>Permissions</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="permissionBody">
                <!-- Permissions will be dynamically added here -->
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function(){
            $("#addPermissionsBtn").click(function(){
                var role = $("#role").val();
                var permissions = $("#permissions").val();

                var existingRow = $(`#permissionBody tr[data-role="${role}"]`);
                if (existingRow.length > 0) {
                    var permissionCell = existingRow.find(".permissions");
                    $.each(permissions, function(index, permission){
                        permissionCell.append(permission + "<br>");
                    });
                } else {
                    var newRow = $("<tr>").attr("data-role", role);
                    var roleCell = $("<td>").text(role);
                    var permissionCell = $("<td>").addClass("permissions");
                    $.each(permissions, function(index, permission){
                        permissionCell.append(permission + "<br>");
                    });
                    var actionCell = $("<td>");
                    var editBtn = $("<button>").text("Edit");
                    var deleteBtn = $("<button>").text("Delete");
                    deleteBtn.click(function(){
                        // Implement delete functionality here
                        $(this).closest("tr").remove();
                    });
                    editBtn.click(function(){
                        // Implement update functionality here
                        var newPermissions = prompt("Enter new permissions:");
                        if (newPermissions !== null) {
                            permissionCell.empty();
                            $.each(newPermissions.split(','), function(index, permission){
                                permissionCell.append(permission.trim() + "<br>");
                            });
                        }
                    });
                    actionCell.append(editBtn).append(deleteBtn);
                    newRow.append(roleCell);
                    newRow.append(permissionCell);
                    newRow.append(actionCell);
                    $("#permissionBody").append(newRow);
                }
            });
        });
    </script>
</body>
</html>
