<nav x-data="{ open: false }" class="bg-white border-b border-gray-100"> 
    <!-- Primary Navigation Menu -->
    <div class=" max-w-7xl mx-auto px-0 md:px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class=" relative flex justify-between">
                <!-- Logo -->
                <div class="shrink-0 flex items-center px-4 md:px-0">
                    <a href="{{ route('dashboard') }}" class="text-decoration-none">
                        <h1 class="fw-bolder text-black">MindGym</h1>
                    </a>

                    
                </div>

                <div class="nav-toggle w-100" :class="{'position-absolute flex flex-col px-0 opacity-100 bg-light vw-100 nav-open': open, 'md:flex md:h-auto md:opacity-100 nav-close': !open }">
                    <?php
                    // Fixed this line to prevent undefined array key errors
                    $urlSegments = explode("http://127.0.0.1:8000/", Request::url());
                    $urlTemp = isset($urlSegments[1]) ? $urlSegments[1] : ''; 
                    $url = explode("/", $urlTemp)[0];
                    ?>
                    @if ( $url === 'home' || $url === 'about' || $url === 'services' || $url === 'join' || $url === 'contact' || $url === 'blogs' || $url === 'blog')
                        @if(Auth::check() && auth()->user()->usertype == 'admin')
                        <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Dashboard') }}
                        </a>
                        @endif
                        <a href="{{ route('guest.home') }}" :active="request()->routeIs('guest.home')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Home') }}
                        </a>
                        <a href="{{ route('guest.blogs') }}" :active="request()->routeIs('guest.blogs')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Blogs') }}
                        </a>
                        <a href="{{ route('guest.about') }}" :active="request()->routeIs('guest.about')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('About Us') }}
                        </a>
                        <a href="{{ route('guest.services') }}" :active="request()->routeIs('guest.services')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Our Services') }}
                        </a>

                        <a href="{{ route('guest.join') }}" :active="request()->routeIs('guest.join')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Join Us') }}
                        </a>

                        <a href="{{ route('guest.contacts') }}" :active="request()->routeIs('guest.contacts')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Contact Us') }}
                        </a>
                        @if(!Auth::check())
                        <a class="text-black font-extrabold" href="{{ route('login') }}" :active="request()->routeIs('dashboard')"  class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Login') }}
                        </a>
                        @else
                        <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item nav-profile">
                            {{ __('Profile') }}
                        </a>
                        <div class="nav-profile mt-4">
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
    
                                <a href="{{ route('logout') }}" :active="request()->routeIs('logout')"  @click.prevent="$root.submit();" class="link-danger link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                                    {{ __('Logout') }}
                                </a>
                            </form>
                        </div>
                        @endif
                    @else
                        <a href="{{ route('guest.home') }}" :active="request()->routeIs('home')"  class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Gym Website') }}
                        </a>
                        <a href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Dashboard') }}
                        </a>
                        <a href="{{ route('manage-user') }}" :active="request()->routeIs('manage-user')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Manage Users') }}
                        </a>
                        <a href="{{ route('add-user') }}" :active="request()->routeIs('add-user')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Add User') }}
                        </a>
                        <a href="{{ route('user-activity') }}" :active="request()->routeIs('user-activity')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('User Activity') }}
                        </a>
                        <a href="{{ route('manage-reviews') }}" :active="request()->routeIs('manage-reviews')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                            {{ __('Manage Reviews') }}
                        </a>
                        <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" class="link-secondary text-black link-underline-opacity-0 link-underline-opacity-100-hover nav-item nav-profile">
                            {{ __('Profile') }}
                        </a>
                        <div class="nav-profile mt-4">
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf
    
                                <a href="{{ route('logout') }}" :active="request()->routeIs('logout')"  @click.prevent="$root.submit();" class="link-danger link-underline-opacity-0 link-underline-opacity-100-hover nav-item">
                                    {{ __('Logout') }}
                                </a>
                            </form>
                        </div>
                        
                    @endif
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <!-- Team Switcher -->
                                    @if (Auth::user()->allTeams()->count() > 1)
                                        <div class="border-t border-gray-200"></div>

                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Switch Teams') }}
                                        </div>

                                        @foreach (Auth::user()->allTeams() as $team)
                                            <x-switchable-team :team="$team" />
                                        @endforeach
                                    @endif
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                @if(Auth::check())
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button
                                    class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover"
                                        src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button"
                                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Manage Account') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}" @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endif
            </div>


            

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden px-4 md:px-0">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>
