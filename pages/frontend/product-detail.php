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

    <title>Product Details</title>

    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <link rel="stylesheet" href="../../css/style.css" />
</head>

<body class="overflow-x-hidden">
    <div class="max-auto overflow-x-hidden">
        <section class="px-4 border-b-1 py-3">
            <div class="flex justify-between items-center">
                <div class="flex gap-4 w-3/4 items-center">
                    <div class="">
                        <h1 class="text-green font-bold text-[25px]">Happy</h1>
                        <h3>Mart</h3>
                    </div>
                    <form action="" class="flex w-fit h-[45px] items-center rounded-lg bg-gray px-1">
                        <div class="border-r px-2">
                            <p>All Categories</p>
                        </div>
                        <div class="px-2">
                            <input type="text" placeholder="Search here ....."
                                class="outline-none w-full bg-transparent text-gray-500" />
                        </div>
                        <div>
                            <button type="submit" class="btn">
                                <i class="fa-solid fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="">
                    <a href="./sign-in.php">
                        <span class="text-green border-r-2 border-gray-400 px-2"><i
                                class="fa-regular fa-user text-green"></i> Sign In</span>
                    </a>
                    <a href="./wishlists.php"><span><i class="fa-regular fa-heart text-green"></i></span></a>
                    <a href="./shopping-cart.php"><span><i class="fa-solid fa-cart-shopping text-green"></i></span></a>
                </div>
            </div>
        </section>
        <!-- {{-- nav-bar --}} -->
        <nav class="flex mt-10 items-center gap-7 px-4">
            <div class="w-1/4">
                <button class="bg-primary px-4 py-3 text-white rounded-md w-full text-start" id="sider-open">
                    <i class="fa-solid fa-border-all"></i> Browse all categories
                </button>
            </div>
            <div class="flex gap-7">
                <a href="./home.php" class="font-semibold text-lg">Home</a>
                <a href="#" class="font-semibold text-lg">About</a>
                <a href="./products.php" class="font-semibold text-lg">Products</a>
                <a href="#" class="font-semibold text-lg">Offers</a>
                <a href="../traders/auth/sign-up.php" class="font-semibold text-lg">Become a Trader</a>
                <a href="./contact.php" class="font-semibold text-lg">Contact</a>
            </div>
        </nav>

        <!-- content here -->
        <div class="mt-10">
            <div class="px-4 flex gap-6">
                <div class="">
                    <div class="w-[505px] h-[405px] flex justify-center items-center">
                        <img src="../../image/categories/1691421047.jpg" alt="" class="w-full h-full set-img" />
                    </div>
                    <div class="mt-8 flex gap-2">
                        <div class="w-[120px] h-[120px]">
                            <img src="../../image/categories/1691421065.jpg" alt=""
                                class="h-full w-full get-img cursor-pointer" />
                        </div>
                        <div class="w-[120px] h-[120px]">
                            <img src="../../image/categories/1692168232.jpg" alt=""
                                class="h-full w-full get-img cursor-pointer" />
                        </div>
                        <div class="w-[120px] h-[120px]">
                            <img src="../../image/categories/1691421090.jpg" alt=""
                                class="h-full w-full get-img cursor-pointer" />
                        </div>
                        <div class="w-[120px] h-[120px]">
                            <img src="../../image/categories/1691421047.jpg" alt=""
                                class="h-full w-full get-img cursor-pointer" />
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="px-2 w-full h-[405px] relative">
                        <p class="text-gray text-xs">Vegetables</p>
                        <h1 class="mt-1 text-2xl">Vegetable Vegetable sufdsafsda</h1>
                        <div class="flex gap-1 items-center mt-2">
                            <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                            <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                            <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                            <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                            <i class="fa-solid fa-star text-gray-400 text-xs"></i>
                            <span class="text-gray-400 text-xs">(4)</span>
                        </div>
                        <div class="mt-2">
                            <p class="text-gray-400 text-xs">
                                By <span class="text-green">Mr.Bond</span>
                            </p>
                        </div>
                        <div class="mt-2 flex justify-between items-center border-b-1 pb-8">
                            <p class="font-bold text-2xl">
                                £<span id="original_price">1</span>
                            </p>
                        </div>
                        <div class="text-gray-400 mt-8">
                            <p>
                                With their distinctive sweet and earthy flavour, our British
                                parsnips love to be roasted whole with a drizzle of oil and
                                honey.
                            </p>
                        </div>
                        <div class="flex absolute bottom-0 gap-4 mt-8">
                            <div>
                                <span>Quantity</span>
                            </div>
                            <div class="w-[160px] h-[30px] btn rounded-[15px] flex justify-between items-center px-4">
                                <i class="fa-solid fa-minus text-gray text-xs cursor-pointer" id="minus"></i>
                                <span class="text-xl" id="quantity">1</span>
                                <i class="fa-solid fa-plus text-xs cursor-pointer" id="plus"></i>
                            </div>
                        </div>
                    </div>

                    <div class="flex gap-4 mt-16">
                        <div class="w-1/2">
                            <button class="w-full font-semibold hover:bg-gray-300 py-2 rounded-md bg-gray-200">
                                Add to wishlist
                            </button>
                        </div>
                        <div class="w-1/2">
                            <a href="../shopping-cart.html">
                                <button class="bg-primary py-2 font-semibold rounded-md text-white w-full"
                                    id="add-to-cart">
                                    Add to cart
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-10 px-4">
                <div class="flex gap-6 border-b-1 border-gray-300 my-3 text-gray">
                    <div class="border-b py-3">
                        <span class="active">Product Info</span>
                    </div>
                    <div class="py-3">
                        <span class="text-gray">Seller Info</span>
                    </div>
                    <div class="py-3">
                        <span class="text-gray">Reviews</span>
                    </div>
                </div>
                <div class="mt-6 text-gray">
                    <p class="font-bold">Product Description</p>
                    <div>
                        Introducing the vibrant and crisp Radish, nature's little dynamo
                        packed with flavor and nutrition! Bursting with a peppery bite and
                        a satisfying crunch, our premium Radishes are hand-selected for
                        optimal freshness and quality. Whether sliced into salads, added
                        to sandwiches for a zesty kick, or simply enjoyed as a refreshing
                        snack, these versatile root vegetables add a delightful burst of
                        color and flavor to any dish. Rich in vitamins, minerals, and
                        antioxidants, Radishes are not only delicious but also offer
                        numerous health benefits, promoting digestion, boosting immunity,
                        and supporting overall well-being. Elevate your culinary creations
                        with our farm-fresh Radishes and experience the essence of pure
                        freshness in every bite.
                    </div>
                </div>

                <div class="mt-6 text-gray">
                    <p class="font-bold">Allergy Information</p>
                    <div>
                        <ul class="ml-6">
                            <li class="list-disc">
                                Allergic reactions to radishes are rare but can occur in
                                individuals with sensitivities to Brassicaceae family
                                vegetables.
                            </li>

                            <li class="list-disc">
                                Symptoms of a radish allergy may include itching or swelling
                                of the lips, tongue, or throat, hives, difficulty breathing,
                                or gastrointestinal discomfort.
                            </li>

                            <li class="list-disc">
                                If you suspect you have a radish allergy or any adverse
                                reaction after consuming radishes, please consult with a
                                healthcare professional for proper diagnosis and guidance.
                            </li>

                            <li class="list-disc">
                                As with any food product, please read the ingredient label
                                carefully, especially if you have known allergies or dietary
                                restrictions, to ensure the product is safe for your
                                consumption.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- similar products -->
            <section class="mt-10 px-4">
                <div class="flex justify-between">
                    <h1 class="border-b w-fit font-bold text-lg pb-1 pr-6">
                        Similar Products
                    </h1>
                    <a href="#" class="text-gray">View all</a>
                </div>
                <div class="mt-5 flex gap-6 items-center relative">
                    <div
                        class="absolute cursor-pointer ml-[-10px] mt-[-25px] w-[30px] h-[30px] border rounded-full flex justify-center items-center bg-white">
                        <i class="fa-solid fa-chevron-left text-green"></i>
                    </div>
                    <div class="w-[220px] pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
                        </div>
                        <div class="px-2 mt-5">
                            <p class="text-gray text-xs">Vegetables</p>
                            <h1 class="mt-1 product-name">
                                Vegetable Vegetable sufdsafsda
                            </h1>
                            <div class="flex gap-1 items-center mt-2">
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-gray-400 text-xs"></i>
                                <span class="text-gray-400 text-xs">(4)</span>
                            </div>
                            <div class="mt-2">
                                <p class="text-gray-400 text-xs">
                                    By <span class="text-green">Mr.Bond</span>
                                </p>
                            </div>
                            <div class="mt-2 flex justify-between items-center">
                                <p class="text-green font-bold">
                                    $1
                                    <span class="text-gray-400 line-through ml-2">$3</span>
                                </p>
                                <a href="../pages/product-detail.html" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[220px] pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
                        </div>
                        <div class="px-2 mt-5">
                            <p class="text-gray text-xs">Vegetables</p>
                            <h1 class="mt-1 product-name">
                                Vegetable Vegetable sufdsafsda
                            </h1>
                            <div class="flex gap-1 items-center mt-2">
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-gray-400 text-xs"></i>
                                <span class="text-gray-400 text-xs">(4)</span>
                            </div>
                            <div class="mt-2">
                                <p class="text-gray-400 text-xs">
                                    By <span class="text-green">Mr.Bond</span>
                                </p>
                            </div>
                            <div class="mt-2 flex justify-between items-center">
                                <p class="text-green font-bold">
                                    $1
                                    <span class="text-gray-400 line-through ml-2">$3</span>
                                </p>
                                <a href="../pages/product-detail.html" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[220px] pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
                        </div>
                        <div class="px-2 mt-5">
                            <p class="text-gray text-xs">Vegetables</p>
                            <h1 class="mt-1 product-name">
                                Vegetable Vegetable sufdsafsda
                            </h1>
                            <div class="flex gap-1 items-center mt-2">
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-gray-400 text-xs"></i>
                                <span class="text-gray-400 text-xs">(4)</span>
                            </div>
                            <div class="mt-2">
                                <p class="text-gray-400 text-xs">
                                    By <span class="text-green">Mr.Bond</span>
                                </p>
                            </div>
                            <div class="mt-2 flex justify-between items-center">
                                <p class="text-green font-bold">
                                    $1
                                    <span class="text-gray-400 line-through ml-2">$3</span>
                                </p>
                                <a href="../pages/product-detail.html" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[220px] pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
                        </div>
                        <div class="px-2 mt-5">
                            <p class="text-gray text-xs">Vegetables</p>
                            <h1 class="mt-1 product-name">
                                Vegetable Vegetable sufdsafsda
                            </h1>
                            <div class="flex gap-1 items-center mt-2">
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-gray-400 text-xs"></i>
                                <span class="text-gray-400 text-xs">(4)</span>
                            </div>
                            <div class="mt-2">
                                <p class="text-gray-400 text-xs">
                                    By <span class="text-green">Mr.Bond</span>
                                </p>
                            </div>
                            <div class="mt-2 flex justify-between items-center">
                                <p class="text-green font-bold">
                                    $1
                                    <span class="text-gray-400 line-through ml-2">$3</span>
                                </p>
                                <a href="../pages/product-detail.html" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[220px] pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
                        </div>
                        <div class="px-2 mt-5">
                            <p class="text-gray text-xs">Vegetables</p>
                            <h1 class="mt-1 product-name">
                                Vegetable Vegetable sufdsafsda
                            </h1>
                            <div class="flex gap-1 items-center mt-2">
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-yellow-400 text-xs"></i>
                                <i class="fa-solid fa-star text-gray-400 text-xs"></i>
                                <span class="text-gray-400 text-xs">(4)</span>
                            </div>
                            <div class="mt-2">
                                <p class="text-gray-400 text-xs">
                                    By <span class="text-green">Mr.Bond</span>
                                </p>
                            </div>
                            <div class="mt-2 flex justify-between items-center">
                                <p class="text-green font-bold">
                                    $1
                                    <span class="text-gray-400 line-through ml-2">$3</span>
                                </p>
                                <a href="../pages/product-detail.html" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>

                    <div class="absolute cursor-pointer mt-[-25px] w-[30px] h-[30px] border rounded-full flex justify-center items-center bg-white"
                        style="right: -10px">
                        <i class="fa-solid fa-chevron-right text-green"></i>
                    </div>
                </div>
            </section>
            <!-- end similar products -->
        </div>
        <!-- end content -->
    </div>

    <!-- {{-- footer --}} -->

    <section class="bg-black mt-12 py-5 px-4">
        <div class="flex justify-between mt-16 items-center max-auto">
            <div class="">
                <h1 class="text-white capitalize text-xl">Join Our community</h1>
                <p class="text-white capitalize text-xs">
                    Subscribe to be the first to know about our offers
                </p>
            </div>
            <div>
                <form action="">
                    <div class="flex rounded-md overflow-hidden">
                        <div class="w-[300px] h-[45px]">
                            <input type="text" class="w-full h-full py-1 px-2" placeholder="Your Email Address" />
                        </div>
                        <div>
                            <button class="text-white bg-primary h-full py-1 px-4 font-bold">
                                Subscribe
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="h-[2px] bg-gray-700 mt-[60px]"></div>

        <div class="flex justify-between mt-16 max-auto">
            <div class="">
                <h1 class="text-green font-bold text-[25px]">Happy</h1>
                <h3 class="text-white">Mart</h3>
                <div class="w-[300px] text-gray text-[14px] mt-4">
                    We work in partnership with the best farmers and food producers.
                </div>
            </div>
            <div class="">
                <p class="text-white">Contact</p>
                <p class="text-gray text-[14px] mt-2">Cleckhuddersfax, UK</p>
                <p class="text-gray text-[14px] mt-2">+44-07-333-433-335</p>
                <p class="text-gray text-[14px] mt-2">info@happymart.com</p>
            </div>
            <div class="">
                <p class="text-white">Navigate</p>
                <p class="text-gray text-[14px] mt-2">Blog</p>
                <p class="text-gray text-[14px] mt-2">Pages</p>
                <p class="text-gray text-[14px] mt-2">Demo</p>
                <p class="text-gray text-[14px] mt-2">Newsletter</p>
                <p class="text-gray text-[14px] mt-2">Event</p>
                <p class="text-gray text-[14px] mt-2">Portfolio</p>
            </div>
            <div class="">
                <p class="text-white">Legal</p>
                <p class="text-gray text-[14px] mt-2">Licences</p>
                <p class="text-gray text-[14px] mt-2">Terms of Service</p>
                <p class="text-gray text-[14px] mt-2">Cookies</p>
                <p class="text-gray text-[14px] mt-2">Privacy Policy</p>
                <p class="text-gray text-[14px] mt-2">Settings</p>
                <p class="text-gray text-[14px] mt-2">Help Center</p>
            </div>
        </div>

        <div class="h-[2px] bg-gray-700 mt-[60px]"></div>

        <div class="flex text-white justify-between items-center mt-10 max-auto">
            <div>
                <span class="font-bold text-xs">Copyright 2023 Happy Mar</span>
            </div>
            <div class="flex items-center gap-4">
                <div class="w-[30px] h-[30px] bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fa-brands fa-twitter text-green"></i>
                </div>
                <div class="w-[30px] h-[30px] bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fa-brands fa-linkedin-in text-green"></i>
                </div>
                <div class="w-[30px] h-[30px] bg-gray-100 rounded-full flex items-center justify-center">
                    <i class="fa-brands fa-facebook-f text-green"></i>
                </div>
                <div class="w-[30px] h-[30px] bg-gray rounded-full flex items-center justify-center">
                    <i class="fa-brands fa-instagram text-green"></i>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="../js/carousel.js"></script>
    <script>
        $(document).ready(function () {
            var qty = parseInt($("#quantity").text());
            var totalPriceSet = $("#t_price");
            var totalQtySet = $("#t_qty");
            var originalPrice = parseInt($("#original_price").text());
            var tax = parseInt($("#tax").text());
            $("#total").text(tax + originalPrice);

            $("#plus").click(function () {
                qty += 1;
                $("#quantity").text(qty);

                var total = originalPrice * qty;
                totalPriceSet.text(total);
                totalQtySet.text(qty);
                $("#total").text(tax + total);
            });

            $("#minus").click(function () {
                if (qty > 1) {
                    qty -= 1;
                    $("#quantity").text(qty);

                    var total = originalPrice * qty;
                    totalPriceSet.text(total);
                    totalQtySet.text(qty);
                    $("#total").text(tax + total);
                }
            });

            // model code
            $("#add-to-cart").click(function () {
                $(".model").toggleClass("hidden");
            });

            $(".close").click(function () {
                $(".model").toggleClass("hidden");
            });
            // img set
            $(".get-img").click(function () {
                var srcValue = $(this).attr("src");
                $(".set-img").attr("src", srcValue);
                $(".get-img").removeClass("border border-red-500");
                $(this).addClass("border border-green-500");
            });
        });
    </script>
</body>

</html>