@extends('master_layout.layout')

@section('title','Register')

@section('content')

<section id="register-section" class="mt-0 p-5">
    <div class="flex justify-center items-center min-h-[80vh]">
        <div class="w-full max-w-md bg-white border border-gray-200 rounded-2xl shadow-md p-8">

            <div class="text-center mb-6">
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Create Account</h1>
                <p class="text-gray-500 mt-1">Sign up to start shopping</p>
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

            <form method="POST" action="{{ URL('/registration') }}">
                @csrf

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-semibold mb-1">Full Name</label>
                    <div class="relative">
                        <span class="bi bi-person absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></span>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                            placeholder="Your full name"
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-semibold mb-1">Email Address</label>
                    <div class="relative">
                        <span class="bi bi-envelope absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></span>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            placeholder="you@example.com"
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="phone" class="block text-gray-700 font-semibold mb-1">Mobile Number</label>
                    <div class="relative">
                        <span class="bi bi-telephone absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></span>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required
                            placeholder="10 digit mobile number"
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-semibold mb-1">Password</label>
                    <div class="relative">
                        <span class="bi bi-lock absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></span>
                        <input type="password" id="password" name="password" required
                            placeholder="••••••••"
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700 font-semibold mb-1">Confirm Password</label>
                    <div class="relative">
                        <span class="bi bi-lock-fill absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></span>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            placeholder="••••••••"
                            class="w-full pl-10 pr-3 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>

                <button type="submit"
                    class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-3 rounded-xl transition duration-200">
                    Create Account
                </button>
            </form>

            <p class="text-center text-gray-500 text-sm mt-6">
                Already have an account?
                <a href="{{ URL('/login') }}" class="text-green-600 font-semibold hover:underline">Login here</a>
            </p>

        </div>
    </div>
</section>

@endsection