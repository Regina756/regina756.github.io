<div class="cursor-pointer">
  <a href="/productDetail/{{$product->id}}">
    <div class="w-full h-auto bg-white group rounded-2xl overflow-hidden shadow-lg border border-white/30 transition duration-300 hover:shadow-xl">
      <img
        class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-300"
        src="{{ asset($product->image) }}"
        alt="{{ $product->name }}"
      />
    </div>
    <p class="mt-4 text-lg font-semibold text-white/90 drop-shadow-sm">{{ $product->name }}</p>
    <div class="flex justify-between items-center mt-2">
      <p class="text-blue-300 font-bold text-base drop-shadow-sm">{{ $product->price }} MMK</p>
      <button class="text-white/70 hover:text-blue-400 transition-colors duration-300">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
             viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M16 11V7a4 4 0 10-8 0v4M5 11h14l-1.68 9.39A2 2 0 0115.34 22H8.66a2 2 0 01-1.98-1.61L5 11z" />
        </svg>
      </button>
    </div>
  </a>
</div>
