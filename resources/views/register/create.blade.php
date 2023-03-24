<x-layout>
   
@section('content')
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <main class="max-w-lg mx-auto mt-10 bg-gray-100 p-6 border border-gray-200 rounded-xl">

                <form method="POST" action="/register" class="mt-10">
                    <div class="mb-6">
                        <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>
                        <input type="text" name="name" id="name" required class="border border-gray-400 p-2 w-full">
                        
                        <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>
                        <input type="text" name="username" id="username" required class="border border-gray-400 p-2 w-full">

                        <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                        <input type="password" name="password" id="password" required class="border border-gray-400 p-2 w-full"> 
                    </div>
                    <div class="mb-6">
                        <button type="submit"
                        class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                            Submit
                        </button>
                    </div>
                </form>
            </main>

           
    
@endsection
  
</x-layout>