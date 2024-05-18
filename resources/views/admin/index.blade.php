<x-app-layout>
    <body>
        <!-- Header -->
        <h1 class="mx-10 pt-10 text-3xl font-bold text-left rtl:text-right text-gray-900 dark:text-black">Dashboard</h1>
        <h2 class="mx-10 pt-2 text-base font-regular text-left rtl:text-right text-gray-500">Dashboard Pembelian dan Penjualan</h2>
        <!-- Main -->
        <div class="mt-5 flex justify-center">
                <div
                    class="mx-3 my-5 w-[350px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
                    >
                    <div
                        class="flex flex-col items-center p-8 rounded-md w-full sm:px-12 bg-gray-100 text-gray-900"
                    >
                        <div class="text-center">
                        <h2 class="text-xl font-semibold">Anggota Koperasi</h2>
                        <p class="text-sm text-gray-400">Total Anggota Koperasi</p>
                        </div>
                        <svg
                        class="w-32 h-32 p-6 -red-400 fill-current animate-[spin_5s_linear_infinite;]"
                        viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M256,104c-83.813,0-152,68.187-152,152s68.187,152,152,152,152-68.187,152-152S339.813,104,256,104Zm0,272A120,120,0,1,1,376,256,120.136,120.136,0,0,1,256,376Z"
                        ></path>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="16"
                            x="240"
                            height="48"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="448"
                            x="240"
                            height="48"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="240"
                            x="448"
                            height="32"
                            width="48"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="240"
                            x="16"
                            height="32"
                            width="48"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 416 416)"
                            y="393.373"
                            x="400"
                            height="45.255"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 96 96)"
                            y="73.373"
                            x="80"
                            height="45.255"
                            width="32.001"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45.001 96.002 416.003)"
                            y="400"
                            x="73.373"
                            height="32"
                            width="45.255"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 416 96)"
                            y="80"
                            x="393.373"
                            height="32.001"
                            width="45.255"
                        ></rect>
                        </svg>
                        <div class="mb-2 text-3xl font-semibold">
                            {{$users->count()}}
                        </div>
                    </div>
                </div>
                <div
                    class="mx-3 my-5 w-[350px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
                    >
                    <div
                        class="flex flex-col items-center p-8 rounded-md w-full sm:px-12 bg-gray-100 text-gray-900"
                    >
                        <div class="text-center">
                        <h2 class="text-xl font-semibold">Transaksi</h2>
                        <p class="text-sm text-gray-400">Total Transaksi Anggota</p>
                        </div>
                        <svg
                        class="w-32 h-32 p-6 -red-400 fill-current animate-[spin_5s_linear_infinite;]"
                        viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M256,104c-83.813,0-152,68.187-152,152s68.187,152,152,152,152-68.187,152-152S339.813,104,256,104Zm0,272A120,120,0,1,1,376,256,120.136,120.136,0,0,1,256,376Z"
                        ></path>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="16"
                            x="240"
                            height="48"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="448"
                            x="240"
                            height="48"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="240"
                            x="448"
                            height="32"
                            width="48"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="240"
                            x="16"
                            height="32"
                            width="48"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 416 416)"
                            y="393.373"
                            x="400"
                            height="45.255"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 96 96)"
                            y="73.373"
                            x="80"
                            height="45.255"
                            width="32.001"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45.001 96.002 416.003)"
                            y="400"
                            x="73.373"
                            height="32"
                            width="45.255"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 416 96)"
                            y="80"
                            x="393.373"
                            height="32.001"
                            width="45.255"
                        ></rect>
                        </svg>
                        <div class="mb-2 text-3xl font-semibold">
                            {{$transactions->count( )}}
                        </div>
                    </div>
                </div>
                <div
                    class="mx-3 my-5 w-[350px] aspect-video rounded-lg shadow flex flex-col items-center justify-center gap-2 bg-slate-50 group"
                    >
                    <div
                        class="flex flex-col items-center p-8 rounded-md w-full sm:px-12 bg-gray-100 text-gray-900"
                    >
                        <div class="text-center">
                        <h2 class="text-xl font-semibold">Produk</h2>
                        <p class="text-sm text-gray-400">Total Produk Koperasi</p>
                        </div>
                        <svg
                        class="w-32 h-32 p-6 -red-400 fill-current animate-[spin_5s_linear_infinite;]"
                        viewBox="0 0 512 512"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                            d="M256,104c-83.813,0-152,68.187-152,152s68.187,152,152,152,152-68.187,152-152S339.813,104,256,104Zm0,272A120,120,0,1,1,376,256,120.136,120.136,0,0,1,256,376Z"
                        ></path>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="16"
                            x="240"
                            height="48"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="448"
                            x="240"
                            height="48"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="240"
                            x="448"
                            height="32"
                            width="48"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            y="240"
                            x="16"
                            height="32"
                            width="48"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 416 416)"
                            y="393.373"
                            x="400"
                            height="45.255"
                            width="32"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 96 96)"
                            y="73.373"
                            x="80"
                            height="45.255"
                            width="32.001"
                        ></rect>
                        <rect
                            class="animate-[pulse_1s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45.001 96.002 416.003)"
                            y="400"
                            x="73.373"
                            height="32"
                            width="45.255"
                        ></rect>
                        <rect
                            class="animate-[pulse_2s_cubic-bezier(0.4,_0,_0.6,_1)_infinite;]"
                            transform="rotate(-45 416 96)"
                            y="80"
                            x="393.373"
                            height="32.001"
                            width="45.255"
                        ></rect>
                        </svg>
                        <div class="mb-2 text-3xl font-semibold">
                            {{$products->count()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</x-app-layout>