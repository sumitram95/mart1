<?php
include "../connection.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {

  $email = mysqli_real_escape_string($con, $_POST['email']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  $query = "SELECT * FROM `users` WHERE `email` = '$email'";
  $result = mysqli_query($con, $query);
  if ($result && mysqli_num_rows($result) > 0) {
    $user = mysqli_fetch_assoc($result);

    // Verify the password
    if (password_verify($password, $user['password'])) {

      $_SESSION['full_name'] = $user['first_name'] . ' ' . $user['last_name'];
      $_SESSION['message'] = "Login successful!";
      // header("Location: ../pages/dashboard.php");
      header("Location: ./home.php");

      // echo "Welcome to dashboard!" . $user['first_name'];
      exit();
    } else {
      $_SESSION['error'] = "Invalid username or password!";
    }
  } else {
    $_SESSION['error'] = "Invalid username or password!";
  }

  header("Location: sign-in.php");
  exit();
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

  <title>Sign In</title>

  <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
  <link rel="stylesheet" href="../../css/style.css" />
</head>

<body class="overflow-x-hidden">
  <div class="max-auto overflow-x-hidden">
    <div class="px-4 flex justify-center items-center h-[100vh]">
      <div class="w-1/2">
        <h1 class="font-semibold text-xl text-center">Welcome Back!</h1>
        <!-- message -->
        <?php

        include "../message/message.php";

        include "../message/error.php"
          ?>
        <div class="mt-4">
          <form action="" method="post">
            <div class="mt-4 flex gap-4 px-4 pt-2 pb-4 items-baseline rounded-md border border-gray-500">
              <i class="fa-regular fa-envelope"></i>
              <input type="email" name="email" placeholder="Email"
                class="rounded-md mt-2 bg-transparent outline-none w-full" />
            </div>
            <div class="mt-4 flex gap-4 px-4 pt-2 pb-4 items-baseline rounded-md border border-gray-500">
              <i class="fa-solid fa-lock"></i>
              <input type="password" name="password" placeholder="password"
                class="rounded-md mt-2 bg-transparent outline-none w-full" />
            </div>

            <div class="mt-4 flex justify-between items-center gap-2">
              <div class="flex gap-4">
                <div>
                  <input type="checkbox" id="cb1" class="mt-1" />
                </div>
                <p class="text-gray">Remember me</p>
              </div>
              <a class="text-green" href="#">Forgot password</a>
            </div>

            <button class="bg-primary font-semibold text-white w-full py-4 mt-4 text-center rounded-md" type="submit"
              name="login">
              Sign In
            </button>
            <div class="mt-4 flex justify-center items-center">
              <p class="text-gray">Don’t have an account yet?</p>
              <a class="text-green font-semibold" href="./sign-up.php">Sign up here</a>
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