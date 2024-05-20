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

<body class="overflow-hidden">
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
        <div class="w-3/4 h-[96vh] overflow-y-auto">
            <h1 class="font-semibold text-xl text-center">
                Edit Vegetable
            </h1>
            <div class="mt-4">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['updated'])) {
                    $vegetable_name = mysqli_real_escape_string($con, $_POST['vegetable_name']);
                    $brand_or_producer = mysqli_real_escape_string($con, $_POST['brand_or_producer']);
                    $cost_price = floatval($_POST['cost_price']);
                    $selling_price = floatval($_POST['selling_price']);
                    $quantity = intval($_POST['quantity']);
                    $images = json_encode($_POST['images']);
                    $harvest_date = $_POST['harvest_date'];
                    $shelf_life = intval($_POST['shelf_life']);
                    $description = mysqli_real_escape_string($con, $_POST['description']);
                    $created_at = date('Y-m-d:h:i:s');
                    $updated_at = date('Y-m-d:h:i:s');


                    $update_query = "UPDATE `vegetables` SET 
                        `vegetable_name` = '$vegetable_name',
                        `brand_or_producer` = '$brand_or_producer',
                        `cost_price` = '$cost_price',
                        `selling_price` = '$selling_price',
                        `quantity` = '$quantity',
                        `harvest_date` = '$harvest_date',
                        `shelf_life` = '$shelf_life',
                          `description` = '$description',
                          `created_at` = '$created_at',
                          `updated_at` = '$updated_at'";

                    $update_query .= " WHERE `id` = '$id'";
                    if (mysqli_query($con, $update_query)) {
                        $_SESSION['message'] = "Updated successfully!";
                        header("Location: ./index.php");
                        exit();
                    } else {
                        $_SESSION['message'] = "Error updating profile!";
                    }
                }
                ?>

                <form action="" method="post" class="px-2" enctype="multipart/form-data">
                    <div class="mt-3 flex gap-4">
                        <input type="text" placeholder="Vegetable Name" name="vegetable_name"
                            value="<?php echo $row['vegetable_name']; ?>"
                            class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        <input type="text" placeholder="Brand/Producer" name="brand_or_producer"
                            value="<?php echo $row['brand_or_producer']; ?>"
                            class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                    </div>

                    <div class="mt-3 flex gap-4">
                        <input type="text" placeholder="Cost Price (per unit)" name="cost_price"
                            value="<?php echo $row['cost_price']; ?>"
                            class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        <input type="text" placeholder="Selling price of the vegetable (per unit)" name="selling_price"
                            value="<?php echo $row['selling_price']; ?>"
                            class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                    </div>

                    <div class="mt-3 flex gap-4">
                        <input type="text" placeholder="Quantity/Stock Level" name="quantity"
                            value="<?php echo $row['quantity']; ?>"
                            class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        <input type="file" name="images[]" multiple
                            class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                    </div>

                    <div class="mt-3 flex gap-4">
                        <input type="date" placeholder="Harvest Date" name="harvest_date"
                            value="<?php echo $row['harvest_date']; ?>"
                            class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        <input type="number" placeholder="Shelf Life (days)" name="shelf_life"
                            value="<?php echo $row['shelf_life']; ?>"
                            class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                    </div>

                    <div>
                        <textarea rows="6" name="description" id=""
                            class="w-full px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full">
                            <?php echo $row['description']; ?>
                        </textarea>
                    </div>

                    <input type="submit"
                        class="bg-primary font-semibold text-white w-full py-2 mt-4 text-center rounded-md"
                        value="Edit Vegetable" name="updated">
                    </input>
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