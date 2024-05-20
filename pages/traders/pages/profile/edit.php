<?php
session_start();
if (!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])) {
    header("Location: ../../auth/sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../../css/style.css" />
    <?php include "../../../connection.php"; ?>
</head>

<body>
    <?php

    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id'];
        $query = "SELECT * FROM `traders` WHERE `id` = '$user_id'";
        $result = mysqli_query($con, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);
        }

        $user_shop_type = $user['shop_type'] ?? '';
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
        // Collect and sanitize user input
        $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
        $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
        $user_name = mysqli_real_escape_string($con, $_POST['user_name']);
        $contact = mysqli_real_escape_string($con, $_POST['contact']);
        $shop_name = mysqli_real_escape_string($con, $_POST['shop_name']);
        $address = mysqli_real_escape_string($con, $_POST['address']);
        $shop_type = mysqli_real_escape_string($con, $_POST['shop_type']);
        $old_password = mysqli_real_escape_string($con, $_POST['old_password']);
        $new_password = mysqli_real_escape_string($con, $_POST['new_password']);

        $email = $user['email'];

        $query = "SELECT * FROM `traders` WHERE `email` = '$email'";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $user = mysqli_fetch_assoc($result);

            $update_query = "UPDATE `traders` SET 
            `first_name` = '$first_name',
            `last_name` = '$last_name',
            `user_name` = '$user_name',
            `contact` = '$contact',
            `shop_name` = '$shop_name',
            `address` = '$address',
            `shop_type` = '$shop_type'";

            if (password_verify($old_password, $user['password'])) {
                if (!empty($new_password)) {
                    $hashed_new_password = password_hash($new_password, PASSWORD_DEFAULT);
                    $update_query .= ", `password` = '$hashed_new_password'";
                }
            } else {
                $_SESSION['message'] = "Invalid old password!";
            }
        } else {
            $_SESSION['message'] = "User not found!";
        }
        $update_query .= " WHERE `email` = '$email'";
        if (mysqli_query($con, $update_query)) {
            $_SESSION['message'] = "Profile updated successfully!";
            header("Location: profile.php");
            exit();
        } else {
            $_SESSION['message'] = "Error updating profile!";
        }
        exit();
    }
    ?>


    <div class="px-4 mt-10 flex gap-10">
        <div class="w-1/4 h-fit bg-gray rounded-md py-10">
            <div class="flex items-center justify-center">
                <div class="w-[60px] h-[60px] rounded-full relative">
                    <img class="h-full w-full rounded-full object-cover" src="../../../../image/profile/profile.jpg"
                        alt="" />
                    <div
                        class="absolute flex items-center justify-center right-[-5px] top-8 w-[25px] h-[25px] rounded-full bg-black">
                        <i class="fa-solid fa-camera text-white"></i>
                    </div>
                </div>
            </div>
            <p class="text-center mt-3 text-xl">
                <?php
                echo $_SESSION['full_name'] ?? 'N/A';
                ?>
            </p>

            <div class="mt-6 px-4 side-bar">
                <p class="border-b-1 ab-2 block">Profile</p>
                <a href="../dashboard.php" class="text-gray mt-3 block cursor-pointer">Dashboard</a>
                <a href="./profile.php" class="text-gray mt-3 block cursor-pointer">account</a>
                <a class="text-gray mt-3 block cursor-pointer active">Edit</a>
                <a href="../../auth/logout.php" class="text-gray mt-3 block cursor-pointer">Log Out</a>
            </div>
        </div>
        <!--  -->
        <div class="w-1/2">
            <h1 class="font-semibold text-xl">Edit</h1>
            <div class="mt-4">
                <form action="" method="post">
                    <div class="mt-3">
                        <p class="text-gray-500 uppercas">First Name </p>
                        <input type="text" value="<?php echo $user['first_name'] ?? 'NA'; ?>" name="first_name"
                            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full" />
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-500 uppercase">last name </p>
                        <input type="text" value="<?php echo $user['last_name'] ?? 'NA'; ?>" name="last_name"
                            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full" />
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-500 uppercase">user name </p>
                        <input type="text" value="<?php echo $user['user_name'] ?? 'NA'; ?>" name="user_name"
                            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full" />
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-500 uppercase">email </p>
                        <input type="text" value="<?php echo $user['email'] ?? 'NA'; ?>" name="email"
                            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full" />
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-500 uppercase">contact </p>
                        <input type="text" value="<?php echo $user['contact'] ?? 'NA'; ?>" name="contact"
                            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full" />
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-500 uppercase">address </p>
                        <input type="text" value="<?php echo $user['address'] ?? 'NA'; ?>" name="address"
                            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full" />
                    </div>
                    <h1 class="font-semibold text-xl mt-8">Shop Information</h1>

                    <div class="mt-4">
                        <p class="text-gray-500 uppercase">shop name</p>
                        <input type="text" value="<?php echo $user['shop_name'] ?? 'NA'; ?>" name="shop_name"
                            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full" />
                    </div>
                    <!-- <div class="mt-4">
                        <p class="text-gray-500 uppercase">shop type</p>
                        <input type="text" value="<?php echo $user['shop_type'] ?? 'NA'; ?>" name="shop_type"
                            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full" />
                    </div> -->
                    <div class="mt-2">
                        <select name="shop_type"
                            class="w-full border py-2 px-4 rounded-md text-gray outline-none border-gray-500">
                            <option value="">Shop Type</option>
                            <option value="A" <?php echo $user_shop_type == 'A' ? 'selected' : ''; ?>>A</option>
                            <option value="B" <?php echo $user_shop_type == 'B' ? 'selected' : ''; ?>>B</option>
                            <option value="C" <?php echo $user_shop_type == 'C' ? 'selected' : ''; ?>>C</option>
                            <option value="D" <?php echo $user_shop_type == 'D' ? 'selected' : ''; ?>>D</option>
                            <option value="E" <?php echo $user_shop_type == 'E' ? 'selected' : ''; ?>>E</option>
                        </select>
                    </div>

                    <h1 class="font-semibold text-xl mt-8">Password</h1>

                    <div class="mt-4">
                        <p class="text-gray-500 uppercase">old password</p>
                        <input type="password" name="old_password"
                            class="px-4 py-1 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-500 uppercase">new password</p>
                        <input type="password" name="new_password"
                            class="px-4 py-1 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                    </div>

                    <button class="bg-black text-white w-[150px] py-2 mt-4 text-center rounded-md" type="submit"
                        name="edit">
                        Save changes
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
</body>

</html>