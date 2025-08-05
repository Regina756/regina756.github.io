<x-comp>


    

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

    @if(session('error'))
<div 
    class="alert alert-error flex items-center justify-center gap-2" 
    id="error-alert" 
    style="position: fixed; top: 20px; left: 50%; transform: translateX(-50%); z-index: 1000; background-color: #f8d7da; color: #721c24; padding: 10px 20px; border-radius: 5px; display: flex; align-items: center;"
>
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
  <circle cx="12" cy="12" r="10" />
  <line x1="15" y1="9" x2="9" y2="15" stroke-linecap="round" />
  <line x1="9" y1="9" x2="15" y2="15" stroke-linecap="round" />
</svg>

    <span>{{ session('error') }}</span>
</div>
<script>
    setTimeout(() => {
        const alert = document.getElementById('error-alert');
        if (alert) {
            alert.style.transition = 'opacity 0.5s ease';
            alert.style.opacity = '0';
            setTimeout(() => alert.remove(), 500);
        }
    }, 4000); // 4 seconds
</script>
@endif


    

   
<!-- Background container -->
<div class="flex items-center justify-center min-h-screen bg-[url('/images/Landscape2.png')] bg-cover bg-center">

  <!-- Glass login card -->
  <div class="w-[90%] sm:w-[30%] p-8 rounded-2xl border border-white/30 bg-black/30 backdrop-blur-md shadow-2xl">
    <h1 class="text-3xl text-center font-bold text-white drop-shadow mb-6">Login</h1>

    <form class="flex flex-col gap-4" action="/authenticate" method="post">
      @csrf

      <!-- Email -->
      <div class="flex flex-col">
        <label class="text-sm font-medium text-white drop-shadow">Email</label>
        <input
          class="mt-1 px-3 py-2 rounded-lg border border-white/20 bg-white/20 text-white placeholder-white/70 outline-none focus:border-white/50 focus:ring-2 focus:ring-white/40 transition-all"
          type="text" name="email" autocomplete="off" placeholder="Enter your Email"
        />
      </div>

      <!-- Password -->
      <div class="flex flex-col">
        <label class="text-sm font-medium text-white drop-shadow">Password</label>
        <input
          class="mt-1 px-3 py-2 rounded-lg border border-white/20 bg-white/20 text-white placeholder-white/70 outline-none focus:border-white/50 focus:ring-2 focus:ring-white/40 transition-all"
          type="password" name="password" autocomplete="off" placeholder="Enter your Password"
        />
      </div>

      <!-- Forgot password -->
      <div class="flex justify-end">
        <a href="{{ route('password.request') }}" class="text-sm text-white underline drop-shadow">Forgot Password?</a>
      </div>

      <!-- Submit button -->
      <button
        type="submit"
        class="w-full py-2 text-white font-bold text-lg rounded-lg bg-blue-600 hover:bg-blue-700 transition-all shadow-lg"
      >
        Login
      </button>

      <!-- Register link -->
      <p class="text-sm text-center text-white drop-shadow">
        Don't have an account?
        <a class="underline" href="/register">Register here</a>.
      </p>
    </form>
  </div>
</div>



    
</x-comp>