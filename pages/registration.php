<?php
require "../config.php";

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $fullname = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $university = $_POST['university'];
    $college = $_POST['college'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if(!$fullname || !$phone || !$email || !$university || !$college || !$password || !$cpassword){
        echo "All Fields Are Required";
    }elseif(strlen($phone) !== 10){
        echo "Phone number must be 10 Digits!";
    }elseif($password !== $cpassword){
        echo "Confirm password must be same";
    }else{
        $sql = "INSERT INTO users(uid, name, phone, email, university, college, passkey) VALUES(1, '$fullname','$phone', '$email', '$university', '$college', '$password')";
        $result = mysqli_query($conn, $sql);

        if($result == TRUE){
            echo "Registration Successfull";
        }
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    

    <div class="flex items-center justify-center p-12 mt-12">
        <!-- Author: FormBold Team -->
        <div class="mx-auto w-full max-w-[550px] bg-white">
            <h1 class="text-5xl mb-8">REGISTRATION FORM</h1>
            <form action="" method="POST">
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                        Full Name
                    </label>
                    <input type="text" name="name" id="name" placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                        Phone Number
                    </label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                        Email Address
                    </label>
                    <input type="email" name="email" id="email" placeholder="Enter your email"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="-mx-3 flex flex-wrap">
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="university" class="mb-3 block text-base font-medium text-[#07074D]">
                                University
                            </label>
                            <select type="university" name="university" id="university"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md">
                                <option value="">Select University</option>
                                <option value="TU">Tribhuvan University</option>
                                <option value="PU">Pokhara University</option>
                                <option value="KU">Kathmandu University</option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="college" class="mb-3 block text-base font-medium text-[#07074D]">
                                College Name
                            </label>
                            <input type="text" name="college" id="college" reqired
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="College Name" />
                        </div>
                    </div>

                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                                Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="Enter your password"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:w-1/2">
                        <div class="mb-5">
                            <label for="cpassword" class="mb-3 block text-base font-medium text-[#07074D]">
                                Confirm Password
                            </label>
                            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                        </div>
                    </div>



                </div>
                <!-- <div class="mb-5">
                <label for="password" class="mb-3 block text-base font-medium text-[#07074D]">
                    Password
                </label>
                <input type="password" name="password" id="password" placeholder="Enter your password"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="cpassword" class="mb-3 block text-base font-medium text-[#07074D]">
                    Confirm Password
                </label>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm password"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div> -->




                <div>
                    <button
                        class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Sign up
                    </button>
                </div>

            </form>
            <p class="text-center mt-2">Already have an Account? <a class="text-blue-800 font-semibold" href="../login.php">Login</a></p>
        </div>
    </div>

</body>

</html>