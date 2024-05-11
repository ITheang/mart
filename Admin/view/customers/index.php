<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css">
    <title>Document</title>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-3xl mx-auto bg-white p-5 rounded-lg shadow-xl">
        <!-- header -->
        <h1 class="text-xl font-bold mb-4">Customer List test</h1>
        <form id="selecForm">
        <button type="button" class="mt-4 w-1/4 flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create New Customer</button><br>
        <div class="p-2 grid grid-cols-5 border border-transparent">
            <div class=""><h3>No</h3></div>
            <div class=""><h3>Name</h3></div>
            <div class=""><h3>Sex</h3></div>
            <div class=""><h3>Phone Number</h3></div>
            <div class=""><h3>Action</h3></div>
        </div>
        <div class="p-2 grid grid-cols-5 border border-transparent">
            <div class=""><h3>1</h3></div>
            <div class=""><h3>Heang</h3></div>
            <div class=""><h3>M</h3></div>
            <div class=""><h3>012345678</h3></div>
            <div class="">
                <button type="button" class="justify-center py-1 px-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Edit</button>
                <button type="button" class="justify-center py-1 px-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-pink-500 hover:bg-pink-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</button>
            </div>
        </div>
        </form>
    </div>
</body>
</html>