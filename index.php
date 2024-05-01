<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .menu {
            width: 100%;
            background-color: palegreen;
            padding: 10px;
            border-radius: 5px;
            overflow: hidden;
        }

        .menu h1 {
            text-align: center;
        }

        .menu ul {
            list-style-type: none;
            padding: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .menu ul li {
            margin-right: 30px;
            margin-bottom: 10px;
        }

        .menu ul li:last-child {
            margin-right: 0;
        }

        .menu ul li a {
            text-decoration: none;
            color: #333;
            display: block;
            padding: 5px 10px;
            border-radius: 3px;
            transition: background-color 0.3s ease;
        }

        .menu ul li a:hover {
            background-color: #ddd;
        }

        .contact {
            width: 100%;
            background-color: #eee;
            min-height: 100vh;
        }

        @media only screen and (min-width: 768px) {

            .contact {
                width: 100%;
                float: right;
            }
        }
    </style>
</head>

<body>
    <div class="menu">
        <ul>
            <li><a href="#"><i class="fa-solid fa-bars"></i></a></li>
            <li><a href="#"><i class="fas fa-info-circle"></i> </a></li>
            <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
            <li><a href="#"><i class="fas fa-users"></i> </a></li>
            <li><a href="#"><i class="fa-solid fa-chart-simple"></i></a></li>
            <li><a href="#"><i class="fas fa-home"></i> Online</a></li>
            <li><a href=""><i class="fa-solid fa-bell"></i></a></li>
            <li><a href="#"><i class="fas fa-search"></i></a></li>
            <li><a href="#"><i class="fa-solid fa-right-to-bracket"></i></i></a></li>
        </ul>

    </div>
    <div class="contact">
        <h2>Contact</h2>
        <h2>Contact2</h2>
        <h2>Contact4</h2>
        <h2>Contact5</4h2>
        <h2>Contact6</4h2>
        <h2>Contact7</h2>
        <h4>hdhc</h4>
    </div>
</body>

</html>