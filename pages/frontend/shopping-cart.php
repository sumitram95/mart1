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

    <title>Shopping Cart</title>

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
                    <a href="../traders/auth/sign-in.php">
                        <span class="text-green border-r-2 border-gray-400 px-2"><i
                                class="fa-regular fa-user text-green"></i> Sign In</span>
                    </a>
                    <a href="./wishlists.php">
                        <span><i class="fa-regular fa-heart text-green"></i></span></a>
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
                <a href="./home.php" class="font-semibold text-lg active">Home</a>
                <a href="#" class="font-semibold text-lg">About</a>
                <a href="./products.php" class="font-semibold text-lg">Products</a>
                <a href="#" class="font-semibold text-lg">Offers</a>
                <a href="../traders/auth/sign-up.php" class="font-semibold text-lg">Become a Trader</a>
                <a href="./contact.php" class="font-semibold text-lg">Contact</a>
            </div>
        </nav>

        <!-- content code write here -->
        <div class="px-6 mt-8">
            <div class="flex justify-center mb-4">
                <div class="w-3/4">
                    <h1 class="font-semibold text-2xl text-gray">Your Cart</h1>
                </div>
            </div>
            <div class="flex justify-center mb-4 product">
                <div class="flex w-3/4 justify-between items-center border border-green-600 rounded-md px-4 py-3">
                    <!-- product -->
                    <div class="flex gap-6 items-center">
                        <div class="w-[100px] h-[100px] overflow-hidden">
                            <img src="/image/categories/1691421047.jpg" alt="" />
                        </div>
                        <div class="text-gray">
                            <p>product name</p>
                            <p>Price: $<span class="original_price">5</span></p>
                            <p>
                                Qty: <span class="t_qty">1</span> @ $<span class="t_price">5</span>
                            </p>
                        </div>
                    </div>

                    <!-- quantity -->
                    <div class="">
                        <div class="flex gap-4 bottom-0">
                            <div>
                                <span>Quntity</span>
                            </div>
                            <div class="w-[160px] h-[30px] btn rounded-[15px] flex justify-between items-center px-4">
                                <div class="">
                                    <i class="fa-solid fa-minus text-gray text-xs cursor-pointer min"></i>
                                </div>

                                <div>
                                    <span class="text-xl quantity">1</span>
                                </div>

                                <div class="">
                                    <i class="fa-solid fa-plus text-xs cursor-pointer add"></i>
                                </div>
                            </div>
                            <div>
                                <a href="#"><i class="fa-solid fa-trash text-red-500"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-4 product">
                <div class="flex w-3/4 justify-between items-center border border-green-600 rounded-md px-4 py-3">
                    <!-- product -->
                    <div class="flex gap-6 items-center">
                        <div class="w-[100px] h-[100px] overflow-hidden">
                            <img src="/image/categories/1691421047.jpg" alt="" />
                        </div>
                        <div class="text-gray">
                            <p>product name</p>
                            <p>Price: $<span class="original_price">5</span></p>
                            <p>
                                Qty: <span class="t_qty">1</span> @ $<span class="t_price">5</span>
                            </p>
                        </div>
                    </div>

                    <!-- quantity -->
                    <div class="">
                        <div class="flex gap-4 bottom-0">
                            <div>
                                <span>Quntity</span>
                            </div>
                            <div class="w-[160px] h-[30px] btn rounded-[15px] flex justify-between items-center px-4">
                                <div class="">
                                    <i class="fa-solid fa-minus text-gray text-xs cursor-pointer min"></i>
                                </div>

                                <div>
                                    <span class="text-xl quantity">1</span>
                                </div>

                                <div class="">
                                    <i class="fa-solid fa-plus text-xs cursor-pointer add"></i>
                                </div>
                            </div>
                            <div>
                                <a href="#"><i class="fa-solid fa-trash text-red-500"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mb-4 product">
                <div class="flex w-3/4 justify-between items-center border border-green-600 rounded-md px-4 py-3">
                    <!-- product -->
                    <div class="flex gap-6 items-center">
                        <div class="w-[100px] h-[100px] overflow-hidden">
                            <img src="/image/categories/1691421047.jpg" alt="" />
                        </div>
                        <div class="text-gray">
                            <p>product name</p>
                            <p>Price: $<span class="original_price">5</span></p>
                            <p>
                                Qty: <span class="t_qty">1</span> @ $<span class="t_price">5</span>
                            </p>
                        </div>
                    </div>

                    <!-- quantity -->
                    <div class="">
                        <div class="flex gap-4 bottom-0">
                            <div>
                                <span>Quntity</span>
                            </div>
                            <div class="w-[160px] h-[30px] btn rounded-[15px] flex justify-between items-center px-4">
                                <div class="">
                                    <i class="fa-solid fa-minus text-gray text-xs cursor-pointer min"></i>
                                </div>

                                <div>
                                    <span class="text-xl quantity">1</span>
                                </div>

                                <div class="">
                                    <i class="fa-solid fa-plus text-xs cursor-pointer add"></i>
                                </div>
                            </div>
                            <div>
                                <a href="#"><i class="fa-solid fa-trash text-red-500"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cart -->
            <div class="flex justify-center mt-8 gap-4">
                <div class="w-3/4 bg-green-100 p-4 rounded-md">
                    <div class="">
                        <!-- <div class="flex justify-between items-center">
                <p class="font-semibold text-gray">Quantity</p>
                <p id="t_qty">1</p>
              </div> -->

                        <div class="flex justify-between items-center">
                            <p class="font-semibold text-gray">Tax</p>
                            <p>£<span id="tax">5</span></p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="font-semibold text-gray">Sub-Total</p>
                            <p>£<span id="sub-total">0</span></p>
                        </div>
                        <div class="border-b-2 border-gray-400 mt-4 mb-2"></div>
                        <div class="flex justify-between items-center">
                            <p class="font-semibold text-gray">Total</p>
                            <p>£<span id="total">0</span></p>
                        </div>
                    </div>
                    <div class="border-b-2 border-gray-400 mt-2"></div>
                    <div class="">
                        <div class="flex gap-4 mt-8">
                            <div class="w-full">
                                <button class="bg-primary py-2 font-semibold rounded-md text-white w-full"
                                    id="add-to-cart">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-center mt-8">
                <div class="w-3/4">
                    <a href="#" class="text-gray font-semibold"><i class="fa-solid fa-arrow-left"></i> Back to cart</a>
                </div>
            </div>
        </div>
        <!-- end content -->
    </div>

    <!-- {{-- footer --}} -->

    <section class="bg-black mt-10 py-5 px-4">
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

    <!-- model -->
    <div
        class="w-full h-full hidden fixed px-5 py-5 bg-black bg-opacity-30 top-0 flex justify-center items-center model">
        <div class="px-3 py-3 top-0 bg-white rounded-md w-3/4">
            <div class="w-full">
                <div class="float-end close">
                    <button class="btn">X</button>
                </div>
                <h1 class="font-semibold text-xl text-center">Information</h1>
                <div class="mt-4">
                    <form action="">
                        <div class="mt-3 flex gap-4">
                            <input type="text" placeholder="First name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                            <input type="text" placeholder="Last name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <div class="mt-1">
                            <input type="email" placeholder="Email address"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <div class="mt-1">
                            <input type="text" placeholder="Contact"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-1">
                            <input type="text" placeholder="Address"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <button class="bg-primary font-bold text-white w-full py-2 mt-4 text-center rounded-md"
                            type="submit">
                            Order
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- end model -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="../js/carousel.js"></script>

    <script>
        $(document).ready(function () {
            function updateTotals() {
                var totalSum = 0;
                $(".product").each(function () {
                    var totalPrice = parseInt($(this).find(".t_price").text());
                    totalSum += totalPrice;
                });

                $("#sub-total").text(totalSum);

                var tax = parseInt($("#tax").text());
                $("#total").text(tax + totalSum);
            }

            // Event handler for adding quantity
            $(".add").click(function () {

                var parent = $(this).closest(".product");

                var qtyElement = parent.find(".quantity");
                var qty = parseInt(qtyElement.text());
                var totalPriceSet = parent.find(".t_price");
                var totalQtySet = parent.find(".t_qty");
                var originalPrice = parseInt(parent.find(".original_price").text());

                qty += 1;
                qtyElement.text(qty);

                var total = originalPrice * qty;
                totalPriceSet.text(total);
                totalQtySet.text(qty);
                updateTotals();
            });

            // Event handler for subtracting quantity
            $(".min").click(function () {
                var parent = $(this).closest(".product");
                var qtyElement = parent.find(".quantity");
                var qty = parseInt(qtyElement.text());
                var totalPriceSet = parent.find(".t_price");
                var totalQtySet = parent.find(".t_qty");
                var originalPrice = parseInt(parent.find(".original_price").text());

                if (qty > 1) {
                    qty -= 1;
                    qtyElement.text(qty);

                    var total = originalPrice * qty;
                    totalPriceSet.text(total);
                    totalQtySet.text(qty);
                }
                updateTotals();
            });

            updateTotals();

            // model code
            $("#add-to-cart").click(function () {
                $(".model").toggleClass("hidden");
            });

            $(".close").click(function () {
                $(".model").toggleClass("hidden");
            });
        });
    </script>
</body>

</html>