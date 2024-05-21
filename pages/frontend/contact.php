<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Contact</title>

    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
    <link rel="stylesheet" href="../../css/style.css" />
  </head>

  <body class="overflow-x-hidden">
    <div class="max-auto overflow-x-hidden">
      <!-- product search here -->
      <section class="px-4 border-b-1 py-3">
        <div class="flex justify-between items-center">
          <div class="flex gap-4 w-3/4 items-center">
            <div class="">
              <h1 class="text-green font-bold text-[25px]">Happy</h1>
              <h3>Mart</h3>
            </div>
            <form
              action=""
              class="flex w-fit h-[45px] items-center rounded-lg bg-gray px-1"
            >
              <div class="border-r px-2">
                <p>All Categories</p>
              </div>
              <div class="px-2">
                <input
                  type="text"
                  placeholder="Search here ....."
                  class="outline-none w-full bg-transparent text-gray-500"
                />
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
              <span class="text-green border-r-2 border-gray-400 px-2"
                ><i class="fa-regular fa-user text-green"></i> Sign In</span
              >
            </a>
            <a href="./wishlists.php"
              ><span><i class="fa-regular fa-heart text-green"></i></span
            ></a>
            <a href="./shopping-cart.php"
              ><span><i class="fa-solid fa-cart-shopping text-green"></i></span
            ></a>
          </div>
        </div>
      </section>
      <!-- end product search -->
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
      <!-- end nav-bar -->

      <!-- content here -->
      <div class="mt-10">
        <div class="py-6 px-3 mx-4 bg-green-white rounded-md flex gap-6">
          <div class="px-8 py-4 bg-gradiant h-[500px] mx-3 rounded-md w-1/3">
            <h1 class="text-2xl font-bold text-white">
              Let’s Connect and Work Together
            </h1>
            <div class="mt-5">
              <p class="text-white font-bold">Our Office</p>
              <p class="text-white">Cleckhauddersfax, UK</p>
            </div>
            <div class="mt-5">
              <p class="text-white font-bold">Email</p>
              <p class="text-white">info@happymart.com</p>
            </div>
            <div class="mt-5">
              <p class="text-white font-bold">Phone No.</p>
              <p class="text-white">+44-07-333-433-335</p>
            </div>
          </div>

          <div class="px-8 py-4 h-[500px] mx-3 w-1/2 border text-gray-700">
            <h1 class="text-2xl font-bold text-gray-700">
              Closer Than a Click Away
            </h1>
            <form action="">
              <p class="mt-5 font-bold">Name</p>
              <input
                type="text"
                name=""
                class="outline-none bg-transparent border-b-1 w-full px-2 py-1"
                placeholder="e.g John Doe"
              />

              <p class="mt-5 font-bold">Email</p>
              <input
                type="text"
                name=""
                class="outline-none bg-transparent border-b-1 w-full px-2 py-1"
                placeholder="e.g exampl@gmail.com"
              />

              <p class="mt-5 font-bold">Mobile No.</p>
              <input
                type="text"
                name=""
                class="outline-none bg-transparent border-b-1 w-full px-2 py-1"
                placeholder="e.g 9800000000"
              />

              <p class="mt-5 font-bold">Subject</p>
              <input
                type="text"
                name=""
                class="outline-none bg-transparent border-b-1 w-full px-2 py-1"
                placeholder="e.g Enter Your Subject Here."
              />

              <p class="mt-5 font-bold pb-1">Message</p>
              <textarea
                name=""
                id=""
                rows="4"
                class="outline-none rounded-md bg-transparent border border-gray-400 w-full px-2 py-1"
                placeholder="Enter Your Message Here."
              ></textarea>
            </form>
          </div>
        </div>
      </div>
      <!-- end content -->
    </div>

    <!-- map -->
    <div class="px-4 mt-10">
      <iframe
        class="w-full"
        height="400px"
        id="gmap_canvas"
        src="https://maps.google.com/maps?q=636+5th+Ave%2C+New+York&t=&z=13&ie=UTF8&iwloc=&output=embed"
        frameborder="0"
        scrolling="no"
        marginheight="0"
        marginwidth="0"
      ></iframe>
    </div>
    <!-- end map -->

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
                <input
                  type="text"
                  class="w-full h-full py-1 px-2"
                  placeholder="Your Email Address"
                />
              </div>
              <div>
                <button
                  class="text-white bg-primary h-full py-1 px-4 font-bold"
                >
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
          <div
            class="w-[30px] h-[30px] bg-gray-100 rounded-full flex items-center justify-center"
          >
            <i class="fa-brands fa-twitter text-green"></i>
          </div>
          <div
            class="w-[30px] h-[30px] bg-gray-100 rounded-full flex items-center justify-center"
          >
            <i class="fa-brands fa-linkedin-in text-green"></i>
          </div>
          <div
            class="w-[30px] h-[30px] bg-gray-100 rounded-full flex items-center justify-center"
          >
            <i class="fa-brands fa-facebook-f text-green"></i>
          </div>
          <div
            class="w-[30px] h-[30px] bg-gray rounded-full flex items-center justify-center"
          >
            <i class="fa-brands fa-instagram text-green"></i>
          </div>
        </div>
      </div>
    </section>
    <!-- end footer -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="../js/carousel.js"></script>
  </body>
</html>
