<?php
include("../../connection/conect.php");
include("../../root/Header.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $employeeId = $_POST['employeeId'];
    $customerId = $_POST['customerid'];
    $discountOrder = $_POST['discount_order'];
    $productIds = $_POST['productId'];
    $quantities = $_POST['quantity'];
    $unitprices = $_POST['unitprice'];
    $discounts = $_POST['discount'];
    $currentDateTime = date('Y-m-d H:i:s');


    try {
        $conn->begin_transaction();

        $insertOrderQuery = "INSERT INTO tblorder (employeeid, customerid, discount, orderdate) VALUES (?, ?, ?, ?)";
        $insertOrderStmt = $conn->prepare($insertOrderQuery);
        $insertOrderStmt->bind_param("iiii", $employeeId, $customerId, $discountOrder, $currentDateTime);
        $insertOrderStmt->execute();

        $orderId = $insertOrderStmt->insert_id;

        $insertDetailStmt = $conn->prepare("INSERT INTO tblorderdetail (orderid, productid, quantity, unitprice, discount) VALUES (?, ?, ?, ?, ?)");

        $totalAmount = 0;

        foreach ($productIds as $index => $productId) {
            $quantity = $quantities[$index];
            $unitprice = $unitprices[$index];
            $discount = $discounts[$index];

            $totalPrice = $unitprice * $quantity * (1 - ($discount / 100));
            $totalAmount += $totalPrice;

            $insertDetailStmt->bind_param("iiddd", $orderId, $productId, $quantity, $unitprice, $discount);
            $insertDetailStmt->execute();

            $updateStockQuery = "UPDATE tblproduct SET instock = instock - ? WHERE productid = ?";
            $updateStockStmt = $conn->prepare($updateStockQuery);
            $updateStockStmt->bind_param("ii", $quantity, $productId);
            $updateStockStmt->execute();
        }

        $insertOrderStmt->close();
        $insertDetailStmt->close();

        $updateOrderQuery = "UPDATE tblorder SET totalamount = ? WHERE orderid = ?";
        $updateOrderStmt = $conn->prepare($updateOrderQuery);
        $updateOrderStmt->bind_param("di", $totalAmount, $orderId);
        $updateOrderStmt->execute();

        $conn->commit();

        $sql = "
            SELECT 
                e.employeename, 
                c.customername, 
                c.address,
                c.phonenumber 
            FROM 
                tblemployee e, tblcustomer c 
            WHERE 
                e.employeeid = ? AND c.customerid = ?
        ";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "ii", $employeeId, $customerId);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_bind_result($stmt, $employeeName, $customerName, $customerAddress, $customerPhone);
            mysqli_stmt_fetch($stmt);
            mysqli_stmt_close($stmt);
        } else {
            echo "Error: " . mysqli_error($conn);
            exit;
        }

        $orderDetailsQuery = "
            SELECT 
                p.productname, 
                od.unitprice, 
                od.quantity, 
                od.discount 
            FROM 
                tblorderdetail od 
                JOIN tblproduct p ON od.productid = p.productid 
            WHERE 
                od.orderid = ?
        ";

        $orderDetailsStmt = $conn->prepare($orderDetailsQuery);
        $orderDetailsStmt->bind_param("i", $orderId);
        $orderDetailsStmt->execute();
        $orderDetailsStmt->bind_result($productName, $unitPrice, $quantity, $discount);

        $orderDetails = [];
        while ($orderDetailsStmt->fetch()) {
            $orderDetails[] = [
                'productname' => $productName,
                'unitprice' => $unitPrice,
                'quantity' => $quantity,
                'discount' => $discount,
            ];
        }
        $orderDetailsStmt->close();

    } catch (Exception $e) {
        $conn->rollback();
        echo "Error: " . $e->getMessage();
    }

    

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <title>Invoice</title>
</head>

<body>
    <div class="container mx-auto p-10">
        <div class="bg-gray-200 p-4 border-2 border-pink-400">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-12">
                <div class="sm:col-span-12">
                    <h1 class="text-b text-pink-500 text-5xl">Pink Mart</h1>
                </div>
                <div class="sm:col-span-12 text-right">
                    <h1 class="text-b text-pink-500 text-5xl">Invoice</h1>
                </div>
                <div class="sm:col-span-12">
                    <h1 class="text-b text-pink-500 text-sm">Invoice Number: <?php echo $orderId; ?></h1>
                </div>
                <div class="sm:col-span-12">
                    <h1 class="text-b text-pink-500 text-sm">Date: <?php echo $currentDateTime; ?></h1>
                </div>
                <div class="sm:col-span-12">
                    <div class="border-b border-1 border-pink-400 my-1"></div>
                </div>
                <div class="sm:col-span-6">
                    <p class="text-base font-medium">Bill From:</p>
                </div>
                <div class="sm:col-span-6">
                    <p class="text-base font-medium">Bill To:</p>
                </div>
                <div class="sm:col-span-6">
                    <p class="text-base">Pink Mart:</p>
                    <p class="text-base">Phnom Penh:</p>
                    <p class="text-base">0716879103:</p>
                </div>
                <div class="sm:col-span-6">
                    <p class="text-base">Bill To:</p>
                    <p><?php echo $customerName; ?></p>
                    <p><?php echo $customerAddress; ?></p>
                    <p><?php echo $customerPhone; ?></p>
                </div>
                <div class="sm:col-span-12">
                    <div class="border-b border-1 border-pink-400 my-1"></div>
                </div>
                <div class="sm:col-span-3">
                    <p class="text-base font-semibold">Item</p>
                </div>
                <div class="sm:col-span-3">
                    <p class="text-base font-semibold">Price</p>
                </div>
                <div class="sm:col-span-3">
                    <p class="text-base font-semibold">Quantity</p>
                </div>
                <div class="sm:col-span-3">
                    <p class="text-base font-semibold">Discount</p>
                </div>
                <div class="sm:col-span-12">
                    <div class="border-b border-1 border-pink-400 my-1"></div>
                </div>
                <?php
                foreach ($orderDetails as $detail) {
                ?>
                <div class="sm:col-span-12 px-10">
                    <div class="border-b border-1 border-pink-400 my-1"></div>
                </div>
                <div class="sm:col-span-3 px-10">
                    <p class="text-base font-semibold"><?php echo $detail['productname'] ?></p>
                </div>
                <div class="sm:col-span-3 px-10">
                    <p class="text-base font-semibold"><?php echo number_format($detail['unitprice'], 2) ?></p>
                </div>
                <div class="sm:col-span-3 px-10">
                    <p class="text-base font-semibold"><?php echo $detail['quantity'] ?></p>
                </div>
                <div class="sm:col-span-3 px-10">
                    <p class="text-base font-semibold"><?php echo $detail['discount'] ?></p>
                </div>
                <div class="sm:col-span-12 px-10">
                    <div class="border-b border-1 border-pink-400 my-1"></div>
                </div>
                <?php
                }
                ?>

                <div class="sm:col-span-12 px-10">
                    <p class="text-base font-semibold">Terms & Conditions:</p>
                </div>
                <div class="sm:col-span-12 px-10 text-right">
                    <p class="text-base font-semibold">Subtotal: $ <?php echo number_format($totalAmount, 2) ?></p>
                    <p class="text-base font-semibold">Discount: % <?php echo $discountOrder ?></p>
                </div>
                <div class="sm:col-span-12 px-10">
                    <div class="border-b border-1 border-pink-400 my-1"></div>
                </div>
                <div class="sm:col-span-12">
                    <div class="border-b border-1 border-pink-400 my-1"></div>
                </div>
                <div class="sm:col-span-12 text-right">
                    <p class="text-base font-semibold">Total:
                        $ <?php echo number_format($totalAmount * (1 - ($discountOrder / 100)), 2) ?></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>