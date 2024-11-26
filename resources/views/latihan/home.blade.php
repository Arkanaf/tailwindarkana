<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" rel="stylesheet" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Tugas MK3</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="font-sans text-gray-800 bg-gray-100">
    <nav>
      <div class="max-w-screen-xl mx-auto px-4 py-8 flex items-center justify-between">
        <div class="flex-1">
          <a href="#" class="text-blue-600 text-xl font-semibold">ShirtStyleS</a>
        </div>
        <ul class="flex items-center space-x-8">
          <li><a href="#home" class="text-gray-800 font-semibold hover:text-blue-600">HOME</a></li>
          <li><a href="#about" class="text-gray-800 font-semibold hover:text-blue-600">ABOUT</a></li>
          <li><a href="#project" class="text-gray-800 font-semibold hover:text-blue-600">ARTICLE</a></li>
          <li><a href="#contact" class="text-gray-800 font-semibold hover:text-blue-600">CONTACT</a></li>
        </ul>
        <div class="flex-1 flex items-center justify-end space-x-4">
          <button class="bg-transparent border-2 border-gray-500 text-gray-800 px-6 py-3 rounded-md hover:bg-gray-200 transition">Log In</button>
          <button class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">Sign In</button>
        </div>
      </div>
    </nav>

    <header class="bg-gray-100">
      <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 py-16">
        <div class="col-span-2 flex flex-col items-start space-y-6 px-4">
          <h1 class="text-4xl font-semibold leading-tight text-gray-800">Style inspired by you, for you. Discover our collection now</h1>
          <p class="text-gray-600">Find your style with our collection designed to look stunning everytime you want!!</p>
          <div class="flex space-x-4">
            <button class="bg-blue-600 text-white px-6 py-3 rounded-md hover:bg-blue-700 transition">Buy Now</button>
            <button class="bg-transparent border-2 border-gray-500 text-gray-800 px-6 py-3 rounded-md hover:bg-gray-200 transition">Learn More</button>
          </div>
        </div>
        <div class="col-span-2 flex items-center justify-center">
          <img src="imagee.png" alt="header" class="w-full h-full object-cover" />
        </div>
      </div>
    </header>

    <section id="about" class="py-16">
      <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
        <div>
          <img src="aboutt.jpg" alt="about" class="max-w-xl mx-auto" />
        </div>
        <div>
          <h3 class="text-2xl text-blue-600 font-medium">ABOUT US</h3>
          <h2 class="text-3xl font-semibold text-gray-800 mt-4 mb-2">Since 2018</h2>
          <p class="text-gray-600">We are more than just a clothing brand. We are the embodiment of style, creativity and confidence. Every collection we create is designed with love and attention to detail, to inspire you to look your best in every moment.</p>
          <div class="grid grid-cols-3 gap-4 mt-8">
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
              <h4 class="text-blue-600 font-semibold">PREVIOUS ARTICLE</h4>
              <p class="text-2xl font-semibold">34+</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
              <h4 class="text-blue-600 font-semibold">BEST SELLER ARTICLE</h4>
              <p class="text-2xl font-semibold">10+</p>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md text-center">
              <h4 class="text-blue-600 font-semibold">NEW ARTICLE</h4>
              <p class="text-2xl font-semibold">5</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="project" class="py-16 bg-gray-50">
      <div class="max-w-screen-xl mx-auto flex items-center justify-between space-x-4 px-4 mb-16">
        <div>
          <h2 class="text-3xl font-semibold text-gray-800">Our Article</h2>
          <p class="text-gray-600 mt-2">We are dedicated to helping you find your dream outfits with ease and confidence.</p>
        </div>
        <div class="flex space-x-4">
          <span class="text-blue-600 cursor-pointer hover:text-blue-700"><i class="ri-arrow-left-line"></i></span>
          <span class="text-blue-600 cursor-pointer hover:text-blue-700"><i class="ri-arrow-right-line"></i></span>
        </div>
      </div>

      <div class="swiper">
        <div class="swiper-wrapper">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="relative pb-12">
              <img src="product-1.jpg" alt="project" class="w-full" />
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 bg-white p-4 rounded-lg shadow-lg w-11/12 md:w-9/12 flex justify-between items-center">
                <div>
                  <h4 class="text-gray-800 font-semibold">Black Knight Hoodie</h4>
                  <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition">Buy Now</button>
                </div>
                <div>
                  <div class="flex items-center space-x-2 text-yellow-500">
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-fill"></i></span>
                    <span><i class="ri-star-half-fill"></i></span>
                    <span><i class="ri-star-line"></i></span>
                  </div>
                  <div class="text-right text-gray-800 font-semibold">50$</div>
                </div>
              </div>
            </div>
          </div>

          <!-- Additional slides go here... -->
        </div>
      </div>
    </section>

    <section id="contact" class="py-16 bg-gray-100">
      <div class="max-w-screen-xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-8 px-4">
        <div>
          <img src="contactt.jpg" alt="contact" class="max-w-xl mx-auto" />
        </div>
        <div>
          <h2 class="text-3xl font-semibold text-gray-800">Contact Us</h2>
          <p class="text-gray-600 mt-2">Discover the difference, where expertise meets excellence in real estate. Let's embark on this exciting journey together.</p>
          <form class="mt-6 space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <input type="text" placeh