<x-layout>
   

            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register">
            <div class="mb-6">
                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>

                <input type="text" name="username" id="username" required class="border border-gray-400 p-2 w-full">
                @error('username')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                @enderror
            </div>
            </form>
    
        
  
</x-layout>