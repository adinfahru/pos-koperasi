<header class="z-10 py-2 bg-white border-b" x-data="{ isNotificationMenuOpen: false, isProfileMenuOpen: false }">
    <div class="container flex justify-between items-center px-6 mx-auto h-full text-purple-600 md:justify-end">
        <!-- Mobile hamburger -->
        <button class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple" @click="toggleSideMenu" aria-label="Menu">
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Notification Dropdown -->
        @can('manager')
            @if($lowStockProducts->isNotEmpty())
                <div class="relative" @click.away="isNotificationMenuOpen = false">
                    <button class="relative z-10 block p-2 bg-red-600 text-white rounded-full focus:outline-none" @click="isNotificationMenuOpen = !isNotificationMenuOpen">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.5V11a6 6 0 10-12 0v3.5c0 .638-.252 1.243-.672 1.695L4 17h5m0 0v1a3 3 0 006 0v-1m-6 0h6"></path>
                        </svg>
                        <span class="absolute top-0 right-0 block h-2 w-2 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full"></span>
                    </button>
                    <div x-show="isNotificationMenuOpen" class="absolute right-0 z-20 w-48 mt-2 py-2 bg-white border rounded-lg shadow-xl">
                        <ul>
                            @foreach($lowStockProducts as $product)
                                <li class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">{{ $product->name }}: {{ $product->stock }} left</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
        @endcan

        <x-dropdown>
            <x-slot name="trigger">
                <button class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none" 
                @click="isProfileMenuOpen = !isProfileMenuOpen" 
                @keydown.escape="isProfileMenuOpen = false" 
                aria-label="Account" 
                aria-haspopup="true"
                >
                <span class="font-semibold text-cyan-500 text-sm ml-4">{{ Auth::user()->name }}</span>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link href="{{ route('profile.edit') }}">
                    <x-slot name="icon">
                        <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </x-slot>
                    {{ __('Profile') }}
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                                     onclick="event.preventDefault(); this.closest('form').submit();">
                        <x-slot name="icon">
                            <svg class="mr-3 w-4 h-4" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"></path>
                            </svg>
                        </x-slot>
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</header>

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdown', () => ({
            isNotificationMenuOpen: false,
            isProfileMenuOpen: false,
            toggleNotificationMenu() {
                this.isNotificationMenuOpen = !this.isNotificationMenuOpen;
            },
            closeNotificationMenu() {
                this.isNotificationMenuOpen = false;
            },
            toggleProfileMenu() {
                this.isProfileMenuOpen = !this.isProfileMenuOpen;
            },
            closeProfileMenu() {
                this.isProfileMenuOpen = false;
            }
        }));
    });
</script>

