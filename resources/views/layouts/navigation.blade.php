<aside class="z-20 hidden w-64 overflow-y-auto bg-white md:block flex-shrink-0 border">
    <div class="py-4 text-indigo-900">
        <a class="ml-6 text-lg font-bold" href="{{ route('dashboard') }}">
            Koperasi Jaya

        </a>

        <ul class="mt-6">
            @can('admin')
            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-blue-200 {{ request()->routeIs('admin.index') ? 'bg-blue-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('admin.index') }}" :active="request()->routeIs('admin.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </x-slot>
                    {{ __('Dashboard') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-blue-200 {{ request()->routeIs('products.index') ? 'bg-blue-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('products.index') }}" :active="request()->routeIs('products.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M6 2L3 6v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6l-3-4H6zM3.8 6h16.4M16 10a4 4 0 1 1-8 0" />
                        </svg>
                    </x-slot>
                    {{ __('Products') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-blue-200 {{ request()->routeIs('users.index') ? 'bg-blue-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </x-slot>
                    {{ __('Anggota') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-blue-200 {{ request()->routeIs('pos.index') ? 'bg-blue-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('pos.index') }}" :active="request()->routeIs('pos.index')">
                    <x-slot name="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="10" cy="20.5" r="1" />
                            <circle cx="18" cy="20.5" r="1" />
                            <path d="M2.5 2.5h3l2.7 12.4a2 2 0 0 0 2 1.6h7.7a2 2 0 0 0 2-1.6l1.6-8.4H7.1" />
                        </svg>
                    </x-slot>
                    {{ __('POS') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-blue-200 {{ request()->routeIs('#') ? 'bg-blue-100 rounded-md' : '' }}">
                <x-nav-link href="#" :active="request()->routeIs('#')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </x-slot>
                    {{ __('Sales History') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-blue-200 {{ request()->routeIs('#') ? 'bg-blue-100 rounded-md' : '' }}">
                <x-nav-link href="#" :active="request()->routeIs('#')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </x-slot>
                    {{ __('Purchase History') }}
                </x-nav-link>
            </li>
            @endcan
            @can('user')
            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-blue-200 {{ request()->routeIs('#') ? 'bg-blue-100 rounded-md' : '' }}">
                <x-nav-link href="#" :active="request()->routeIs('#')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </x-slot>
                    {{ __('History Pembelian') }}
                </x-nav-link>
            </li>

            <li class="relative px-6 py-3 rounded-md transition duration-300 ease-in-out hover:bg-blue-200 {{ request()->routeIs('shu.index') ? 'bg-blue-100 rounded-md' : '' }}">
                <x-nav-link href="{{ route('shu.index') }}" :active="request()->routeIs('shu.index')">
                    <x-slot name="icon">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01"></path>
                        </svg>
                    </x-slot>
                    {{ __('SHU') }}
                </x-nav-link>
            </li>
            @endcan
            <!-- <li class="relative px-6 py-3">
                <button class="inline-flex items-center justify-between w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200" @click="toggleMultiLevelMenu" aria-haspopup="true">
                    <span class="inline-flex items-center">
                        <svg class="w-5 h-5" aria-hidden="true" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                        </svg>
                        <span class="ml-4">Sales</span>
                    </span>
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <template x-if="isMultiLevelMenuOpen">
                    <ul x-transition:enter="transition-all ease-in-out duration-300" x-transition:enter-start="opacity-25 max-h-0" x-transition:enter-end="opacity-100 max-h-xl" x-transition:leave="transition-all ease-in-out duration-300" x-transition:leave-start="opacity-100 max-h-xl" x-transition:leave-end="opacity-0 max-h-0" class="p-2 mt-2 space-y-2 overflow-hidden text-sm font-medium text-gray-500 rounded-md shadow-inner" aria-label="submenu">
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-800">
                            <a class="w-full" href="#">Cashier</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-800">
                            <a class="w-full" href="#">History</a>
                        </li>
                        <li class="px-2 py-1 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-800">
                            <a class="w-full" href="#">Purchase</a>
                        </li>
                    </ul>
                </template>
            </li> -->
        </ul>
    </div>
</aside>