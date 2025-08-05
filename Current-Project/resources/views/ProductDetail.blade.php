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
              primary: "#0285FF",
              secondary: "#20283F",
            },
          },
        },
      };
    </script>
  </head>
  <body>
    <div
      class="flex items-center justify-between xl:px-32 sm:px-5 px-2 bg-secondary"
    >
      <a href="/">
        <img
          src="{{asset('images/homelogo.jpg')}}"
          class="md:w-[150px] w-[100px] h-[80px] object-cover md:h-[12 0px]"
        />
      </a>


      






    </div>
    <div class="xl:px-32 sm:px-5 px-2">
      <div class="mt-10 flex md:flex-row flex-col xl:gap-10 gap-5">
        <div class="lg:basis-[65%] md:basis-[60%] overflow-hidden">
          <div class="flex lg:flex-row flex-col-reverse gap-5">
            


            <div class="basis-[90%]">
              <div
              class="w-full max-w-xs h-auto cursor-pointer group rounded-xl overflow-hidden mx-auto"
              >
              <img
                class="w-full h-auto max-h-64 object-contain group-hover:scale-[1.1] transition-all duration-200"
                src="{{ asset($product->image) }}"
              />
              </div>
            </div>





          </div>
          <div class="w-full h-[1px] bg-black/10 my-16"></div>


          




          


          <div class="md:mt-0 mt-10">
            <div class="flex items-center justify-between">

              <h1 class="text-2xl font-semibold">Latest Products</h1>
              <a href="/home.html" class="text-sm text-primary underline"
                >View all</a
              >
            </div>

           



            <div class="grid lg:grid-cols-3 mb-10 mt-7 gap-3 items-stretch">
  @foreach($latestproduct as $latest)
  <a class="block h-full" href="/productDetail/{{ $latest->id }}">
    <div class="rounded-lg h-full flex flex-row cursor-pointer hover:-translate-y-2 transition-all duration-200 group shadow-md hover:shadow-lg overflow-hidden">
      
      <!-- Image Box -->
      <div class="w-[80px] h-[80px] shrink-0 rounded-md overflow-hidden flex items-center justify-center bg-gray-100">
        <img
          src="{{ asset($latest->image) }}"
          alt="{{ $latest->name }}"
          class="w-full h-full object-cover group-hover:scale-[1.1] transition-transform duration-200"
        />
      </div>
      
      <!-- Text Box -->
      <div class="py-4 w-full px-6 flex flex-col justify-center">
        <h1 class="md:text-lg text-base line-clamp-1 font-bold group-hover:text-primary transition-all duration-200">
          {{ $latest->name }}
        </h1>
        <div class="flex xl:flex-row flex-col xl:items-center font-semibold mt-2 xl:gap-2">
          <p class="text-primary">{{ $latest->price }} MMK</p>
        </div>
      </div>

    </div>
  </a>
  @endforeach
</div>

            

            









          </div>
          <div class="w-full h-[1px] bg-black/10 my-16"></div>
          <div>
            <h1 class="text-2xl font-semibold">Product information</h1>
            <div class="mt-4" id="description">
              <p class="text-lg text-black/50">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam
                dolorem facere veniam, esse iusto itaque architecto, a quis
                cupiditate beatae quam aspernatur, dolores sint corrupti
                similique ullam autem eveniet ea tenetur ut? Itaque molestias
                quod similique laborum aliquid. Atque similique expedita tempora
                est commodi distinctio sequi ipsum ducimus doloremque beatae!
              </p>
            </div>
          </div>
          <div class="w-full h-[1px] bg-black/10 my-16"></div>
         
          <div class="my-16">
            <h1 class="text-2xl font-semibold">Shipping Information Updated</h1>
            <p class="text-lg text-black/50">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit lobortis
              arcu enim urna adipiscing praesent velit viverra sit semper lorem
              eu cursus vel hendrerit elementum morbi curabitur etiam nibh
              
            </p>
          </div>
        </div>
        <div class="lg:basis-[35%] md:basis-[40%]">



         <form action="/checkout" method="get">


         






<!-- Add to Cart Section -->
<div class="w-full flex justify-center p-4 mt-6">
  <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-6">
    
    <!-- Product Title & Price -->
    <div class="flex items-center justify-between mb-6">
      <div>
        <h2 class="text-lg font-semibold text-gray-800">{{$product->name}}</h2>
        <p class="text-primary font-semibold">${{$product->price}}</p>
      </div>
    </div>

    <!-- Quantity Controls -->
    <div class="border-t border-gray-200 pt-4">
      <h3 class="text-sm font-medium text-gray-700 mb-3">Quantity</h3>
      
      <div class="flex items-center">
        <button id="decrement" type="button" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-l-lg transition duration-150">
          -
        </button>

        <input type="number" id="quantity" name = "quantity"value="1" min="1" max="10" 
          class="bg-gray-50 text-center w-16 py-2 px-3 text-gray-800 border-t border-b border-gray-300 focus:outline-none focus:ring-1 focus:ring-blue-500" />

        <button id="increment" type="button" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-r-lg transition duration-150">
          +
        </button>

        <span class="ml-4 text-sm text-gray-500">Max: 100</span>
      </div>

      <!-- Subtotal -->
      <div class="mt-6 flex justify-between items-center">
        <p class="text-gray-600">Subtotal:</p>
        <p id="subtotal" class="text-lg font-semibold text-gray-800">$129.99</p>
      </div>

      <!-- Submit Button -->
      <button type="submit" class="w-full mt-6 bg-primary hover:bg-blue-700 text-white font-semibold py-3 px-4 rounded-xl shadow transition duration-200">
        Add to Cart
      </button>
    </div>
  </div>
</div>

<!-- JavaScript -->
<script>
  const quantityInput = document.getElementById('quantity');
  const decrementBtn = document.getElementById('decrement');
  const incrementBtn = document.getElementById('increment');
  const subtotalElement = document.getElementById('subtotal');
  const price = 129.99;

  function updateSubtotal() {
    const quantity = parseInt(quantityInput.value);
    subtotalElement.textContent = `$${(price * quantity).toFixed(2)}`;
  }

  decrementBtn.addEventListener('click', () => {
    let value = parseInt(quantityInput.value);
    if (value > 1) {
      value--;
      quantityInput.value = value;
      updateSubtotal();
    }
  });

  incrementBtn.addEventListener('click', () => {
    let value = parseInt(quantityInput.value);
    if (value < 10) {
      value++;
      quantityInput.value = value;
      updateSubtotal();
    }
  });

  quantityInput.addEventListener('change', () => {
    let value = parseInt(quantityInput.value);
    if (isNaN(value) || value < 1) {
      quantityInput.value = 1;
    } else if (value > 10) {
      quantityInput.value = 10;
    }
    updateSubtotal();
  });

  // Initialize subtotal
  updateSubtotal();
</script>





        </form>


          <div class="mt-12">
            <div class="flex items-center justify-between mb-7">
              <h1 class="text-2xl font-medium">Related Product</h1>

              <a href="/" class="text-sm text-primary underline"
                >View all</a
              >
            </div>

            <div class="flex flex-col gap-7">
             


             <!-- Related product -->
              @foreach($relatedproduct as $related)
              <a href="/productDetail/{{$related->id}}">
                <div class="flex items-center gap-5 group cursor-pointer">
                  <div class="basis-[30%] h-auto `rounded-xl overflow-hidden">
                    <img
                      class="w-full h-full group-hover:scale-[1.1] transition-all duration-200 object-cover"
                      src = "{{asset($related->image)}}"                    />
                  </div>
                  <div class="basis-[70%]">
                    <p
                      class="text-lg group-hover:text-primary transition-all duration-200 font-semibold"
                    >
                      {{$related->name}}
                    </p>
                    <div class="flex items-center gap-2">
                      <p class="font-bold">{{$related->price}} MMK</p>
                    </div>
                  </div>
                </div>
              </a>
              @endforeach


              
            </div>
            
          </div>
        </div>
      </div>
      <div class="w-full h-[1px] bg-black/10 mt-16"></div>
    </div>
    <div
      class="bg-secondary xl:px-32 sm:px-5 px-2 grid gap-y-10 xl:grid-cols-5 gap-4 md:grid-cols-3 py-20 text-white"
    >
      <div>
        <h1 class="text-lg font-bold">Menu</h1>
        <ul class="mt-6 gap-2 font-semibold flex flex-col">
          <li>
            <a href="/home.html">Home</a>
          </li>
          <li>
            <a href="/home.html">Beauty</a>
          </li>
          <li>
            <a href="/home.html">Clothes</a>
          </li>
          <li>
            <a href="/home.html">Food</a>
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
