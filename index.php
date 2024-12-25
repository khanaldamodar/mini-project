<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini-Project</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    require "./includes/navbar.php"
    ?>
<div class="flex flex-wrap">
    <div class="w-full sm:w-8/12 mb-10">
      <div class="container mx-auto h-full sm:p-10">
        <nav class="flex px-4 justify-between items-center">
          <div class="text-4xl font-bold">
            MINI<span class="text-green-700">.</span>
          </div>
          <div>
            <img src="https://image.flaticon.com/icons/svg/497/497348.svg" alt="" class="w-8">
          </div>
        </nav>
        <header class="container px-4 lg:flex mt-10 items-center h-full lg:mt-0">
          <div class="w-full">
            <h1 class="text-4xl lg:text-6xl font-bold">Enroll your <span class="text-green-700">Course</span> for bright Future</h1>
            <div class="w-20 h-2 bg-green-700 my-4"></div>
            <p class="text-xl mb-10">This is my BCA fourth semester mini project of Scripting language subject. Where you can register yourself as a student and Enroll for some IT courses of Neplai Univerisites.</p>
            <button class="bg-green-500 text-white text-2xl font-medium px-4 py-2 rounded shadow"><a href="./pages/registration.php">Become a User !!</a></button>
          </div>
        </header>
      </div>
    </div>
    <img src="./assets/image/university.jpg" alt="Leafs" class="w-full h-48 object-cover sm:h-screen sm:w-4/12">
  </div>
</body>

</html>