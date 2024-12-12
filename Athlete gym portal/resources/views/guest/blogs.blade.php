<x-app-layout>
    <x-slot name="header">
        <div  class="d-flex d-flex-row justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Blogs') }}
            </h2>
            <a href="/add-blog" class="float-right btn btn-primary ml-2 me-2">Create Blog Post</a>
        </div>

    </x-slot>

    <section class="">
    <div class="container mt-6">
            @if(session('notification'))
                <div class="w-full alert alert-success">{{session('notification')}}</div>
            @endif
            <div class="container text-center">
            <div class="blogs justify-center">

            @foreach ($blogs as $blog)
            <?php             
                $blogUrl = "blog" . "/" . $blog->id
            ?>


                <div class="card mb-5 mt-5 cursor-pointer" onclick=" window.location = '{{ url($blogUrl) }}';">
                    <div class="card-body d-flex flex-col justify-between">
                                <div class="d-flex flex-col blogs-header">
                                    <img src="{{$blog->blogImg}}" class="img rounded-1 img-fluid h-5" />
                                    <p class="fw-bold text-start mt-2"> {{ $blog->blogTitle }}</p>
                                </div>
                                <div class="d-flex flex-col">
                                    <hr >
                                    <div class="d-flex flex-row justify-between">
                                        <p>
                                            {{ $blog->user->name }}
                                        </p>
                                        <p class="text-secondary">{{ $blog->created_at->diffForHumans() }}</p>
                                </div>
                                </div>
                    </div>
                </div>


            @endforeach

            </div>
        </div>
            <div class="mx-5 mt-4 mb-10">
                {{ $blogs->links() }}
            </div>
        </div>

    </section>
</x-app-layout>
