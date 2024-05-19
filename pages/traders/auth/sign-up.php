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

    <title>Trader Register</title>

    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body class="overflow-x-hidden">
    <div class="max-auto overflow-x-hidden">
        <div class="px-4 flex justify-center h-full items-center mt-10">
            <div class="w-1/2">
                <h1 class="font-semibold text-xl text-center">
                    Become one of our Traders
                </h1>
                <div class="mt-4">
                    <form action="">
                        <div class="mt-3 flex gap-4">
                            <input type="text" placeholder="First name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                            <input type="text" placeholder="Last name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <div class="mt-1">
                            <input type="text" placeholder="User name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <div class="mt-1">
                            <input type="email" placeholder="Email address"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>

                        <div class="mt-1">
                            <input type="password" placeholder="Password"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-1">
                            <input type="text" placeholder="Contact"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-1">
                            <input type="text" placeholder="Shop Name"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-1">
                            <input type="text" placeholder="Address"
                                class="px-4 py-2 rounded-md mt-2 bg-transparent border border-gray-500 outline-none w-full" />
                        </div>
                        <div class="mt-2">
                            <select name="" id=""
                                class="w-full border py-2 px-4 rounded-md text-gray outline-none border-gray-500">
                                <option value="">Shop Type</option>
                                <option value="">A</option>
                                <option value="">B</option>
                                <option value="">C</option>
                                <option value="">D</option>
                                <option value="">E</option>
                                <option value="">E</option>
                            </select>
                        </div>

                        <div class="mt-1 flex gap-2">
                            <div>
                                <input type="checkbox" id="cb1" class="mt-1" />
                            </div>
                            <p class="text-gray">
                                Creating an account means you agree with our
                                <span class="text-green"> Terms and Conditions </span>,
                                <span class="text-green"> Privacy Policy and default</span>
                                <span class="text-green"> Notifications Settings. </span>
                            </p>
                        </div>

                        <button class="bg-primary font-semibold text-white w-full py-2 mt-4 text-center rounded-md"
                            type="submit">
                            Register
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
</body>

</html>