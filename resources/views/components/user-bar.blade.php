<div class="w-full bg-white rounded-lg flex items-center justify-between px-6 py-4">
    <!-- User Information -->
    <div class="flex items-center space-x-4">
        <!-- User Avatar -->
        <div class="w-12 h-12">
        <img src="https://via.placeholder.com/150" alt="User Avatar" class="rounded-full w-full h-full object-cover">
        </div>
        <!-- User Details -->
        <div>
        <h2 class="text-lg font-semibold text-gray-800">{{auth()->user()->name}}</h2>
        <p class="text-sm text-gray-500">{{auth()->user()->email}}</p>
        </div>
    </div>
    <!-- User Actions -->
    <div class="flex items-center space-x-4">
    <!-- Profile Link -->
    <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
        Profile
    </a>

    <!-- Logout Form -->
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit" class="bg-gray-300 text-gray-700 px-4 py-2 rounded-md hover:bg-gray-400 transition">
            Logout
        </button>
    </form>
</div>

</div>