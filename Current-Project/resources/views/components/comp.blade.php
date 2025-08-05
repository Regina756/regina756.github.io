<!DOCTYPE html>
<html lang="en">
  <head>


    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
   
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              primary:"#00172e"
              ,
              secondary: "#20283F",
            },
          },
        },
      }
    </script>
  </head>
  <body>




<div class="flex items-center justify-between  xl:px-38 sm:px-10 px-2 bg-primary">
<!-- Menu Button -->

<button id="menuBtn" class="text-white bg-[#00172e] px-4 py-2 rounded-md shadow-md hover:bg-[#00294d] transition">
  ☰ Menu
</button>

<!-- Sidebar -->
<div id="sidebar" class="fixed top-0 left-0 h-full w-64 bg-[#00172e] text-white shadow-xl rounded-r-2xl transform -translate-x-full transition-transform duration-300 z-50 backdrop-blur-lg">
  <div class="p-5 border-b border-white/10 text-xl font-semibold tracking-wide">Categories</div>
  <ul class="p-4 space-y-4">
    <li>
      <a href="/?category_id=" class="block px-4 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition">
        All
      </a>
    </li>
    <li>
      <a href="/?category_id=1" class="block px-4 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition">
         Category 1
      </a>
    </li>
    <li>
      <a href="/?category_id=2" class="block px-4 py-2 rounded-lg bg-white/10 hover:bg-white/20 transition">
         Category 2
      </a>
    </li>
  </ul>
</div>

<!-- Optional Overlay -->
<div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 hidden z-40"></div>

<!-- Script -->
<script>
  const btn = document.getElementById('menuBtn');
  const sidebar = document.getElementById('sidebar');
  const overlay = document.getElementById('overlay');

  btn.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
    overlay.classList.toggle('hidden');
  });

  overlay.addEventListener('click', () => {
    sidebar.classList.add('-translate-x-full');
    overlay.classList.add('hidden');
  });
</script>



      <a href="/">
        <img
          src="{{ asset('images/homelogo.jpg') }}" alt="Product Image"
          class="md:w-[150px] w-[100px] h-[80px] object-cover md:h-[12 0px]"
        />
      </a>


        
        <form action="/admin/products" method="get">
          <button 
          type="submit" 
          class="px-4 py-2 font-bold text-white rounded-lg hover:bg-gray-300 transition duration-300"
          onmouseover="this.style.backgroundColor='#20283F'; this.style.color='white'; this.style.border='1px solid white';"
          onmouseout="this.style.backgroundColor='white'; this.style.color='black'; this.style.border='none';"
          >
          Admin Panel
          </button>
        </form>

      <div class="flex items-center gap-5">

       
        
        <div class="flex items-center cursor-pointer text-white">
          <div class="flex items-center">
            <p
              class="w-[25px] rounded-full flex text-sm items-center justify-center h-[25px] bg-primary"
            >

             0
              
            </p>

            
              
            <svg
              class="md:w-[50px] w-[30px] h-[50px] md:h-[80px]"
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M6.616 21q-.691 0-1.153-.462T5 19.385V8.615q0-.69.463-1.152T6.616 7H8.5v-.5q0-1.458 1.021-2.479T12 3t2.479 1.021T15.5 6.5V7h1.885q.69 0 1.152.463T19 8.616v10.769q0 .69-.463 1.153T17.385 21zM9.5 7h5v-.5q0-1.056-.722-1.778T12 4t-1.778.722T9.5 6.5zm5.5 4q.214 0 .357-.143t.143-.357V8h-1v2.5q0 .214.143.357T15 11m-6 0q.214 0 .357-.143T9.5 10.5V8h-1v2.5q0 .214.143.357T9 11"
              />
            </svg>
          </div>
          <a href = "/checkout">Your Cart</a>
        </div>
        <!-- <UserDropDown  /> -->
        <div v-else class="md:flex hidden items-center gap-3">
   

        

@if(!Auth()->check())
<div class="md:flex hidden items-center gap-3">
  <a
    href="/login"
    class="px-8 py-4 font-bold rounded-lg bg-white text-black"
  >
    Login
  </a>
  <a 
    href="/register"
    class="px-8 py-4 font-bold rounded-lg text-white border-2 border-white"
  >
    Register
  </a>
</div>
@else
<div class="md:flex px-7 hidden items-center gap-3">
  <a 
    href="/logout/{{ auth()->user()->id}}"
    class="flex items-center gap-2 px-6 py-4 font-bold bg-red-600 rounded-lg text-white text-lg"
  >
    LOGOUT
    <svg xmlns="http://www.w3.org/2000/svg" 
      fill="none" 
      viewBox="0 0 24 24" 
      stroke="white" 
      class="w-6 h-6">
      <path stroke-linecap="round" 
        stroke-linejoin="round" 
        stroke-width="2" 
        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 002 2h3a2 2 0 002-2V7a2 2 0 00-2-2h-3a2 2 0 00-2 2v1" />
    </svg>
  </a>
</div>





@endif







        </div>
      </div>
    </div>
    {{$slot}}

    <div
      class="bg-secondary xl:px-32 sm:px-5 px-2 grid gap-y-10 xl:grid-cols-5 gap-4 md:grid-cols-3 py-20 text-white"
    >
      <div>
        <h1 class="text-lg font-bold">Menu</h1>
        <ul class="mt-6 gap-2 font-semibold flex flex-col">
          <li>
            <a href="/home.html"></a>
          </li>
         
          <li>
            <a href="/home.html">Clothes</a>
          </li>
      
        </ul>
      </div>
      <div class="col-span-2">
        <h1 class="text-lg font-bold">Popular Products</h1>
        <div class="mt-6 grid md:grid-cols-2 gap-4">
          <a href="/productDetail.html">
            <div class="flex gap-4 items-center">
              <div
                class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden"
              >
                <img
                  class="w-full h-full object-cover"
                  src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                />
              </div>
              <div>
                <h1 class="font-bold">Product Name</h1>
                <p class="text-sm text-primary font-semibold">200000 MMK</p>
              </div>
            </div>
          </a>
          <a href="/productDetail.html">
            <div class="flex gap-4 items-center">
              <div
                class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden"
              >
                <img
                  class="w-full h-full object-cover"
                  src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                />
              </div>
              <div>
                <h1 class="font-bold">Product Name</h1>
                <p class="text-sm text-primary font-semibold">200000 MMK</p>
              </div>
            </div>
          </a>
          <a href="/productDetail.html">
            <div class="flex gap-4 items-center">
              <div
                class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden"
              >
                <img
                  class="w-full h-full object-cover"
                  src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                />
              </div>
              <div>
                <h1 class="font-bold">Product Name</h1>
                <p class="text-sm text-primary font-semibold">200000 MMK</p>
              </div>
            </div>
          </a>
          <a href="/productDetail.html">
            <div class="flex gap-4 items-center">
              <div
                class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden"
              >
                <img
                  class="w-full h-full object-cover"
                  src="https://cdn.prod.website-files.com/62f51a90d298e65b94bbffcd/62f6a67c4666f047ada3ba87_image-10-shop-product-shopwave-template-p-500.png"
                />
              </div>
              <div>
                <h1 class="font-bold">Product Name</h1>
                <p class="text-sm text-primary font-semibold">200000 MMK</p>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="xl:col-span-2 md:col-span-3">
        <div class="bg-[#383E52] flex flex-col items-center p-10 rounded-xl">
          <h1 class="text-lg font-extrabold mb-2">
            Get 10% OFF of your first purchase
          </h1>
          <div
            class="xl:w-full md:w-[50%] w-full h-[55px] bg-white rounded-full"
          >
            <input
              class="w-full h-full text-black text-sm pl-6 bg-transparent border-none outline-none focus:ring-0"
              placeholder="Enter your email address"
            />
          </div>
          <!-- <ValidationError :message="errors.email" /> -->
          <button
            class="xl:w-full md:w-[50%] w-full h-full bg-primary rounded-full py-4 font-bold mt-3"
          >
            Subscribe
          </button>
        </div>
      </div>
    </div>
  </body>
</html>
