<x-layout>
    <x-slot:title>
        Log in
    </x-slot:title>
    <x-slot:heading>
        Log in to your account
    </x-slot:heading>
    <div class="min-h-full">
    <form method="post" action="/login" class="h-full p-2">
    @csrf
    <div class="sm:col-span-3">
                        <label for="last-name" class="block text-sm font-medium leading-6 text-gray-900 mt-5">Phone</label>
                        <div class="mt-3">
                            <input type="text" name="phone" id="phone" autocomplete="family-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                        </div>
                        @error('phone')
<p>{{$message}}</p>
                        @enderror
                    </div>


                    <div class="sm:col-span-3 mt-3">
                        <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-5">
                            <input type="password" name="password" id="password" autocomplete="given-name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
                        </div>
                        @error('pass')
<p>{{$message}}</p>
                        @enderror
                    </div>


                    <div class="mt-6 flex items-center  gap-x-6">
                    <button type="submit"
                        class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Forget Password</button>
                
                    <button type="submit"
                        class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Log In</button>
                </div>
    </form>
    </div>
</x-layout>