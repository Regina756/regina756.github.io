<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>




<div class="min-h-screen flex items-center justify-center bg-gray-100 px-4">
  <div class="bg-white p-8 rounded-xl shadow-md w-full max-w-md">
    
    <!-- Heading -->
    <h1 class="text-2xl font-bold text-center text-[#0285FF] mb-6">Forgot Password</h1>

    <!-- Form -->
    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
      @csrf

      <!-- Email Input -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
        <input 
          type="email" 
          autocomplete="off"
          name="email"
          id="email" 
          required 
          placeholder="you@example.com"
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0285FF] focus:border-[#0285FF] transition"
        />
      </div>

      <!-- Submit Button -->
      <button 
        type="submit" 
        class="w-full py-2 bg-[#0285FF] text-white font-semibold rounded-lg hover:bg-blue-700 transition"
      >
        Send Password Reset Link
      </button>
    </form>

    <!-- Back to login -->
    <div class="text-center mt-5">
      <a href="/login" class="text-sm text-[#0285FF] underline hover:text-blue-700 transition">
        Back to Login
      </a>
    </div>
  </div>
</div>

    
</body>
</html>
