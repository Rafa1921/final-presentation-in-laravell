<x-app-layout>
    <x-slot name="header">
        <div  class="d-flex d-flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Blog') }}
            </h2>
        </div>

    </x-slot>

    <section class="pb-4">
    <div class="container mt-6  bg-white rounded-3 px-4 py-5">
            @if(session('notification'))
                <div class="w-full alert alert-success">{{session('notification')}}</div>
            @endif
                <div class="blog-container mb-5">
                
                    <div class="d-flex flex-col justify-between border-bottom pb-2">
                        <div class="d-flex flex-row justify-between">

                            <h1 class="blog-title">{{$blog->blogTitle}}</h1>


                            @if($blog->user_id == $auth[0] || $auth[1] == "admin")
                            <div class="dropdown">
                                <a class="btn " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa-solid fa-ellipsis-vertical pt-2 cursor-pointer"></i>

                                </a>

                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/edit-blog/{{$blog->id}}">Edit</a></li>
                                    <li>
                                    <form action="/delete-blog/{{ $blog->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <li><button type="submit" class="dropdown-item text-danger">Delete</button></li>
                                     </form>
                                    </li>
                                </ul>
                            </div>
                            @endif
                        </div>
                        <div class="d-flex flex-row justify-between">
                            <p class="text-secondary">Posted by <span class="text-black opacity-40">{{$blog->user->name}}</span></p>
                            <p class="text-secondary">Publihsed <span class="text-black opacity-40">{{ $blog->created_at->diffForHumans() }}</span></p>
                            
                        </div>
                    </div>


                    <div class="d-flex flex-col justify-between items-center mt-4">
                        <img src=' {{url($blog->blogImg)}} ' alt="Blog Image" class="img img-rounded img-fluid blog-image rounded-2" />
                        <div class="relative shadow ">
                            <div class="bg-white rounded-top-4 z-3 blog-desc d-flex flex-col justify-between">
                                <p class="preserveLines lh-lg">{{ $blog->blogDescription }}</p>

                                <p class="text-secondary italic">Last updated {{ $blog->updated_at->diffForHumans() }}</span></p>
                            </div>
                        </div>
                    </div>
                </div>

        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</x-app-layout>
