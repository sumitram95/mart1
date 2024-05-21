<?php
include "../connection.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $contact = $_POST['contact'];
  $address = $_POST['address'];
  $created_at = date('Y-m-d:h:i:s');
  $updated_at = date('Y-m-d:h:i:s');

  // Server-side validation to ensure no fields are null
  if (empty($first_name) || empty($last_name) || empty($email) || empty($password) || empty($contact) || empty($address)) {
    $_SESSION['error'] = "All field required!";
    header("Location: ./sign-up.php");
    exit();
  }

  // Hash the password
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  // insert data into db
  $insert = "INSERT INTO `users`(`first_name`, `last_name`,`email`,
    `password`,`contact`,`address`,`created_at`,`updated_at`) VALUES ('$first_name','$last_name',
    '$email','$hashed_password','$contact','$address','$created_at','$updated_at')";

  $query = mysqli_query($con, $insert);
  if ($query) {
    $_SESSION['message'] = "Registered successfully! Please check your email";
    header("Location: ./sign-in.php");
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

  <title>Sign Up</title>

  <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
  <link rel="stylesheet" href="../../css/style.css" />
</head>

<body class="overflow-x-hidden">
  <div class="max-auto overflow-x-hidden">
    <div class="px-4 flex justify-center items-center h-full mt-10">
      <div class="w-1/2">
        <h1 class="font-semibold text-xl text-center">Sign Up</h1>
        <?php

        include "../message/message.php";

        include "../message/error.php"
          ?>
        <div class="mt-4">
          <form action="" method="post">
            <div class="mt-3 flex gap-4">
              <input type="text" placeholder="First name" name="first_name"
                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
              <input type="text" name="last_name" placeholder="Last name"
                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
            </div>

            <!-- <div class="mt-1">
              <input type="text" name="last_name" placeholder="User name"
                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
            </div> -->

            <div class="mt-1">
              <input type="email" name="email" placeholder="Email address"
                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
            </div>

            <div class="mt-1">
              <input type="password" name="password" placeholder="Password"
                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
            </div>
            <div class="mt-1">
              <input type="text" name="contact" placeholder="Contact"
                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
            </div>
            <div class="mt-1">
              <input type="text" name="address" placeholder="Address"
                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
            </div>

            <button class="bg-primary font-bold text-white w-full py-2 mt-4 text-center rounded-md" type="submit"
              name="register">
              Sign Up
            </button>
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
  <script>
    // JavaScript to remove the message after 5 seconds
    setTimeout(function () {
      var messageElement = document.getElementById('message');
      if (messageElement) {
        messageElement.style.display = 'none';
      }
    }, 5000);
  </script>
</body>

</html>