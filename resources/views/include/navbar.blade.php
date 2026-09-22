<!-- clickIt header -->
<section id="clickIt-header" class="sticky top-0 z-10 bg-white shadow">
    <!-- HEADER BAR -->
    <div class="flex items-center justify-between p-4 md:grid md:grid-cols-4">


        <!-- LOGO -->
        <div class="flex items-center justify-between w-full md:w-auto">
            <h1 class="text-4xl md:text-5xl font-extrabold animate-bounce">
                <a href="/">
                    <span class="text-yellow-500">Click</span>
                    <span class="text-green-500">IT</span>
                </a>
            </h1>

            <!-- MOBILE TOGGLER -->
            <button id="menu-btn"
                class="md:hidden text-3xl text-gray-700 hover:text-green-500 transition"
                onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                ☰
            </button>
        </div>

        <!-- DELIVERY (DESKTOP) -->
        <div class="hidden md:flex items-center">
            <button type="button"
                command="show-modal"
                commandfor="dialog2"
                class="text-lg font-medium text-gray-700 hover:text-green-600 transition">
                🚚 Delivery in 8 minutes
            </button>
        </div>

        <!-- SEARCH (DESKTOP) -->
        <div class="hidden md:flex px-4">
            <input type="text"
                placeholder="Search products here..."
                class="border-2 border-gray-300 rounded-3xl w-full p-2.5 px-5
                       focus:outline-none focus:border-green-500 transition">
        </div>

        <!-- LOGIN & CART (DESKTOP) -->
        <div class="hidden md:flex gap-4 items-center justify-end">

            @if (Auth::check())

                <!-- USER DROPDOWN -->
                <div class="relative group">

                    <button type="button"
                        class="flex items-center gap-2 text-lg font-bold text-gray-700
                               hover:text-green-600 transition">
                        <span class="bi bi-person-circle text-xl"></span>
                        {{ Auth::user()->name }}
                        <span class="text-xs">▼</span>
                    </button>

                    <!-- DROPDOWN -->
                    <div
                        class="absolute right-0 top-full mt-2 w-64 bg-white border border-gray-200
                               rounded-2xl shadow-xl overflow-hidden
                               opacity-0 invisible translate-y-2
                               group-hover:opacity-100 group-hover:visible group-hover:translate-y-0
                               transition-all duration-200 z-50">

                        <div class="px-5 py-4 bg-gray-50 border-b border-gray-200">
                            <p class="font-bold text-gray-800 text-base">
                                {{ Auth::user()->name }}
                            </p>

                            <p class="text-sm text-gray-500 truncate">
                                {{ Auth::user()->email }}
                            </p>

                            <p class="text-xs text-gray-400 mt-1">
                                User ID: #{{ Auth::user()->id }}
                            </p>
                        </div>

                        <div class="p-2">
                            <a href="#"
                                class="flex items-center gap-3 px-4 py-3 rounded-xl
                                       text-gray-700 hover:bg-gray-100 transition">
                                <span class="bi bi-person"></span>
                                My Profile
                            </a>

                            <a href="/orders"
                                class="flex items-center gap-3 px-4 py-3 rounded-xl
                                       text-gray-700 hover:bg-gray-100 transition">
                                <span class="bi bi-bag"></span>
                                My Orders
                            </a>

                            <form action="{{ URL('/logout') }}" method="POST">
                                @csrf
                                <button type="submit"
                                    class="w-full flex items-center gap-3 px-4 py-3 rounded-xl
                                           text-red-500 hover:bg-red-50 transition">
                                    <span class="bi bi-box-arrow-right"></span>
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

            @else

                <!-- LOGIN -->
                <a href="{{ URL('/login') }}"
                    class="flex items-center gap-2 text-lg font-bold text-gray-700
                           hover:text-green-600 transition">
                    <span class="bi bi-person"></span>
                    Login
                </a>

            @endif

            <!-- CART -->
            <button type="button"
                class="px-4 py-3 bg-gray-500 hover:bg-gray-600 rounded-2xl
                       text-white font-bold transition">
                <span class="bi bi-cart3 mr-1"></span>
                My Cart
            </button>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobile-menu"
        class="hidden md:hidden border-t border-gray-200 bg-white p-4 space-y-4">

        <!-- DELIVERY -->
        <button type="button"
            command="show-modal"
            commandfor="dialog2"
            class="w-full text-left text-lg font-medium text-gray-700
                   hover:text-green-600 transition">
            🚚 Delivery in 8 minutes
        </button>

        <!-- SEARCH -->
        <input type="text"
            placeholder="Search products here..."
            class="border-2 border-gray-300 rounded-3xl w-full p-2.5 px-5
                   focus:outline-none focus:border-green-500 transition">

        <!-- USER / LOGIN -->
        @if (Auth::check())

            <div class="border border-gray-200 rounded-2xl overflow-hidden">

                <div class="px-4 py-3 bg-gray-50">
                    <p class="font-bold text-gray-800">
                        {{ Auth::user()->name }}
                    </p>

                    <p class="text-sm text-gray-500">
                        {{ Auth::user()->email }}
                    </p>

                    <p class="text-xs text-gray-400 mt-1">
                        User ID: #{{ Auth::user()->id }}
                    </p>
                </div>

                <div class="p-2">
                    <a href="#"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl
                               hover:bg-gray-100">
                        <span class="bi bi-person"></span>
                        My Profile
                    </a>

                    <a href="/orders"
                        class="flex items-center gap-3 px-3 py-2.5 rounded-xl
                               hover:bg-gray-100">
                        <span class="bi bi-bag"></span>
                        My Orders
                    </a>

                    <form action="{{ URL('/logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="w-full flex items-center gap-3 px-3 py-2.5 rounded-xl
                                   text-red-500 hover:bg-red-50">
                            <span class="bi bi-box-arrow-right"></span>
                            Logout
                        </button>
                    </form>
                </div>
            </div>

        @else

            <a href="{{ URL('/login') }}"
                class="flex items-center gap-2 text-lg font-bold
                       text-gray-700 hover:text-green-600">
                <span class="bi bi-person"></span>
                Login
            </a>

        @endif

        <!-- CART -->
        <button type="button"
            class="w-full p-3 bg-gray-500 hover:bg-gray-600 rounded-2xl
                   text-white font-bold transition">
            <span class="bi bi-cart3 mr-1"></span>
            My Cart
        </button>

    </div>
</section>