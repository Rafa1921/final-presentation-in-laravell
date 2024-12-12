<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('notification'))
                <div class="w-full alert alert-success">{{session('notification')}}</div>
            @endif
            <div></div>
            <h2 class="bg-white overflow-hidden shadow-xl font-bold text-gray-800 mt-10 rounded-lg px-2 py-2">Recently Created Accounts</h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>         
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User ID</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Reviews Submitted</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Created At</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach ($users as $user)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $i++ }}</th>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->email }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ ucwords($user->usertype) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->reviewCount($user->id) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mx-5 mt-4">
                    {{ $users->links() }}
                </div>

                <div class="mt-6 flex justify-end">
            
                    <a href="/created-accounts" class="inline-flex items-center px-4 py-2 mx-4 my-4 text-decoration-none bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                        See All Results
                    </a>
                </div>
            </div>


            <h2 class="bg-white overflow-hidden shadow-xl font-bold text-gray-800 mt-10 rounded-lg px-2 py-2">Recent Website Reviews</h2>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-20">
                
                @foreach ($reviews as $review)
                <div class="card mx-4 my-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2 mt-2 mr-4">
                                @if(empty($review->user->profile_photo_url) || is_null($review->user->profile_photo_url) )
                                <img src="https://image.ibb.co/jw55Ex/def_face.jpg"
                                    class="img img-rounded img-fluid mb-4" />
                                @else
                                <img src="{{ $review->user->profile_photo_url }}" alt="{{ $review->user->profile_photo_url }}"
                                    class="img img-rounded img-fluid mb-4" />
                                @endif

                                    
                                <p class="text-secondary text-center">{{ $review->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="col-md-10">
                                <p>
                                    <a class="float-left"
                                        href="#"><strong>{{ $review->user->name }}</strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                </p>
                                <div class="clearfix"></div>
                                <p> {{ $review->comment }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="mt-6 flex justify-end">
            
                    <a href="/manage-reviews" class="inline-flex items-center px-4 py-2 mx-4 my-4 text-decoration-none bg-blue-500 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest shadow-sm hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 transition ease-in-out duration-150">
                        Manage Reviews
                    </a>
                </div>
            </div>


        </div>
    </div>
</x-app-layout>
