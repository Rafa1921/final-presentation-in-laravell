<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">

                    <form action="/edit-user/{{$user->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="name" value="Name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input id="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" value="{{$user->name}}"/>
                        </div>
            
                        <div class="mt-3">
                            <label for="email" value="Email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input id="email" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" value="{{$user->email}}"/>
                        </div>

                        <div class="mt-3">
                            <label for="age" value="Age" class="block text-sm font-medium text-gray-700">Age</label>
                            <input id="age" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="number" name="age" value="{{$user->age}}"/>
                        </div>

                        <div class="mt-3">
                            <label for="address" value="Address" class="block text-sm font-medium text-gray-700">Address</label>
                            <input id="address" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="address" value="{{$user->address}}"/>
                        </div>

                        <div class="mt-3">
                            <label for="phone" value="Phone" class="block text-sm font-medium text-gray-700">Phone</label>
                            <input id="phone" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="phone" value="{{$user->phone}}"/>
                        </div>

                        <div class="mt-3">
                            <label for="contract" value="Contract" class="block text-sm font-medium text-gray-700">Contract</label>
                            <input id="contract" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="contract" value="{{$user->contract}}"/>
                        </div>

                        <div class="mt-6 flex justify-end">
            
                            <button class="inline-flex items-center px-4 py-2 bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                                Update User
                            </button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>
</x-app-layout>
