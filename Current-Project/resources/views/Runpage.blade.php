<x-comp>
@props(['products' => App\Models\Product::all()])
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
              primary: "#001F3F",
              secondary: "#20283F",
            },
          },
        },
      };
    </script>
  </head>
  <body>
  
  @if(session('success'))
    <div 
        class="alert alert-success flex items-center justify-center gap-2" 
        id="success-alert" 
        style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1000; background-color: #d4edda; color: #155724; padding: 10px 20px; border-radius: 5px; display: flex; align-items: center;"
    >
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
  <circle cx="12" cy="12" r="10" />
  <path stroke-linecap="round" stroke-linejoin="round" d="M7 13l3 3 7-7" />
</svg>

        <span>{{ session('success') }}</span>
    </div>
    <script>
        setTimeout(() => {
            const alert = document.getElementById('success-alert');
            if (alert) {
                alert.style.transition = 'opacity 0.5s ease';
                alert.style.opacity = '0';
                setTimeout(() => alert.remove(), 500);
            }
        }, 3000); // 3 seconds
    </script>
    @endif

      <!-- ဒါက body part  -->
   <!-- Remove any default top margin from this container -->
<div class="xl:px-32 sm:px-5 px-2 mt-[-48px] bg-cover bg-no-repeat bg-[url('/images/sky1.jpg')]">


  <!-- startofDesign -->
 <div
  class="relative bg-white/20 backdrop-blur-md text-white py-20 my-12 rounded-2xl shadow-xl flex flex-col items-center justify-center border border-white/30 overflow-hidden"
>
  <!-- Optional soft background image with low opacity -->
  <div class="absolute inset-0 opacity-10">
    <img src="/images/tech-banner-bg.png" alt="" class="w-full h-full object-cover" />
  </div>

  <!-- Main Hero Content -->
  <h1 class="text-4xl md:text-5xl font-extrabold tracking-wide uppercase z-10 drop-shadow-lg">
    Welcome to
    <span
      class="text-blue-300"
      style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);"
    >
      Laravel Shop
    </span>
  </h1>

  <p class="lg:w-[60%] w-[80%] text-center mt-4 text-lg leading-relaxed z-10 text-white/90">
    Discover the
    <span
      class="text-blue-200 font-bold"
      style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);"
    >
      best deals
    </span>
    on
    <span
      class="text-blue-200 font-bold"
      style="text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.8);"
    >
      top-quality products
    </span>.
    All your tech needs in one place!
  </p>
</div>


      <!-- endofDesign -->

    
      <div class="flex md:flex-row flex-col top-0 mb-[100px]">
        <div class="lg:w-[25%] md:w-[35%] text-white w-full md:sticky self-start top-16 ml-[-10px]">
          <div
        class="flex items-center pl-2 rounded-full border-secondary bg-white border-[1px] h-[50px]"
          >
            <svg
              class="text-black/50"
              xmlns="http://www.w3.org/2000/svg"
              width="32"
              height="32"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M15.5 14h-.79l-.28-.27A6.47 6.47 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14"
              />
            </svg>

            <form action="/" method = 'get'>

            <input
              name ='search'
              autocomplete="off"
              type="text"
              class="w-full p-0 pl-2 border-none bg-transparent text-black outline-none focus:ring-0"
              placeholder="Search for products"
            />

            </form>
          


          </div>


          <div class=" py-1 my-10 bg-white/20 backdrop-blur-md rounded-xl p-4">
          <p class="text mt-8 mb-3 font-bold text-black">Product By Category</p>
          <div>
            @foreach($categories as $category)
              <div class="flex items-center cursor-pointer gap-2 py-3 px-2 border-t border-black/10">
                <a href="/?category_id={{ $category->id }}" class="text-sm hover:text-primary transition-all text-black">
                  {{ $category->Category_type }}
                </a>
              </div>
            @endforeach
          </div>
        </div>




        </div>
        <div
          class="lg:w-[75%] md:w-[65%] md:mt-0 mt-10 w-full mb-12 md:pl-[8%]"
        >
          <div
            class="grid lg:grid-cols-4 md:grid-cols-2 mb-14 gap-x-5 gap-y-10"
          >
           
          
           
          @if($products->isEmpty())
          <div class="col-span-4 text-center text-gray-500">
            <p class="text-lg">No products found.</p>
          </div>
          @endif
           
            @foreach($products as $product)

           <x-card :product=$product/>
           

          
            @endforeach
          
        



          </div>

          <div>{{$products->links()
            }}</div>
       
        </div>
      </div>
    </div>

    </x-comp>







