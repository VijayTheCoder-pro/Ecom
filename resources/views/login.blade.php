@extends('master_layout.layout')

@section('title', 'Login')

@section('content')

{{-- flesh messages for login page --}}

    @if (session('success'))
        <div id="success-message" class="fixed top-5 right-5 z-50 bg-green-500 text-white px-5 py-3 rounded-lg shadow-lg">
            {{ session('success') }}
        </div>

        <script>
            setTimeout(() => {
                const message = document.getElementById('success-message');

                if (message) {
                    message.style.transition = 'opacity 0.5s ease';
                    message.style.opacity = '0';

                    setTimeout(() => {
                        message.remove();
                    }, 500);
                }
            }, 3000);
        </script>
    @endif
 
    @if (session('wrong'))
        <div id="wrong-message" class="fixed top-5 right-5 z-50 bg-red-500 text-white px-5 py-3 rounded-lg shadow-lg">
            {{ session('wrong') }}
        </div>

        <script>
            setTimeout(() => {
                const message = document.getElementById('wrong-message');

                if (message) {
                    message.style.transition = 'opacity 0.5s ease';
                    message.style.opacity = '0';

                    setTimeout(() => {
                        message.remove();
                    }, 500);
                }
            }, 3000);
        </script>
    @endif



    <section id="login-section" class="mt-0 p-5">
        <div class="flex justify-center items-center min-h-[80vh]">
            <div class="w-full max-w-md bg-white border border-gray-200 rounded-2xl shadow-md p-8">

                <div class="text-center mb-6">
                    <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Welcome Back</h1>
                    <p class="text-gray-500 mt-1">Login to continue shopping</p>
                </div>

                @if ($errors->any())
                    <div class="bg-red-50 border border-red-300 text-red-600 text-sm rounded-xl p-3 mb-4">
                        <ul class="list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status'))
                    <div class="bg-green-50 border border-green-300 text-green-600 text-sm rounded-xl p-3 mb-4">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ URL('/login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-1">Email Address</label>
                        <div class="relative">
                            <span class="bi bi-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></span>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required
                                autofocus placeholder="you@example.com"
                                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                    </div>

                    <div class="mb-2">
                        <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
                        <div class="relative">
                            <span class="bi bi-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></span>
                            <input type="password" id="password" name="password" required placeholder="••••••••"
                                class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
                        </div>
                    </div>

                    <div class="flex items-center justify-between mb-6 mt-3">
                        <label class="flex items-center gap-2 text-sm text-gray-600">
                            <input type="checkbox" name="remember"
                                class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                            Remember me
                        </label>

                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm text-green-600 font-semibold hover:underline">
                                Forgot password?
                            </a>
                        @endif
                    </div>

                    <button type="submit"
                        class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 rounded-xl transition duration-200">
                        Login
                    </button>
                </form>

                <p class="text-center text-gray-500 text-sm mt-6">
                    Don't have an account?
                    <a href="{{ URL('/registration') }}" class="text-green-600 font-semibold hover:underline">Register
                        here</a>
                </p>

            </div>
        </div>
    </section>

@endsection
