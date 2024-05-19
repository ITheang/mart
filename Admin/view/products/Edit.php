<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <title>Edit product</title>
</head>

<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <!-- header -->
        <h1 class="text-xl font-bold mb-4">Update Product Information</h1>
        <form id="selecForm">
            <div class="p-2 grid gap-x-4 gap-y-1 grid-cols-3 border border-transparent">
            <div>
                    <input type="text" readonly value="ProductID" name="nameLabel"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="ProductID" name="ProductID"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="ProductName" name="ProductName"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="ProductName" name="ProductName"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="CategoryID" name="CategoryID"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="CategoryID" name="CategoryID"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="SupplierID" name="SupplierID"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="SupplierID" name="SupplierID"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="Quantity" name="Quantity"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="Quantity" name="Quantity"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="PriceIn" name="PriceIn"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="PriceIn" name="PriceIn"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value=" PriceOut" name=" PriceOut"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="PriceOut" name="PriceOut"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="InStock" name="InStock"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="text" id="InStock" name="InStock"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value="ProductImage" name="ProductImage"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="file" id="ProductImage" name="ProductImage"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
                </div>
                <div>
                    <input type="text" readonly value=" ProductDate" name="ProductDate"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-600 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600">
                </div>
                <div class="col-span-2">
                    <input type="date" id="ProductDate" name="ProductDate"
                        class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600"
                        required>
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