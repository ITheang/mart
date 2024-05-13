<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <title>Create Customer</title>
    <style>
        .Thomasfadi {
            display: flex;
            justify-content: space-between;
            }
            .checkbox{
                border: 2px solid #000; /* Black border with 2px thickness */
                padding: 20px; /* Add some padding inside the box */
                width: 20%; /* Make the box fit its content */
                margin: 10px auto; /* Center the box horizontally */
            }

        .checkbox-con {
            margin: 10px;
            display: flex;
            align-items: center;
            color: white;
        }

        .checkbox-con input[type="checkbox"] {
            appearance: none;
            width: 48px;
            height: 27px;
            border: 2px solid #ff0000;
            border-radius: 20px;
            background: #f1e1e1;
            position: relative;
            box-sizing: border-box;
        }

        .checkbox-con input[type="checkbox"]::before {
            content: "";
            width: 14px;
            height: 14px;
            background: rgba(234, 7, 7, 0.5);
            border: 2px solid #ea0707;
            border-radius: 50%;
            position: absolute;
            top: 0;
            left: 0;
            transform: translate(13%, 15%);
            transition: all 0.3s ease-in-out;
        }

        .checkbox-con input[type="checkbox"]::after {
            content: url("data:image/svg+xml,%3Csvg xmlns='://www.w3.org/2000/svg' width='23' height='23' viewBox='0 0 23 23' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M6.55021 5.84315L17.1568 16.4498L16.4497 17.1569L5.84311 6.55026L6.55021 5.84315Z' fill='%23EA0707' fill-opacity='0.89'/%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M17.1567 6.55021L6.55012 17.1568L5.84302 16.4497L16.4496 5.84311L17.1567 6.55021Z' fill='%23EA0707' fill-opacity='0.89'/%3E%3C/svg%3E");
            position: absolute;
            top: 0;
            left: 20px;
        }

        .checkbox-con input[type="checkbox"]:checked {
            border: 2px solid #02c202;
            background: #e2f1e1;
        }

        .checkbox-con input[type="checkbox"]:checked::before {
            background: rgba(2, 194, 2, 0.5);
            border: 2px solid #02c202;
            transform: translate(133%, 13%);
            transition: all 0.3s ease-in-out;
        }

        .checkbox-con input[type="checkbox"]:checked::after {
            content: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='15' height='13' viewBox='0 0 15 13' fill='none'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M14.8185 0.114533C15.0314 0.290403 15.0614 0.605559 14.8855 0.818454L5.00187 12.5L0.113036 6.81663C-0.0618274 6.60291 -0.0303263 6.2879 0.183396 6.11304C0.397119 5.93817 0.71213 5.96967 0.886994 6.18339L5.00187 11L14.1145 0.181573C14.2904 -0.0313222 14.6056 -0.0613371 14.8185 0.114533Z' fill='%2302C202' fill-opacity='0.9'/%3E%3C/svg%3E");
            position: absolute;
            top: 5px;
            left: 5px;
        }

        .checkbox-con label {
            margin-left: 10px;
            cursor: pointer;
            user-select: none;
        }

        /* .tablebox {
            width: 100%;
            height: 40px;
            background-color: darkgray;
            align: center;
        } */
    </style>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <!-- header -->
        <h1 class="text-xl font-bold mb-4">Updete Permission</h1>
        <form id="selecForm">
            <div class="p-2 grid grid-cols-6 gap-x-3 gap-y-2 border border-transparent">
                <div class="col-span-4">
                </div>
                <button type="button"
                    class="justify-center py-1 px-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                <a href="index.php"
                    class="justify-center py-1 px-2 text-center border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</a>
            </div>

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
            <div class="container">
                <div class="tablebox bg-pink-200">
                    <h2>Product</h2>
                </div>
                <div class="Thomasfadi">
                    <div class="checkbox">
                        <table>Add New Product</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>All Product</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>In House Product</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Seller Product</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="Thomasfadi">
                    <div class="checkbox">
                        <table>Bulk Expot</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Category</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Brand</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Attribute</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="tablebox mt-3 bg-pink-200">
                    <h2>Sale</h2>
                </div>
                <div class="Thomasfadi">
                    <div class="checkbox">
                        <table>All Orders</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Inhouse Orders</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Seller Orders</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="tablebox mt-3 bg-pink-200">
                    <h2>Costomers</h2>
                </div>
                <div class="Thomasfadi">
                    <div class="checkbox">
                        <table>Add new Costomers</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>All Costomers</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Costomers</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                </div>

                <div class="tablebox mt-3 bg-pink-200">
                    <h2>Stock</h2>
                </div>
                <div class="Thomasfadi">
                    <div class="checkbox">
                        <table>Add New Stock</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>All Stock</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Stock</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="tablebox mt-3 bg-pink-200">
                    <h2>Suppliers</h2>
                </div>
                <div class="Thomasfadi">
                    <div class="checkbox">
                        <table>All Suppliers</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                </div>
                <div class="tablebox bg-pink-200">
                    <h2>Payment</h2>
                </div>
                <div class="Thomasfadi">
                    <div class="checkbox">
                        <table>All Payment</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Online Payment</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Payment</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Payment</table>
                        <div class="checkbox-con">
                            <input id="checkbox" type="checkbox">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>