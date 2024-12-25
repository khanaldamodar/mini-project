<?php
session_start();
require "./config.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $email = $_POST['email']; 
  $password = $_POST['password'];

  $sql = "SELECT email, passkey, name FROM users";
  $result = mysqli_query($conn,$sql);

  if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_assoc($result)){
      if($row['email'] != $email || $row['passkey'] != $password){
        echo "email and Password not matched!";
      }else{
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header("location: ./pages/dashboard.php");
        
      }
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    require "./includes/navbar.php";
    ?>

<div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
  <div class="relative py-3 sm:max-w-xl sm:mx-auto">
    <div
      class="absolute inset-0 bg-gradient-to-r from-cyan-400 to-sky-500 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
    </div>
    <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">

      <div class="max-w-md mx-auto">
        <div>
          <h1 class="text-2xl font-semibold">Login</h1>
        </div>
        <form action="" method="post">

          <div class="divide-y divide-gray-200">
            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
              <div class="relative">
                <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Email Address</label>
              </div>
              <div class="relative">
                <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" placeholder="Password" />
                <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">Password</label>
              </div>
              <div class="relative">
                <button class="bg-cyan-500 text-white rounded-md px-2 py-1">Submit</button>
              </div>
              <p class="text-center mt-2">Don't have an Account? <a class="text-blue-800 font-semibold" href="./pages/registration.php">Register Here</a></p>
            </div>
          </div>
        </form>
      </div>

    

    </div>
  </div>
</div>
    
</body>
</html>