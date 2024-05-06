<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permission Management</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
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
            <button type="button" onclick="addPermissions()" class="mt-4 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Permissions
            </button>
        </form>
    </div>
    <table class="table-auto" id="permissionList">
        <thead>
            <tr>
                <th>Role</th>
                <th>Permission</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- Permissions will be dynamically added here -->
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
        const selectElement = new Choices('#permissions', {
            removeItemButton: true,
            maxItemCount: 5,
            searchEnabled: true,
            searchChoices: true,
            shouldSort: false,
            placeholder: true,
            placeholderValue: 'Select permissions',
        });

        function addPermissions() {
            const selectedPermissions = selectElement.getValue(true);
            const role = document.getElementById('role').value;
            const permissionList = document.getElementById('permissionList').getElementsByTagName('tbody')[0];
            permissionList.innerHTML = ''; // Clear current list
            selectedPermissions.forEach((permission, index) => {
                const permissionRow = document.createElement('tr');
                permissionRow.innerHTML = `
                    <td>${role}</td>
                    <td>${permission}</td>
                    <td>
                        <button type="button" onclick="editPermission(${index})" class="px-3 py-2 bg-yellow-500 text-white rounded-md">Edit</button>
                        <button type="button" onclick="deletePermission(${index})" class="px-3 py-2 bg-red-500 text-white rounded-md">Delete</button>
                    </td>
                `;
                permissionList.appendChild(permissionRow);
            });
            document.getElementById('permissionForm').style.display = 'block';
        }

        function editPermission(index) {
            const permissionList = document.getElementById('permissionList').getElementsByTagName('tbody')[0];
            const permissionInput = permissionList.children[index].querySelector('td:nth-child(2)');
            const editedPermission = prompt('Enter the edited permission:', permissionInput.textContent);
            if (editedPermission !== null) {
                permissionInput.textContent = editedPermission;
            }
        }

        function deletePermission(index) {
            const permissionList = document.getElementById('permissionList').getElementsByTagName('tbody')[0];
            permissionList.removeChild(permissionList.children[index]);
            if (permissionList.children.length === 0) {
                document.getElementById('permissionForm').style.display = 'none'; 
            }
        }
    </script>
</body>
</html>
