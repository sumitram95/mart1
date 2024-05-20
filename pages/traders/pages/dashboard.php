<?php
session_start();
if (!isset($_SESSION['user_id']) && empty($_SESSION['user_id'])) {
    header("Location: ../auth/sign-in.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome to dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../css/style.css" />
</head>

<body>
    <div class="px-4 mt-10 flex gap-10">
        <div class="w-1/4 h-fit bg-gray rounded-md py-10">
            <div class="flex items-center justify-center">
                <div class="w-[60px] h-[60px] rounded-full relative">
                    <img class="h-full w-full rounded-full object-cover" src="../../../image/profile/profile.jpg"
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
            <!-- dashboard -->
            <div class="mt-6 px-4 side-bar">
                <p class="border-b-1 ab-2 block">Dashboard</p>
                <a href="#" class="text-gray mt-3 block cursor-pointer active">Dashboard</a>
                <a href="./vegetables/index.php" class="text-gray mt-3 block cursor-pointer">Manage Shop</a>
            </div>
            <!-- account information -->
            <div class="mt-6 px-4 side-bar">
                <p class="border-b-1 ab-2 block">Account Information</p>
                <a href="./profile/profile.php" class="text-gray mt-3 block cursor-pointer">Account</a>
                <a href="../auth/logout.php" class="text-gray mt-3 block cursor-pointer">Log Out</a>
            </div>
        </div>

        <!--  -->
        <div class="w-3/4">
            <h1 class="font-semibold text-xl">Welcome to dashboard</h1>
            <div class="mt-6">
             
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
</body>

</html>