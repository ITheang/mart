<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Button Click Example</title>
    <!-- Include Tailwind CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css"
      rel="stylesheet"
    />
    <style>
      #box1 {
        background-color: black;
      }
      #box1 h1{
        color: whitesmoke;
      }
    </style>
  </head>
  <body class="bg-gray-100">
    <div class="container mx-auto py-8">
        <section class="flex flex-col items-center">
            <div class="inline-flex">
                <button id="button2" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                  CASH
                </button>
                <br>
                <button id="button1" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                  CARD
                </button>
              </div>
            <!-- Label -->
            <div class="lable mt-4">
              <h1 class="text-xl font-bold">Device Connected</h1>
              <div class="boximg mt-2">
                <img src="img/photo_2024-05-04_07-54-58.jpg" alt="" />
              </div>
            </div>
          </section>
          
      <section class="flex flex-col items-center">
        <!-- Box 1 - Initially hidden -->
        <div id="box" class="hidden  w-80 h-32 rounded-md mt-4 flex">
            <div class="boximg flex w-50">
                <img src="img/image.png" alt="" />
            </div>
            <div class="boximg1 flex w-50"> 
                <img src="img/photo_2024-05-04_08-27-33.jpg" alt="" />
            </div>
        </div>
        <div id="box1" class="hidden bg-black-300 w-64 h-32 rounded-md mt-4">
            <h1 class="bg-gray">Fack You pro</h1>
        </div>
      </section>
    </div>

    <script>
      // Function to show box and hide label and box1
      function showBox() {
        document.getElementById("box").classList.remove("hidden"); 
        document.getElementById("box1").classList.add("hidden"); 
        document.querySelector(".lable").classList.add("hidden"); 
      }

      // Function to show box1 and hide label and box
      function showBox1() {
        document.getElementById("box1").classList.remove("hidden"); 
        document.getElementById("box").classList.add("hidden"); 
        document.querySelector(".lable").classList.add("hidden"); 
      }
      document.getElementById("button1").addEventListener("click", function () {
        showBox(); 
      });
      document.getElementById("button2").addEventListener("click", function () {
        showBox1(); 
      });
    </script>
  </body>
</html>
