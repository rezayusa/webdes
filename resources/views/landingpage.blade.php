<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Website Desa</title>
</head>
<body>
 <section>

<header>
    <div class="header-top bg-slate-500">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-44 p-4">
            <a href="" class="flex items-center space-x-2 rtl:space-x-reverse">
               <img src="./assets/svg/phone.svg" class="w-8 h-8 "  alt="">

                <span class=" text-md font-semibold  text-white">226-2627382 | pemdeskarteng@gmail.com</span>
            </a>


            <div class=" text-md font-semibold whitespace-nowrap text-white ">
              <h4> Kabupaten Banyumas</h4>

            </div>
    </div>
    <div class="header-container bg-white   ">
        <div class=" max-w-screen-xl flex flex-wrap items-center justify-between mx-44 p-4 ">
            <a href="" class="flex items-center space-x-2 rtl:space-x-reverse box-border">

                <img src="./assets/svg/bms.svg" class="h-14 w-14 mr-4"  alt="">
                <span class=" text-md font-semibold   text-gray-500">Desa Karangtengah <br>Kabupaten Banyumas</span>
            </a>

            <div class=" text-md font-semibold whitespace-nowrap text-gray-500 ">
              <ul class="flex">
                <li>
                  <a href="#" class="mx-4 hover:text-white hover:bg-gray-500 px-3 py-2 rounded">Profile Desa</a>
                </li>
                <li>
                  <a href="#" class="mx-4 hover:text-white hover:bg-gray-500 px-3 py-2 rounded">Pemerintahan</a>
                </li>
                <li>
                  <a href="#" class="mx-4 hover:text-white hover:bg-gray-500 px-3 py-2 rounded">Informasi Publik</a>
                </li>
                <li>
                  <a href="#" class="mx-4 hover:text-white hover:bg-gray-500 px-3 py-2 rounded">Potensi Desa</a>
                </li>
                <li>
                  <a href="#" class="mx-4 hover:text-white hover:bg-gray-500 px-3 py-2 rounded">Produk</a>
                </li>

              </ul>

            </div>
    </div>

    .
</header>

{{-- carrousel --}}
<div class="max-w-6xl  mx-auto mt-10">

    <div id="default-carousel" class="relative rounded-lg overflow-hidden shadow-lg" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative  h-80 md:h-96" data-carousel-inner>
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/"
                    class="object-cover w-full h-full" alt="Slide 1">
                <span class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-xl font-semibold text-white md:text-2xl dark:text-gray-800">First Slide</span>
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/"
                    class="object-cover w-full h-full" alt="Slide 2">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://source.unsplash.com/"
                    class="object-cover w-full h-full" alt="Slide 3">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="flex absolute bottom-5 left-1/2 z-30 -translate-x-1/2 space-x-2" data-carousel-indicators>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
            <button type="button" class="w-3 h-3 rounded-full bg-gray-300 hover:bg-gray-400 focus:outline-none focus:bg-gray-400 transition"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="flex absolute top-1/2 left-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
            data-carousel-prev>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>
        <button type="button"
            class="flex absolute top-1/2 right-3 z-40 items-center justify-center w-10 h-10 bg-gray-200/50 rounded-full hover:bg-gray-300 focus:outline-none transition"
            data-carousel-next>
            <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>
    </div>


    <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>

</div>


{{--  Bagian isi--}}
<div class="container  max-w-full mx-auto     bg-gray-50">
    <div class="grid grid-cols-12 bg-red mx-20 py-10 justify-items-center">
      <div class="col-span-3 ">
        <div class="flex flex-col items-center">
            <img src="./assets/img/service.png" class="w-20 h-20 " alt="">
            <h5>Layanan Masyarakat</h5>
        </div>

      </div>
      <div class="col-span-3 ">
        <div class="flex flex-col items-center">
            <img src="./assets/img/potensi.png" class="w-20 h-20 " alt="">
            <h5>Potensi Desa</h5>
        </div>

      </div>
      <div class="col-span-3 ">
        <div class="flex flex-col items-center">
            <img src="./assets/img/pembangunan.png" class="w-20 h-20 " alt="">
            <h5>Pembangunan Desa</h5>
        </div>

      </div>
      <div class="col-span-3 ">
        <div class="flex flex-col items-center">
            <img src="./assets/img/uang.png" class="w-20 h-20 " alt="">
            <h5>Keuangan Desa</h5>
        </div>

      </div>

    </div>
</div>
<div class=" container max-w-full mx-auto ">
  <div class="grid grid-cols-12 bg-red gap-7 mx-40 py-10 justify-items-center">
    <div class="col-span-7 ">
      <h1 class="font-normal text-2xl text-gray-600 mb-2">Berita  <span class="font-semibold">Terkini</span></h1>
       <div class="border-b-2 border-gray-400 max-w-full mb-8"></div>
       {{-- isi berita --}}
       <div class=" container mb-4">
        <div class="flex justify-between">
          <div class="border border-gray-200 shadow-md rounded-md px-20 py-8">
            <img src="./assets/img/berita.png" alt="">

          </div>
          <div class="ml-8 -mt-2">
            <h1 class="font-semibold text-xl text-gray-600">Program KKN-T Di Desa Karangtengah</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quam aliquid ducimus quae ipsa minus. Lorem ipsum dolor sit amet.</p>  </div>
        </div>


       </div>
       <div class=" container mb-4">
        <div class="flex justify-between">
          <div class="border border-gray-200 shadow-md rounded-md px-20 py-8">
            <img src="./assets/img/berita.png" alt="">

          </div>
          <div class="ml-8 -mt-2">
            <h1 class="font-semibold text-xl text-gray-600">Pengolahan Sampah Di Desa Karangtengah</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quam aliquid ducimus quae ipsa minus. Lorem ipsum dolor sit amet.</p>  </div>
        </div>


       </div>
       <div class=" container mb-4">
        <div class="flex justify-between">
          <div class="border border-gray-200 shadow-md rounded-md px-20 py-8">
            <img src="./assets/img/berita.png" alt="">

          </div>
          <div class="ml-8 -mt-2">
            <h1 class="font-semibold text-xl text-gray-600">Sosialiasi Peternak Kambing</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quam aliquid ducimus quae ipsa minus. Lorem ipsum dolor sit amet.</p>  </div>
        </div>


       </div>
       <div class=" container mb-4">
        <div class="flex justify-between">
          <div class="border border-gray-200 shadow-md rounded-md px-20 py-8">
            <img src="./assets/img/berita.png" alt="">

          </div>
          <div class="ml-8 -mt-2">
            <h1 class="font-semibold text-xl text-gray-600">Pembangunan Kolam Renang</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis quam aliquid ducimus quae ipsa minus. Lorem ipsum dolor sit amet.</p>  </div>
        </div>


       </div>
   </div>

    <div class="col-span-5 ">

      {{-- Pengumuman --}}
      <div class="grid grid-rows-2 gap-4">
        <div class="row-span-1">
          <h1 class="font-semibold text-2xl text-gray-600 mb-2">Pengumuman</h1>
          <div class="border-b-2 border-gray-400 max-w-full mb-8"></div>

          <div class=" container mb-4">
            <div class="bg-gray-400 rounded-md px-5 py-2 text-white mb-4">
              <a href="#"> Pendaftaran DTKS</a>
            </div>
            <div class="bg-gray-400 rounded-md px-5 py-2 text-white mb-4">
              <a href="#"> Seleksi Pengurus BUMDeS</a>
            </div>
            <div class="bg-gray-400 rounded-md px-5 py-2 text-white mb-4">
              <a href="#"> Pengambilan PKH</a>
            </div>

          </div>


        </div>
        <div class="row-span-1">
          <h1 class="font-normal text-2xl text-gray-600 mb-2">Agenda <span class="font-semibold">Kegiatan</span></h1>
          <div class="border-b-2 border-gray-400 max-w-full mb-4"></div>

          <div class="container mb-6">
            <div class="flex justify-between ">
              <div class="bg-gray-400 rounded-md px-2 py-2 text-white text-center flex">
                <h4>APR 30 2024</h4>
              </div>

              <div class="ml-4">
                <h1 class=" text-md font-semibold text-gray-400">Pengolahan Sampah Di Desa Karangtengah</h1>
                <p class="text-black"> Lokasi: Balai Desa</p>
              </div>

            </div>
          </div>
          <div class="container mb-6">
            <div class="flex justify-between ">
              <div class="bg-gray-400 rounded-md px-2 py-2 text-white text-center flex">
                <h4>APR 30 2024</h4>
              </div>

              <div class="ml-4">
                <h1 class=" text-md font-semibold text-gray-400">Pengolahan Sampah Di Desa Karangtengah</h1>
                <p class="text-black"> Lokasi: Balai Desa</p>
              </div>

            </div>
          </div>
          <div class="container mb-6">
            <div class="flex justify-between ">
              <div class="bg-gray-400 rounded-md px-2 py-2 text-white text-center flex">
                <h4>APR 30 2024</h4>
              </div>

              <div class="ml-4">
                <h1 class=" text-md font-semibold text-gray-400">Pengolahan Sampah Di Desa Karangtengah</h1>
                <p class="text-black"> Lokasi: Balai Desa</p>
              </div>

            </div>
          </div>





        </div>

      </div>





    </div>

  </div>

</div>








 </section>
</body>
</html>
