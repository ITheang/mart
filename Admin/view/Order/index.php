<?php
include("../../connection/conect.php");
include("../../root/Header.php");
$sql_product = "SELECT * FROM tblproduct WHERE instock > 1";
$sql_employee = "SELECT * FROM tblemployee";
$sql_customer = "SELECT * FROM tblcustomer";


$result_product = mysqli_query($conn, $sql_product);
$result_employee = mysqli_query($conn, $sql_employee);
$result_customer = mysqli_query($conn, $sql_customer);

$products = [];
while ($row = mysqli_fetch_assoc($result_product)) {
    $products[] = $row;
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta viewport="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <title>Order Product</title>
    <style>
    .product {
        margin-bottom: 10px;
    }
    </style>
    <style>
    .choices__inner {
        border: 0;
        padding: 7px 0 0 20px;
        color: #f472b6;
        box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
        border-radius: 0.375rem;
        border: 1.5px solid #f472b6;
    }

    .choices__inner:focus-within {
        outline: none;
        border-color: #f472b6;
        box-shadow: 0 0 0 0.25rem rgba(236, 72, 153, 0.25);
    }

    .choices__list--dropdown .choices__item--selectable {
        color: #f472b6;

    }
    </style>

    <script>
    let productIndex = 1;

    function addProduct() {
        const productDiv = document.createElement('div');
        productDiv.className = 'product';
        productDiv.innerHTML = `
    <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-5">
        <div class="sm:col-span-1">
            <div class="mt-2">
                <select id="productId${productIndex}" name="productId[]" class="product-select mt-1 block w-full text-pink-400" data-search required>
                    <option value="">Select Product</option>
                    <?php foreach ($products as $product) : ?>
                    <option value="<?php echo $product['productid']; ?>"><?php echo $product['productname']; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
        </div>
        <div class="sm:col-span-1">
            <div class="mt-2">
                <input type="text" id="unitprice${productIndex}" autocomplete="off" name="unitprice[]" min="0" step="0.01" class="block w-full rounded-md border-0 pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-sm sm:leading-6" required>
            </div>
        </div>
        <div class="sm:col-span-1">
        <div class="mt-2">
                <input type="text" id="quantity${productIndex}" autocomplete="off" name="quantity[]" min="1" class="block w-full rounded-md border-0 pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-sm sm:leading-6" required>
            </div>
        </div>
        <div class="sm:col-span-1">
            <div class="mt-2">
                <input type="text" id="discount${productIndex}" autocomplete="off"  name="discount[]" min="0" step="0.01" class="block w-full rounded-md border-0 pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-sm sm:leading-6" required>
            </div>
        </div>
        <div class="sm:col-span-1 flex items-center">
            <button type="button" onclick="removeProduct(this)" class="text-pink-400">Remove</button>
        </div>
    </div>
    `;
        document.getElementById('products').appendChild(productDiv);
        productIndex++;

        // Initialize Choices for the newly added select element
        const selectElement = productDiv.querySelector('.product-select');
        new Choices(selectElement, {
            removeItemButton: true,
            searchEnabled: true,
            searchChoices: true,
            shouldSort: false,
            placeholder: true,
            placeholderValue: 'Select a product',
            searchPlaceholderValue: 'Search...',
        });
    }
    </script>

</head>

<body>
    <div class="container mx-auto p-10">
        <div class="bg-gray-200 p-4 border-2 border-pink-400">
            <form action="insert_order.php" method="post">
                <label for="employeeId" class="block text-sm font-medium leading-6 text-pink-400">Employee
                    ID:</label>
                <input type="text" id="employeeId" name="employeeId" required><br><br>
                <h1 class="text-center font-bold text-3xl text-pink-600">Pink Mart</h1>
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-12">
                    <div class="sm:col-span-6">
                        <label for="products"
                            class="block text-sm font-medium leading-6 text-pink-400 text-2xl">Customer</label>
                        <div class="mt-2">
                            <select id="customerid" name="customerid"
                                class="product-select mt-1 block w-full text-pink-400" required>
                                <option value="">Select Customer</option>
                                <?php
            while ($row = mysqli_fetch_assoc($result_customer)) {
                echo "<option value='{$row['customerid']}'>{$row['customername']} - {$row['phonenumber']}</option>";
            }
            ?>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-6">
                        <label for="discount_order"
                            class="block text-sm font-medium leading-6 text-pink-400 text-2xl">Discount</label>
                        <div class="mt-2">
                            <input type="text" id="discount_order" name="discount_order" autocomplete="off"
                                class="block w-full rounded-md border-0 pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                </div>
                <div class="border-b border-1 border-pink-400 mt-12"></div>
                <div id="products">
                    <div class="product">
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-5">
                            <div class="sm:col-span-1">
                                <label for="products" class="block text-sm font-medium leading-6 text-pink-400">Product
                                    Name</label>
                                <div class="mt-2">
                                    <select id="productId0" name="productId[]"
                                        class="product-select mt-1 block w-full text-pink-400" required>
                                        <option value="">Select Product</option>
                                        <?php foreach ($products as $product) : ?>
                                        <option value="<?php echo $product['productid']; ?>">
                                            <?php echo $product['productname']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="region" class="block text-sm font-medium leading-6 text-pink-400">Unit
                                    Price</label>
                                <div class="mt-2">
                                    <input type="text" id="unitprice0" name="unitprice[]" autocomplete="off"
                                        class="block w-full rounded-md border-0 pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="region"
                                    class="block text-sm font-medium leading-6 text-pink-400">Quantity</label>
                                <div class="mt-2">
                                    <input type="text" id="quantity0" name="quantity[]" autocomplete="off"
                                        class="block w-full rounded-md border-0 pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-1">
                                <label for="region"
                                    class="block text-sm font-medium leading-6 text-pink-400">Discount</label>
                                <div class="mt-2">
                                    <input type="text" id="discount0" name="discount[]" autocomplete="off"
                                        class="block w-full rounded-md border-0 pl-2 py-2.5 text-pink-400 shadow-sm ring-1 ring-inset ring-pink-400 placeholder:text-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-400 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <button type="button" onclick="addProduct()"
                    class="border border-pink-500 bg-pink-700 text-white font-bold py-2 px-4 rounded cursor-pointer">Add
                    Another Product</button><br><br>
                <!-- Employee Information -->

                <!-- Submit Button -->
                <input type="submit"
                    class="border border-pink-500 bg-pink-700 text-white font-bold py-2 px-4 rounded cursor-pointer"
                    value="Submit Order">
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const selectElements = document.querySelectorAll('.product-select');
        selectElements.forEach(function(selectElement) {
            new Choices(selectElement, {
                removeItemButton: true,
                searchEnabled: true,
                searchChoices: true,
                shouldSort: false,
                placeholder: true,
                placeholderValue: 'Select a product',
            });
        });
    });



    function removeProduct(element) {
        const productDiv = element.closest('.product');
        productDiv.remove();
    }
    </script>
</body>

</html>