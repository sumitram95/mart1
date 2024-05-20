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
    <title>Products Lists</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="../../../../css/style.css" />
    <?php include "../../../connection.php"; ?>
</head>

<body>
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
            <!-- dashboard -->
            <div class="mt-6 px-4 side-bar">
                <p class="border-b-1 ab-2 block">Dashboard</p>
                <a href="../dashboard.php" class="text-gray mt-3 block cursor-pointer">Dashboard</a>
                <a href="#" class="text-gray mt-3 block cursor-pointer active">Manage Shop</a>
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
            <h1 class="font-semibold text-xl">Vegetable Lists</h1>
            <!-- success message -->
            <?php

            include "../../../message/message.php";

            include "../../../message/error.php"
                ?>
            <div class="mt-6">
                <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                    <div class="rounded-t mb-0 px-4 py-3 border-0">
                        <div class="flex flex-wrap items-center">
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                                <h3 class="font-semibold text-base text-blueGray-700">Vegetables</h3>
                            </div>
                            <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                                <a href="./add.php" class="btn">Add New Vegetable</a>
                            </div>
                        </div>
                    </div>
                    <div class="block w-full overflow-x-auto">
                        <table class="items-center bg-transparent w-full border-collapse ">
                            <thead>
                                <tr>
                                    <th
                                        class="px-6 bg-primary text-white align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        s.n
                                    </th>
                                    <th
                                        class="px-6 bg-primary text-white align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        name
                                    </th>
                                    <th
                                        class="px-6 bg-primary text-white align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        cost price
                                    </th>
                                    <th
                                        class="px-6 bg-primary text-white align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        selling price
                                    </th>
                                    <th
                                        class="px-6 bg-primary text-white align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        quantity
                                    </th>
                                    <th
                                        class="px-6 bg-primary text-white align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        created_at
                                    </th>
                                    <th
                                        class="px-6 bg-primary text-white align-middle border border-solid border-blueGray-100 py-3 uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                        action
                                    </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $query = "SELECT * FROM `vegetables`";
                                $result = mysqli_query($con, $query);

                                if ($result && mysqli_num_rows($result) > 0) {
                                    $sn = 1;
                                    while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                        <tr>
                                            <th
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                                <?php echo $sn++; ?>
                                            </th>
                                            <th
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 text-left text-blueGray-700 ">
                                                <?php echo $row['vegetable_name']; ?>
                                            </th>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4 ">
                                                <?php echo $row['cost_price']; ?>
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-center border-l-0 border-r-0 whitespace-nowrap p-4">
                                                <?php echo $row['selling_price']; ?>
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                                <!-- <i class="fas fa-arrow-up text-emerald-500 mr-4"></i> -->
                                                <?php echo $row['quantity']; ?>
                                            </td>
                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                                <?php echo date_format(date_create($row['created_at']), 'Y-M-D'); ?>
                                            </td>

                                            <td
                                                class="border-t-0 px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                                <a href="#" class="btn"><i class="fa-solid fa-eye"></i></a>
                                                <a href="#" class="btn"><i class="fa-solid fa-pen-to-square"></i></a>
                                                <a href="#" class="btn text-red-500"><i class="fa-solid fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    ?>
                                    <tr>
                                        <td colspan="7"
                                            class="border-t-0 text-center font-bold px-6 align-middle border-l-0 border-r-0 whitespace-nowrap p-4">
                                            Not found
                                        </td>
                                    </tr>
                                    <?php
                                }
                                ?>

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
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