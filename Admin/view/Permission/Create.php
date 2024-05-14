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
        .Thomasfadi{
            display: flex;
            justify-content: space-between;
        }
        .checkbox{
            border: 2px solid #000; /* Black border with 2px thickness */
            padding: 20px; /* Add some padding inside the box */
            width: 30%; /* Make the box fit its content */
            margin: 20px auto; /* Center the box horizontally */
        }
        .tablebox{
            width: 100%;
            height: 40px;
            align: center;
        }

        .switch {
  position: relative;
  height: 1.5rem;
  width: 3rem;
  cursor: pointer;
  appearance: none;
  -webkit-appearance: none;
  border-radius: 9999px;
  background-color: rgba(100, 116, 139, 0.377);
  transition: all .3s ease;
}

.switch:checked {
  background-color: rgba(236, 72, 153, 1);
}

.switch::before {
  position: absolute;
  content: "";
  left: calc(1.5rem - 1.6rem);
  top: calc(1.5rem - 1.6rem);
  display: block;
  height: 1.6rem;
  width: 1.6rem;
  cursor: pointer;
  border: 1px solid rgba(100, 116, 139, 0.527);
  border-radius: 9999px;
  background-color: rgba(255, 255, 255, 1);
  box-shadow: 0 3px 10px rgba(100, 116, 139, 0.327);
  transition: all .3s ease;
}

.switch:hover::before {
  box-shadow: 0 0 0px 8px rgba(0, 0, 0, .15)
}

.switch:checked:hover::before {
  box-shadow: 0 0 0px 8px rgba(236, 72, 153, .15)
}

.switch:checked:before {
  transform: translateX(100%);
  border-color: rgba(236, 72, 153, 1);
}
    </style>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <!-- header -->
        <h1 class="text-xl font-bold mb-4">Permission Information</h1>
        <form id="selecForm">
            <div class="p-2 grid grid-cols-6 gap-x-3 gap-y-2 border border-transparent">
                <div class="col-span-4">
                </div>
                <button type="button"
                    class="justify-center py-1 px-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                <a href="index.php"
                    class="justify-center py-1 px-2 text-center border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Cancel</a>
            </div>

            <div class="p-2 grid gap-x-4 gap-y-1 grid-cols-6 border border-transparent">
                <div class="mt-1 block w-full px-3 py-2 text-end">
                    Role:
                </div>
                <div class="col-span-5">
                    <input type="text" id="cusName" name="cusName"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                
            </div>
            <div class="container mt-2">
                <div class="tablebox bg-pink-200">
                    <h2>Product</h2>
                </div>
                <div class="Thomasfadi text-center">
                    <div class="checkbox">
                        <table>Add New Product</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>All Product</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>In House Product</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Seller Product</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                </div>
                <div class="Thomasfadi text-center">
                    <div class="checkbox">
                        <table>Bulk Expot</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Category</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Brand</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Attribute</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                </div>
                
                <div class="tablebox mt-3 bg-pink-200">
                    <h2>Sale</h2>
                </div>
                <div class="Thomasfadi text-center">
                    <div class="checkbox">
                        <table>All Orders</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Inhouse Orders</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Seller Orders</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                </div>

                <div class="tablebox mt-3 bg-pink-200">
                    <h2>Costomers</h2>
                </div>
                <div class="Thomasfadi text-center">
                    <div class="checkbox">
                        <table>Add new Costomers</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>All Costomers</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Costomers</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                </div>

                <div class="tablebox mt-3 bg-pink-200">
                    <h2>Stock</h2>
                </div>
                <div class="Thomasfadi text-center">
                    <div class="checkbox">
                        <table>Add New Stock</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>All Stock</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Stock</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                </div>
                <div class="tablebox mt-3 bg-pink-200">
                    <h2>Suppliers</h2>
                </div>
                <div class="Thomasfadi text-center">
                    <div class="checkbox">
                        <table>All Suppliers</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                </div>
                <div class="tablebox bg-pink-200">
                    <h2>Payment</h2>
                </div>
                <div class="Thomasfadi text-center">
                    <div class="checkbox">
                        <table>All Payment</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Online Payment</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Payment</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                    <div class="checkbox">
                        <table>Payment</table>
                        <div class="checkbox-con mt-2">
                            <input class="switch" type="checkbox" checked="true">
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
</body>

</html>