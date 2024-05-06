<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta viewport="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <title>Order Module</title>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <h1 class="text-xl font-bold mb-4">Create New Order</h1>
        <form id="selectForm">
            <div>
                <label for="customer" class="block text-sm font-medium text-gray-700">Customer Name</label>
                <input type="text" id="customer" name="customer"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-600 focus:border-pink-600" required>
            </div>
            <div>
                <label for="products" class="block text-sm font-medium text-gray-700">Select Products</label>
                <select id="products" class="product-select mt-1 block w-full" multiple>
                    <option value="Coca Cola">Coca Cola</option>
                    <option value="Sting red">Sting red</option>
                    <option value="Vigo Energy Drink">Vigo Energy Drink</option>
                    <option value="Hanuman Beer">Hanuman Berr</option>
                    <option value="Cambodia Berr">Cambodia Beer</option>
                </select>
            </div>
            <div class="mt-4">
                <label for="paymentMethod" class="block text-sm font-medium text-gray-700">Payment Method</label>
                <select id="paymentMethod" name="paymentMethod"
                    class="mt-1 block w-full px-3 py-2 bg-white border border-pink-300 rounded-md shadow-sm focus:outline-none focus:ring-pink-500 focus:border-pink-500">
                    <option value="Cash">Cash</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Online Payment">Online Payment</option>
                </select>
            </div>
            <button type="button" onclick="addProducts()" class="mt-4 w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Add Products
            </button>
        </form>
        <form id="orderForm" class="mt-8 space-y-4" style="display: none;">
            <div id="productList" class="space-y-4"></div>
            <div class="mt-4 font-bold">
                Total: <span id="totalAmount">$0.00</span>
            </div>
            <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-green-500 hover:bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                Submit Order
            </button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script>
        const selectElement = new Choices('#products', {
            removeItemButton: true,
            maxItemCount: 5,
            searchEnabled: true,
            searchChoices: true,
            shouldSort: false,
            placeholder: true,
            placeholderValue: 'Select products',
        });

        function addProducts() {
            const selectedProducts = selectElement.getValue(true);
            const paymentMethod = document.getElementById('paymentMethod').value;
            const productList = document.getElementById('productList');
            productList.innerHTML = ''; // Clear current list
            selectedProducts.forEach((product, index) => {
                const productRow = document.createElement('div');
                productRow.className = 'flex items-center space-x-3';
                productRow.innerHTML = `
                    
                    <input type="text" readonly value="${product}" name="products[]" class="flex-1 px-3 py-2 border border-gray-300 rounded-md">
                    <input type="number" placeholder="Quantity" name="quantities[]" min="1" class="w-20 px-3 py-2 border border-pink-300 rounded-md quantity" oninput="calculateTotal()">
                    <input type="number" placeholder="Discount" name="discounts[]" value="0" min="0" step="0.01" class="w-32 px-3 py-2 border border-gray-300 rounded-md discount" oninput="calculateTotal()">
                    <input type="text" value="10" name="price[]" class="flex-1 px-3 py-2 border border-gray-300 rounded-md disabled value="Disabled input"">
                    <button type="button" onclick="removeProduct(${index})" class="px-3 py-2 bg-red-500 text-white rounded-md">Remove</button>
                `;
                productList.appendChild(productRow);
            });
            const paymentRow = document.createElement('div');
            paymentRow.className = 'flex items-center space-x-3 mt-4';
            paymentRow.innerHTML = `<label class="block text-sm font-medium text-gray-700">Payment: ${paymentMethod}</label>`;
            productList.appendChild(paymentRow);
            document.getElementById('orderForm').style.display = 'block'; // Show the form
            calculateTotal();
        }

        function removeProduct(index) {
            const productList = document.getElementById('productList');
            productList.removeChild(productList.children[index]);
            if (productList.children.length === 0) {
                document.getElementById('orderForm').style.display = 'none'; // Hide if no products
            }
            calculateTotal();
        }

        function calculateTotal() {
            const quantities = document.querySelectorAll('.quantity');
            const discounts = document.querySelectorAll('.discount');
            let total = 0;
            quantities.forEach((quantity, index) => {
                const productPrice = 10; // Assuming a fixed price for simplicity, replace with actual pricing logic
                const discount = discounts[index] ? parseFloat(discounts[index].value) : 0;
                total += (quantity.valueAsNumber * productPrice) - discount;
            });
            document.getElementById('totalAmount').textContent = `$${total.toFixed(2)}`;
        }
    </script>
</body>
</html>
