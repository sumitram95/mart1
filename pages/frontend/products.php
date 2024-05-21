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

    <title>Products</title>

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
                <a href="./home.php" class="font-semibold text-lg active">Home</a>
                <a href="#" class="font-semibold text-lg">About</a>
                <a href="./products.php" class="font-semibold text-lg">Products</a>
                <a href="#" class="font-semibold text-lg">Offers</a>
                <a href="../traders/auth/sign-up.php" class="font-semibold text-lg">Become a Trader</a>
                <a href="./contact.php" class="font-semibold text-lg">Contact</a>
            </div>
        </nav>

        <!-- content here -->
        <div class="px-4 mt-10 flex gap-6">
            <div class="w-1/4 px-0">
                <h1 class="font-semibold text-lg">
                    <i class="fa-solid fa-sort"></i> Filter
                </h1>
                <div class="mt-3">
                    <h1 class="uppercase">Categories</h1>
                    <div class="mt-3">
                        <p class="text-gray-500">Bakery</p>
                        <p class="text-gray-500 mt-2">Butcher</p>
                        <p class="text-gray-500 mt-2">Greengrocer</p>
                        <p class="text-gray-500 mt-2">FishMongers</p>
                        <p class="text-gray-500 mt-2">Delicatessen</p>
                        <p class="text-gray-500 mt-2">Bakery</p>
                    </div>
                </div>
                <div class="mt-3">
                    <h1 class="uppercase">Price</h1>
                    <div class="mt-3">
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-gray-500">All Price</p>
                            </div>
                            <div class="w-[50px] h-[18px]">
                                <input type="checkbox" class="w-full h-full text-xs" />
                            </div>
                        </div>
                        <div class="flex justify-between mt-1">
                            <div>
                                <p class="text-gray-500">£0.00 - £50</p>
                            </div>
                            <div class="w-[50px] h-[18px]">
                                <input type="checkbox" class="w-full h-full text-xs" />
                            </div>
                        </div>

                        <div class="flex justify-between mt-1">
                            <div>
                                <p class="text-gray-500">£50 - £100</p>
                            </div>
                            <div class="w-[50px] h-[18px]">
                                <input type="checkbox" class="w-full h-full text-xs" />
                            </div>
                        </div>

                        <div class="flex justify-between mt-1">
                            <div>
                                <p class="text-gray-500">£100 - £150</p>
                            </div>
                            <div class="w-[50px] h-[18px]">
                                <input type="checkbox" class="w-full h-full text-xs" />
                            </div>
                        </div>

                        <div class="flex justify-between mt-1">
                            <div>
                                <p class="text-gray-500">£150 - £200</p>
                            </div>
                            <div class="w-[50px] h-[18px]">
                                <input type="checkbox" class="w-full h-full text-xs" />
                            </div>
                        </div>

                        <div class="flex justify-between mt-1">
                            <div>
                                <p class="text-gray-500">£200+</p>
                            </div>
                            <div class="w-[50px] h-[18px]">
                                <input type="checkbox" class="w-full h-full text-xs" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--  -->
            <div class="w-3/4">
                <div class="flex justify-between">
                    <h1 class="font-semibold text-lg">All Products</h1>
                    <div class="flex items-center gap-6">
                        <div class="flex gap-2 items-center">
                            <span class="font-semibold">Sort</span>
                            <i class="fa-solid fa-angle-down text-gray-500"></i>
                        </div>
                        <div class="flex gap-2 items-center">
                            <i class="fa-solid fa-grip"></i>
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>
                </div>
                <div class="mt-5 grid grid-cols-2 sm:grid-cols-4 gap-4 gap-y-6">
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="pb-4 border rounded-md">
                        <div class="flex justify-center">
                            <img src="../image/categories/image 4.png" alt="" class="w-[140px] h-[140px]" />
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
                                <a href="#" class="btn text-xs">Add</a>
                            </div>
                        </div>
                    </div>
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
                            <button class="text-white bg-primary h-full py-1 px-4 font-bold">Subscribe
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
</body>

</html>