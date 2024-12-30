<x-layout-guest page-title="Recuperar senha">
<div class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white shadow-md rounded-lg w-full max-w-md p-8">
    <h2 class="text-2xl font-bold text-gray-800 text-center">Reset Password</h2>
    <form action="{{ route('password.update') }}" method="POST" class="mt-6">
      @csrf
      <input type="hidden" name="token" value="{{ $request->route('token') }}">

      <!-- Email -->
      <div class="mb-4">
        <label for="email" class="block text-gray-700 font-medium">Email Address</label>
        <input 
          type="email" 
          id="email" 
          name="email" 
          value="{{ old('email') }}" 
          required 
          class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        @error('email')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- Password -->
      <div class="mb-4">
        <label for="password" class="block text-gray-700 font-medium">New Password</label>
        <input 
          type="password" 
          id="password" 
          name="password" 
          required 
          class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
        @error('password')
          <span class="text-red-500 text-sm">{{ $message }}</span>
        @enderror
      </div>

      <!-- Confirm Password -->
      <div class="mb-4">
        <label for="password_confirmation" class="block text-gray-700 font-medium">Confirm Password</label>
        <input 
          type="password" 
          id="password_confirmation" 
          name="password_confirmation" 
          required 
          class="w-full mt-2 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
        >
      </div>

      <!-- Submit -->
      <button 
        type="submit" 
        class="w-full bg-blue-500 text-white font-semibold py-2 rounded-md hover:bg-blue-600 transition"
      >
        Reset Password
      </button>
    </form>
  </div>
</div>
</x-layout-guest>