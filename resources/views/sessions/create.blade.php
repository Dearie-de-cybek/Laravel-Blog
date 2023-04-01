<x-layout>
    @section('content')
    <section class="px-7 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-5 rounded-xl">
            <h1 class="text-center font-bold text-xl">Log In!</h1>

            <form method="POST" action="/login" class="mt-10">
                @csrf
                <div class="mb-6">
                    
                    <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>
                    <input type="email" name="email" id="email" required class="border border-gray-400 p-2 w-full" value="{{ old('email') }}">

                    <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">Password</label>
                    <input type="password" name="password" id="password" required class="border border-gray-400 p-2 w-full"> 
                </div>
                <div class="mb-6">
                    <button type="submit"
                    class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                        Log in
                    </button>
                </div>
             
            </form>
        </main>
    </section>
    @endsection
</x-layout>