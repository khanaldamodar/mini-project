<?php
require "../validator.php";
require "../config.php";
$email = $_SESSION['email'];
$sql = "SELECT * FROM users WHERE email= '$email'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashobard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <?php
    require "../includes/sidebar.php";
    ?>
    <div class="p-10 ">
        <h1 class="text-2xl font-semibold">Welcome to the Dashboard,  <?php echo $_SESSION['name'] ?></h1>
    </div>
    <div class="flex items-stretch gap-10 bg-white ml-10 size-auto">
        <div class="bg-white overflow-hidden shadow rounded-lg border">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    User Profile
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    This is some information about the user.
                </p>
            </div>
            <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
                <dl class="sm:divide-y sm:divide-gray-200">
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Full name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $row['name']; ?>
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $row['email']; ?>
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Phone number
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $row['phone']; ?>
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            University
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <?php echo $row['university']; ?>
                        </dd>
                    </div>
                </dl>
            </div>
        </div>
        <div class="border rounded-lg bg-white overflow-hidden px-7">
            <div class="flex flex-col mb-8 md:mb-auto gap-3.5 flex-1 p-5 mt-10">
                <h2 class="flex gap-3 items-center m-auto text-lg font-bold md:flex-col md:gap-2">
                Coming Features...
                </h2>
                <ul class="flex flex-col gap-3.5 w-full sm:max-w-md m-auto">
                    <li class="w-full bg-gray-100 p-3 rounded-md">
                        Get All Notes
                    </li>
                    <li class="w-full bg-gray-100 p-3 rounded-md">Course Details</li>
                    <li class="w-full bg-gray-100 p-3 rounded-md">Share Your Notes
                    </li>
                </ul>
            </div>


        </div>





    </div>



    <!-- Sidebar closed -->
    </div>
    </div>
</body>

</html>