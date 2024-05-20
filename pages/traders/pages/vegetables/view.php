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
    <?php

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM `vegetables` WHERE `id` = $id";
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            echo "No vegetable found with this ID.";
            exit;
        }
    } else {
        echo "Invalid ID.";
        exit;
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
            <!-- dashboard -->
            <div class="mt-6 px-4 side-bar">
                <p class="border-b-1 ab-2 block">Dashboard</p>
                <a href="../dashboard.php" class="text-gray mt-3 block cursor-pointer">Dashboard</a>
                <a href="./index.php" class="text-gray mt-3 block cursor-pointer active">Manage Shop</a>
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
            <h1 class="font-semibold text-xl">Vegetable View</h1>
            <!-- success message -->
            <?php

            include "../../../message/message.php";

            include "../../../message/error.php"
                ?>




            <div class="px-2 mt-6 w-full h-[405px] relative">
                <p class="text-gray text-xs">Vegetables</p>
                <h1 class="mt-1 text-2xl"><?php echo $row['vegetable_name']; ?></h1>

                <div class="mt-2">
                    <p class="text-gray-400 text-xs">
                        By <span class="text-green"><?php echo $row['brand_or_producer']; ?></span>
                    </p>
                </div>
                <div class="mt-8 flex gap-2">

                    <?php

                    // print_r($row['images'])
                    $images = json_decode($row['images'], true);
                    if (is_array($images)) {
                        foreach ($images as $image) {
                            // echo $image;
                            ?>
                            <div class="w-[120px] h-[120px]">
                                <img src="<?php echo $image; ?>" alt="" class="h-full w-full" />
                            </div>
                            <?php
                        }
                    } else {
                        echo "No images.";
                    }

                    ?>


                    <!-- 
                    <div class="w-[120px] h-[120px]">
                        <img src="../image/categories/1691421065.jpg" alt="" class="h-full w-full" />
                    </div>
                    <div class="w-[120px] h-[120px]">
                        <img src="../image/categories/1691421065.jpg" alt="" class="h-full w-full" />
                    </div>
                    <div class="w-[120px] h-[120px]">
                        <img src="../image/categories/1691421065.jpg" alt="" class="h-full w-full" />
                    </div> -->
                </div>
                <div class="mt-2 flex justify-between items-center border-b-1 pb-8">
                    <!-- <p class="font-bold text-2xl">£1</p> -->
                </div>

                <div class="mt-8 flex justify-between items-center">
                    <span>Cost Price</span>
                    <span><?php echo $row['cost_price']; ?></span>
                </div>
                <div class="flex justify-between items-center">
                    <span>Selling Price</span>
                    <span><?php echo $row['selling_price']; ?></span>
                </div>
                <div class="flex justify-between items-center">
                    <span>Quantities</span>
                    <span><?php echo $row['quantity']; ?></span>
                </div>
                <div class="flex justify-between items-center">
                    <span>Harvest Date</span>
                    <span><?php echo $row['harvest_date']; ?></span>
                </div>
                <div class="flex justify-between items-center border-b-1 pb-8">
                    <span>Sheif Life</span>
                    <span><?php echo $row['shelf_life']; ?>(days)</span>
                </div>

                <div class=" mt-8">
                    <span>Description</span>
                    <p class="text-gray-400">
                        <?php echo $row['description']; ?>
                    </p>
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