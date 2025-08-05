<x-comp>
  <div class="flex lg:flex-row flex-col gap-5 xl:px-32 sm:px-5 px-2 mt-10 mb-10">
    <div class="basis-[60%]">
      <h1 class="font-bold text-2xl">Billing Details</h1>
      <div class="mt-6 border-[1px] border-black/10 px-6 pt-8 pb-8">
        <form class="md:grid md:grid-cols-2 flex flex-col gap-4" method="post" action="#">
          {{-- @csrf --}}
          
          <div class="md:col-span-2 flex flex-col justify-center">
            <label class="font-semibold text-sm">Name</label>
            <input
              type="text"
              name="name"
              autocomplete="off"
              value=""
              class="outline-none px-3 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
              placeholder="Enter your name"
            />
          </div>

          <div class="md:col-span-2 flex flex-col justify-center">
            <label class="font-semibold text-sm">Shipping Address</label>
            <input
              name="address"
              autocomplete="off"
              value=""
              class="outline-none px-3 focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
              placeholder="Enter your shipping address"
            />
          </div>

          <div class="md:col-span-2 flex flex-col justify-center">
            <label class="font-semibold text-sm">Paid Screenshot</label>
            <input type="file" name="screenshot" />
          </div>

          <div class="flex md:col-span-2 flex-col">
            <label class="font-semibold text-sm">Order Notes (optional)</label>
            <textarea
              name="notes"
              rows="5"
              class="outline-none focus:ring-0 border-[1px] border-black/10 py-4 rounded-lg focus:border-primary transition-all mt-2"
            ></textarea>
          </div>

          <button type="submit" class="w-full h-full col-span-2 text-white bg-primary rounded-full py-4 font-bold mt-3">
            Confirm order
          </button>
        </form>
      </div>
    </div>

    <div class="basis-[40%]">
      <h1 class="font-bold text-2xl">Your Order</h1>
      <div class="mt-6 border-[1px] border-black/10 px-6 pt-8 pb-8">
        <p class="font-semibold">Product</p>
        <div class="mt-3 pb-7 flex flex-col text-sm gap-3 border-b-[1px] border-b-black/10">
          {{-- Example cart item --}}
          <div class="flex items-center gap-8">
            <div class="flex font-bold items-center justify-between grow">
              <p>Sample Product Name</p>
            </div>
            <div class="font-bold flex gap-2 shrink-0">
              <p class="text-black/50">x 2</p>
              <p>10000 MMK</p>
            </div>
            <form action="#" method="post">
              <button type="submit">X</button>
            </form>
          </div>

          {{-- <p>No items in cart. Go to <a href="/homepage" class="text-blue-500 underline">Products</a></p> --}}
        </div>

        <div class="mt-6 pb-8 border-b-[1px] border-b-black/10">
          <p class="font-semibold">Shipping</p>
          <div class="mt-3 text-sm font-bold flex items-center justify-between">
            <p>Delivery Fees:</p>
            <p>4000 Ks</p>
          </div>
        </div>

        <div class="mt-8 pb-8 flex border-b-[1px] border-b-black/10 items-center justify-between">
          <p class="font-semibold">Total</p>
          <p class="font-extrabold">14000 Ks</p>
        </div>

        <div class="mt-8">
          <p class="font-semibold mb-3">Bank Transfer</p>
          <div class="grid grid-cols-5 gap-2">
            <div class="border rounded-md overflow-hidden border-black/30">
              <img class="w-full h-full object-cover" src="https://tbqmall.co/wp-content/uploads/2023/09/tbqhs-uabpay-checkout.png" />
            </div>
            <div class="border rounded-md overflow-hidden border-black/30">
              <img class="w-full h-full object-cover" src="https://via.placeholder.com/150" />
            </div>
          </div>
          <p class="mt-4 text-sm font-bold text-black/50">
            Make your payment directly into our bank account. Please use your Order ID as the payment reference.
          </p>

          <div class="mt-5 flex-col gap-3">
            <div>
              <p class="font-semibold text-lg">Acc No.</p>
              <p class="font-semibold text-black">09876322323</p>
            </div>
            <div>
              <p class="font-semibold text-lg">Username</p>
              <p class="font-semibold text-black">Unknown</p>
            </div>
            <div>
              <h1 class="font-semibold text-lg">QR Code</h1>
              <img class="w-[300px] mx-auto h-auto" src="https://www.narrativeindustries.com/wp-content/uploads/2020/05/PayPal-QR-Code-Scan-Me-2-862x523.png" />
            </div>
            <div>
              <h1 class="font-semibold text-lg">Description</h1>
              <p class="font-semibold text-black">Payment instructions will be displayed here.</p>
            </div>
          </div>
        </div>

        <div class="flex items-center cursor-pointer gap-2">
          <input
            id="termandcondition"
            type="checkbox"
            class="outline-none focus:ring-0 border-2 border-black/10"
          />
          <label for="termandcondition" class="text-sm font-bold text-black/50 my-4">
            I have read and agree to the website
            <span class="underline text-black">terms and conditions</span>
          </label>
        </div>
      </div>
    </div>
  </div>
</x-comp>
