<x-layout-guest page-title="Recuperar senha">
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white shadow-md rounded-lg w-full max-w-md p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center">Forgot Password</h2>
    <p class="text-sm text-gray-600 mt-2 text-center">
      Enter your email address and we'll send you a link to reset your password.
    </p>
    <form action="{{ route('password.email') }}" method="POST" class="mt-6">
      @csrf
      <!-- Email Input -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium">Email Address</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          required 
          placeholder="Enter your email"
          class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        @error('password')
            <p>{{$message}}</p>          
        @enderror
      </div>
      <!-- Submit Button -->
      <button 
        type="submit" 
        class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition"
      >
        Send Reset Link
      </button>
    </form>
    <!-- Back to Login -->
    <div class="mt-6 text-center">
      <a href="{{ route('login') }}" class="text-blue-500 hover:underline">
        Voltar para login
      </a>
    </div>
  </div>
</div>
</x-layout-guest>