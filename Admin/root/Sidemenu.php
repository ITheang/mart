<?php
    include("Header.php");
?>
</head>
<body class="bg-blue-200">
    <div class="box">

    </div>
    <div class="menu">
        <br>
        <ul class="list-unstyled components ">
            <li>
                <a href="Content.php" target="content">Dasborad</a>
            </li>
            
            <!-- Set Up -->
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">View</a>
                <ul class="collapse list-unstyled" id="homeSubmenu" style="margin-left: 20px;">
                    <li>
                        <a href="../view/products/index.php" target="content">News product</a>
                    </li>
                    <li>
                        <a href="../view/employees/index.php" target="content">News employees</a>
                    </li>
                    <li>
                        <a href="../view/sex/index.php" target="content">News sex</a>
                    </li>
                    <li>
                        <a href="../view/customers/index.php" target="content">News customers</a>
                    </li>
                    <li>
                        <a href="../view/stock_in/index.php" target="content">News stock_in</a>
                    </li>
                    <li>
                        <a href="../view/positions/index.php" target="content">News positions</a>
                    </li>
                    <li>
                        <a href="../view/suppliers/index.php" target="content">News suppliers</a>
                    </li>
                    <li>
                        <a href="../view/payment_type/index.php" target="content">News payment_type</a>
                    </li>
                    <li>
                        <a href="../view/payments/index.php" target="content">News payments</a>
                    </li>
                    <li>
                        <a href="../view/transaction_items/index.php" target="content">News transaction_items</a>
                    </li>
                    <li>
                        <a href="../view/transactions/index.php" target="content">News transactions</a>
                    </li>
                </ul>
            </li>

            <!-- Manage User -->
            <li class="active">
                <a href="#User" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Manage User</a>
                <ul class="collapse list-unstyled" id="User" style="margin-left: 20px;">
                    <li>
                        <a href="../AddUserAdmin/index.php" target="content">User Admin</a>
                    </li>
                    <li>
                        <a href="../AddNormalUser/index.php" target="content">User</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
   
</body>
<!-- jQuery CDN - Slim version (=without AJAX) -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
<!-- jQuery Custom Scroller CDN -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        // $('#sidebarCollapse').on('click', function () {
        //     $('#sidebar, #content').toggleClass('active');
        //     $('.collapse.in').toggleClass('in');
        //     $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        // });
    });
</script>
</html>