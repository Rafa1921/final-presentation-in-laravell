<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('notification'))
                <div class="w-full alert alert-success">{{session('notification')}}</div>
            @endif
            <!-- Manage Active Users List - Start -->
            <h2 class="bg-white overflow-hidden shadow-xl font-bold text-gray-800 mt-10 rounded-lg px-2 py-2">Active Users</h2>

            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>       
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contract</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reviews Submitted</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php $i=1; ?>
                        @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $i++ }}</th>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->age }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->contract }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->reviewCount($user->id) }}</td>
                            <td class="py-4 whitespace-nowrap"><a type="button" class="btn btn-outline-warning" href="/edit-user/{{$user->id}}">Edit</a> </td>
                            <td class="py-4 whitespace-nowrap">
                                <form action="/archive-user/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-outline-secondary">Archive</button>
                                </form>
                                
                            </td>

                            <td class="py-4 whitespace-nowrap">
                                <form action="/delete-user/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-5 mt-4">
                    {{ $users->links() }}
                </div>
            </div>
            <!-- Manage Active Users List - End -->

            <h2 class="bg-white overflow-hidden shadow-xl font-bold text-gray-800 mt-10 rounded-lg px-2 py-2">Archived Users</h2>
            <!-- Manage Archived/Inactive Users List - Start -->
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mt-24">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>       
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Age</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Contract</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reviews Submitted</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider"></th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php $i=1; ?>
                        @foreach ($archived as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $i++ }}</th>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->age }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->contract }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->reviewCount($user->id) }}</td>
                            <td class="py-4 whitespace-nowrap"><a type="button" class="btn btn-outline-warning" href="/edit-user/{{$user->id}}">Edit</a> </td>
                            <td class="py-4 whitespace-nowrap">
                                <form action="/archive-user/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-outline-primary">Restore</button>
                                </form>
                                
                            </td>
                            <td class="py-4 whitespace-nowrap">
                                <form action="/delete-user/{{ $user->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-5 mt-4">
                    {{ $users->links() }}
                </div>
            </div>
            <!-- Manage Active Users List - End -->

        </div>
    </div>
</x-app-layout>
