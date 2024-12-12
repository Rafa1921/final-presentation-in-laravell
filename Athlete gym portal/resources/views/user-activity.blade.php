<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Activity') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">IP Address</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Activity</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <?php $i=1; ?>
                        @foreach ($sessions as $session)
                        <tr>
                            <?php 
                                $epoch = $session->last_activity; 
                                $dateFormat = date("Y-m-d H:i:s", substr($epoch, 0, 10));
                            ?>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $i++ }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $session->user_id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ ($session->user == null? "Deleted User"  : $session->user->email)  }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $session->ip_address }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $dateFormat }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>