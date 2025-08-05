


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

    <h1 class="text-2xl font-bold text-center text-[#0285FF] mb-6">Reset Your Password</h1>

    <form method="POST" action="{{ route('password.update') }}" class="space-y-5">
      @csrf

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
        <input 
          type="email" 
          name="email" 
          id="email" 
          value="{{ old('email') }}" 
          required 
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0285FF] focus:border-[#0285FF]"
          placeholder="you@example.com"
        />
      </div>

      <!-- New Password -->
      <div>
        <label for="password" class="block text-sm font-medium text-gray-700 mb-1">New Password</label>
        <input 
          type="password" 
          name="password" 
          id="password" 
          required 
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0285FF] focus:border-[#0285FF]"
          placeholder="New password"
        />
      </div>

      <!-- Confirm Password -->
      <div>
        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
        <input 
          type="password" 
          name="password_confirmation" 
          id="password_confirmation" 
          required 
          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#0285FF] focus:border-[#0285FF]"
          placeholder="Confirm password"
        />
      </div>

      <!-- Submit Button -->
      <button 
        type="submit" 
        class="w-full bg-[#0285FF] text-white py-2 rounded-lg font-semibold hover:bg-blue-700 transition duration-300"
      >
        Reset Password
      </button>
    </form>

    <!-- Back to login -->
    <div class="text-center mt-5">
      <a href="/login" class="text-sm text-[#0285FF] underline hover:text-blue-700 transition">Back to Login</a>
    </div>

  </div>
</div>



</body>
</html>
