<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Manage Reviews') }}
        </h2>
    </x-slot>

    <section class="">

        <div class="container mt-6">
            @if(session('notification'))
                <div class="w-full alert alert-success">{{session('notification')}}</div>
            @endif
            @foreach ($reviews as $review)
                <div class="card mb-5 mt-5">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <img src=" {{$review->user->profile_photo_url}} " class="img img-rounded img-fluid" />
                                <p class="text-secondary text-center">{{ $review->created_at->diffForHumans() }}</p>
                            </div>
                            <div class="col-md-10">`    
                                <p>
                                    <a class="float-left" href="#"><strong>{{ $review->user->name }}</strong></a>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                                    <span class="float-right"><i class="text-warning fa fa-star"></i></span>

                                </p>
                                <div class="clearfix"></div>
                                <p> {{ $review->comment }}</p>


                                <div class="mt-6 flex justify-end">
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <form action="/edit-review/{{ $review->id }}" method="POST">
                                            @csrf
                                            @method('PUT')

                                            @if ($review->isFeatured == 1)
                                                <input id="usertype" class="t-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="hidden" name="isFeatured" value="0"/>
                                                <button class="float-right btn btn-success ml-2 me-2">Featured</button>
                                            
                                            @else 
                                                <input id="isFeatured" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="hidden" name="isFeatured" value="1"/>
                                                <button class="float-right btn btn-outline-primary ml-2 me-2">Feature This Review</button>
                                            
                                            @endif
                                        </form>
                                        <span class="spacer"></span>
                                        <form action="/delete-review/{{ $review->id }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="float-right btn text-white btn-danger">Delete</button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="mx-5 mt-4 mb-10">
                {{ $reviews->links() }}
            </div>
        </div>

    </section>
</x-app-layout>
