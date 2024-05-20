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
  <div class="px-4 mt-10 flex gap-10">
    <div class="w-1/4 h-fit bg-gray rounded-md py-10">
      <div class="flex items-center justify-center">
        <div class="w-[60px] h-[60px] rounded-full relative">
          <img class="h-full w-full rounded-full object-cover" src="../../../../image/profile/profile.jpg" alt="" />
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
        <a href="./profile.php" class="text-gray mt-3 block cursor-pointer active">account</a>
        <a href="./edit.php" class="text-gray mt-3 block cursor-pointer">Edit</a>
        <a href="../../auth/logout.php" class="text-gray mt-3 block cursor-pointer">Log Out</a>
      </div>
    </div>
    <?php
    if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
      $user_id = $_SESSION['user_id'];
      $query = "SELECT * FROM `traders` WHERE `id` = '$user_id'";
      $result = mysqli_query($con, $query);
      if ($result && mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
      }
    }
    ?>
    <!--  -->
    <div class="w-1/2">
      <h1 class="font-semibold text-xl">Account Information</h1>
      <div class="mt-4">
        <div class="mt-3">
          <p class="text-gray-500 uppercas">First Name </p>
          <input type="text" value="<?php echo $user['first_name'] ?? 'NA'; ?>"
            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full"
            disabled />
        </div>
        <div class="mt-4">
          <p class="text-gray-500 uppercase">last name </p>
          <input type="text" value="<?php echo $user['last_name'] ?? 'NA'; ?>"
            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full"
            disabled />
        </div>
        <div class="mt-4">
          <p class="text-gray-500 uppercase">user name </p>
          <input type="text" value="<?php echo $user['user_name'] ?? 'NA'; ?>"
            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full"
            disabled />
        </div>
        <div class="mt-4">
          <p class="text-gray-500 uppercase">email </p>
          <input type="text" value="<?php echo $user['email'] ?? 'NA'; ?>"
            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full"
            disabled />
        </div>
        <div class="mt-4">
          <p class="text-gray-500 uppercase">contact </p>
          <input type="text" value="<?php echo $user['contact'] ?? 'NA'; ?>"
            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full"
            disabled />
        </div>
        <div class="mt-4">
          <p class="text-gray-500 uppercase">address </p>
          <input type="text" value="<?php echo $user['address'] ?? 'NA'; ?>"
            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full"
            disabled />
        </div>
        <h1 class="font-semibold text-xl mt-8">Shop Information</h1>

        <div class="mt-4">
          <p class="text-gray-500 uppercase">shop name</p>
          <input type="text" value="<?php echo $user['shop_name'] ?? 'NA'; ?>"
            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full"
            disabled />
        </div>
        <div class="mt-4">
          <p class="text-gray-500 uppercase">shop type</p>
          <input type="text" value="<?php echo $user['shop_type'] ?? 'NA'; ?>"
            class="px-4 py-1 rounded-md mt-2 text-gray bg-transparent border border-gray-500 outline-none w-full"
            disabled />
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
  <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
</body>

</html>