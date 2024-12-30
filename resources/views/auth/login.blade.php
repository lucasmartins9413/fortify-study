<x-layout-guest page-title="Login">
    <div class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-sm">
    <h2 class="text-2xl font-bold text-center text-gray-700 mb-6">Login</h2>
    <form action="{{route('login')}}" method="post">
      @csrf
      <div class="mb-4">
        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email</label>
        <input name="email" type="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('email')
            <p>{{$message}}</p>          
        @enderror
      </div>
      <div class="mb-6">
        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">Password</label>
        <input name="password" type="password" id="password" placeholder="Enter your password" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('password')
            <p>{{$message}}</p>          
        @enderror
      </div>
      <div class="flex items-center justify-between mb-6">
        <label class="flex items-center text-sm text-gray-600">
          <input type="checkbox" class="mr-2">
          Remember me
        </label>
        <a href="{{route('password.request')}}" class="text-sm text-blue-500 hover:underline">Forgot password?</a>
      </div>
      <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition">Login</button>
    </form>
    <p class="text-sm text-gray-600 text-center mt-6">
      Don't have an account? <a href="#" class="text-blue-500 hover:underline">Sign up</a>
    </p>
  </div>
  </div>
</x-layout-guest>