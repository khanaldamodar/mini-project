<?php
// session_start();
require "../validator.php";
require "../config.php";
$email = $_SESSION['email'];
$_SESSION['message'] ="";

$sql = "SELECT * FROM users WHERE email = '$email'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $phone = $_POST['phone'];
    $university = $_POST['university'];
    $college = $_POST['college'];
    $course = $_POST['course'];
    $gpa = $_POST['gpa'];

    $sql = "INSERT INTO enroll(phone, university, college, course, gpa) VALUES ('$phone', '$university', '$college', '$course', '$gpa')";

    $result = mysqli_query($conn, $sql);

    if($result == TRUE){
        $_SESSION['message'] = "enrolled";
        header("location: enroll.php");
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enroll Your Course</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php
    require "../includes/sidebar.php";
    ?>
<div class="flex items-center justify-center p-12">
    <!-- Author: FormBold Team -->
    <div class="mx-auto w-full max-w-[550px] bg-white">
        <?php
        if($_SESSION['message'] == ""){
            echo "";
        }
        elseif($_SESSION['message'] == "enrolled"){
            echo "<p> Successfully Enrolled</p>";
        }
        unset($_SESSION['message']);
        
        ?>
        
        <form action="" method="POST">
            <div class="mb-5">
                <label for="name" class="mb-3 block text-base font-medium text-[#07074D]">
                    Full Name
                </label>
                <input type="text" name="name" id="name" placeholder="Full Name" value = <?php echo $row['name']?>
                  readonly  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="phone" class="mb-3 block text-base font-medium text-[#07074D]">
                    Phone Number
                </label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number" value = <?php echo $row['phone']?>
                   readonly class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="mb-5">
                <label for="email" class="mb-3 block text-base font-medium text-[#07074D]">
                    Email Address
                </label>
                <input type="email" name="email" id="email" placeholder="Enter your email" value = <?php echo $row['email']?>
                  readonly  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="university" class="mb-3 block text-base font-medium text-[#07074D]">
                            University
                        </label>
                        <select name="university" id="university" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >
                            <option value="">Select University</option>
                            <option value="Tribhuvan University">Tribhuvan University</option>
                            <option value="Pokhara University">Pokhara University</option>
                            <option value="Kathmandu University">Kathmandu University</option>
                            <option value="others">Others</option>
                        </select>
                            
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="college" class="mb-3 block text-base font-medium text-[#07074D]">
                            College Name
                        </label>
                        <input type="text" name="college" id="college" value = <?php echo $row['college']?>
                           readonly class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                </div>
            </div>
            <div class="-mx-3 flex flex-wrap">
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="university" class="mb-3 block text-base font-medium text-[#07074D]">
                            Course Name
                        </label>
                        <select  name="course" id="course" required
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" >
                            <option value=""> Select Your Course</option>
                            <option value="bca">BCA</option>
                            <option value="bit">BIT</option>
                            <option value="bicte">BICTE</option>
                            <option value="bim">BIM</option>
                            <option value="bsccsit">BSC.CSIT</option>
                        </select>
                            
                    </div>
                </div>
                <div class="w-full px-3 sm:w-1/2">
                    <div class="mb-5">
                        <label for="gpa" class="mb-3 block text-base font-medium text-[#07074D]">
                            +2 GPA
                        </label>
                        <input type="text" name="gpa" id="gpa"
                          required  class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" placeholder="Your GPA" />
                    </div>
                </div>
            </div>

         

            <div>
                <button
                    class="hover:shadow-form w-full rounded-md bg-[#6A64F1] py-3 px-8 text-center text-base font-semibold text-white outline-none">
                    Enroll
                </button>
            </div>
        </form>
    </div>
</div>


<!-- Close of Sidebar -->



</div>
    </div>

</body>

</html>