<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Trader Register</title>

    <link rel="stylesheet" href="../../../css/style.css">
    <?php include "../../connection.php"; ?>
</head>

<body class="overflow-x-hidden">
    <div class="max-auto overflow-x-hidden">
        <div class="px-4 flex justify-center h-full items-center mt-10">
            <div class="w-1/2">
                <h1 class="font-semibold text-xl text-center">
                    Become one of our Traders
                </h1>
                <?php

                include "../../message/message.php";

                include "../../message/error.php"
                    ?>
                <div class="mt-4">
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {

                        $first_name = $_POST['first_name'];
                        $last_name = $_POST['last_name'];
                        $user_name = $_POST['user_name'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $contact = $_POST['contact'];
                        $shop_name = $_POST['shop_name'];
                        $address = $_POST['address'];
                        $shop_type = $_POST['shop_type'];

                        // Server-side validation to ensure no fields are null
                        if (empty($first_name) || empty($last_name) || empty($user_name) || empty($email) || empty($password) || empty($contact) || empty($shop_name) || empty($address) || empty($shop_type)) {
                            $_SESSION['error'] = "All field required!";
                            header("Location: ./sign-up.php");
                            exit();
                        }

                        // Hash the password
                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                        // insert data into db
                        $insert = "INSERT INTO `traders`(`first_name`, `last_name`, `user_name`,`email`,
                        `password`,`contact`,`shop_name`,`address`,`shop_type`) VALUES ('$first_name','$last_name','$user_name',
                        '$email','$hashed_password','$contact','$shop_name','$address','$shop_type')";

                        $query = mysqli_query($con, $insert);
                        if ($query) {
                            $_SESSION['message'] = "Registered successfully! Please check your email";
                            header("Location: sign-in.php");
                            exit();
                        } else {
                            ?>
                            <script>
                                alert("Something wrong!");
                            </script>
                            <?php
                        }

                    }
                    ?>
                    <form action="" method="post">
                        <div class="mt-3 flex gap-4">
                            <input type="text" placeholder="First name" name="first_name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                            <input type="text" placeholder="Last name" name="last_name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <div class="mt-1">
                            <input type="text" placeholder="User name" name="user_name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <div class="mt-1">
                            <input type="email" placeholder="Email address" name="email"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <div class="mt-1">
                            <input type="password" placeholder="Password" name="password"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-1">
                            <input type="text" placeholder="Contact" name="contact"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-1">
                            <input type="text" placeholder="Shop Name" name="shop_name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-1">
                            <input type="text" placeholder="Address" name="address"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-2">
                            <select name="shop_type"
                                class="w-full border py-2 px-4 rounded-md text-gray outline-none border-gray-500">
                                <option value="">Shop Type</option>
                                <option value="A">A</option>
                                <option value="B">B</option>
                                <option value="C">C</option>
                                <option value="D">D</option>
                                <option value="E">E</option>
                            </select>
                        </div>

                        <div class="mt-1 flex gap-2">
                            <div>
                                <input type="checkbox" id="cb1" class="mt-1" name="term_condition_check" />
                            </div>
                            <p class="text-gray">
                                Creating an account means you agree with our
                                <span class="text-green"> Terms and Conditions </span>,
                                <span class="text-green"> Privacy Policy and default</span>
                                <span class="text-green"> Notifications Settings. </span>
                            </p>
                        </div>

                        <input type="submit"
                            class="bg-primary font-semibold text-white w-full py-2 mt-4 text-center rounded-md"
                            value="Register" name="register">
                        </input>
                        <div class="mt-2 flex justify-center items-center">
                            <p class="text-gray">Already have an account?</p>
                            <a class="text-green font-semibold" href="./sign-in.php">Sign in here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="../js/carousel.js"></script>
</body>

</html>