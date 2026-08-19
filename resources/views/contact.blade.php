@extends('master_layout.layout')

@section('title', 'contact')

@section('content')

    <!-- clickIt content here  -->
    <section id="clickIt-content" class="bg-gray-50">

        <!-- HEADER -->
        <div class="max-w-7xl mx-auto px-4 py-14 text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-gray-900">
                Contact Us
            </h1>
            <p class="mt-4 text-gray-600 text-lg">
                We’d love to hear from you. Reach out anytime.
            </p>
        </div>

        <!-- CONTENT -->
        <div class="max-w-7xl mx-auto px-4 pb-16 grid lg:grid-cols-2 gap-10">

            <!-- LEFT: CONTACT INFO -->
            <div class="space-y-8">

                <!-- Address Card -->
                <div class="bg-white p-6 rounded-2xl shadow">
                    <h2 class="text-2xl font-semibold text-gray-900">
                        Our Office
                    </h2>
                    <p class="mt-3 text-gray-600">
                        ClickIt Technologies Pvt. Ltd.<br>
                        3rd Floor, Tech Park Tower,<br>
                        Bengaluru, Karnataka – 560103<br>
                        India
                    </p>

                    <div class="mt-4 space-y-2 text-gray-700">
                        <p><strong>Email:</strong> support@clickit.com</p>
                        <p><strong>Phone:</strong> +91 98765 43210</p>
                        <p><strong>Working Hours:</strong> Mon – Sat, 9 AM – 9 PM</p>
                    </div>
                </div>

                <!-- Google Map -->
                <div class="bg-white rounded-2xl shadow overflow-hidden h-[300px]">
                    <iframe class="w-full h-full border-0" loading="lazy" allowfullscreen
                        referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps?q=Bengaluru%20Karnataka&output=embed">
                    </iframe>
                </div>

            </div>

            <!-- RIGHT: CONTACT FORM -->
            <div class="bg-white p-8 rounded-2xl shadow">
                <h2 class="text-2xl font-semibold text-gray-900">
                    Send Us a Message
                </h2>
                {{-- @if (session('success'))
                    <div id="flash-message"
                        class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">

                        {{ session('success') }}

                    </div>
                @endif
                <script>
                    setTimeout(function() {
                        let message = document.getElementById('flash-message');

                        if (message) {
                            message.style.transition = "opacity 0.5s";
                            message.style.opacity = "0";

                            setTimeout(() => {
                                message.remove();
                            }, 1000);
                        }
                    }, 3000);
                </script> --}}
                @if (session('success'))
                    <div id="flash-message"
                        class="fixed top-5 left-1/2 -translate-x-1/2 z-[9999] flex items-center gap-3 bg-white border-l-4 border-green-500 text-gray-800 px-5 py-4 rounded-lg shadow-lg min-w-[320px] max-w-md">

                        <!-- Success Icon -->
                        <div class="flex-shrink-0 flex items-center justify-center w-8 h-8 rounded-full bg-green-100">
                            <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>

                        <div class="flex-1 text-sm font-medium">
                            {{ session('success') }}
                        </div>

                        <!-- Close Button -->
                        <button onclick="document.getElementById('flash-message').remove()"
                            class="flex-shrink-0 text-gray-400 hover:text-gray-600 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <style>
                        #flash-message {
                            animation: slideDown 0.4s ease-out;
                        }

                        @keyframes slideDown {
                            from {
                                opacity: 0;
                                transform: translate(-50%, -20px);
                            }

                            to {
                                opacity: 1;
                                transform: translate(-50%, 0);
                            }
                        }
                    </style>

                    <script>
                        setTimeout(function() {
                            let message = document.getElementById('flash-message');

                            if (message) {
                                message.style.transition = "opacity 0.5s, transform 0.5s";
                                message.style.opacity = "0";
                                message.style.transform = "translate(-50%, -20px)";

                                setTimeout(() => {
                                    message.remove();
                                }, 500);
                            }
                        }, 3000);
                    </script>
                @endif
                <form method="POST" class="mt-6 space-y-4">
                    @csrf
                    
                    <!-- Name -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Full Name
                        </label>
                        <input type="text" name="fullname" required
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500"
                            placeholder="Enter your name">
                    </div>

                    <!-- Email -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Email Address
                        </label>
                        <input name="email" type="email" required
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500"
                            placeholder="example@email.com">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Mobile Number
                        </label>
                        <input type="tel" name="phone"
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500"
                            placeholder="+91 XXXXX XXXXX">
                    </div>

                    <!-- Subject -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Subject
                        </label>
                        <select name="subject"
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500">
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Order Issue">Order Issue</option>
                            <option value="Career">Career</option>
                            <option value="Partnership">Partnership</option>
                        </select>
                    </div>

                    <!-- Message -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">
                            Message
                        </label>
                        <textarea name="message" rows="4" required
                            class="w-full p-3 rounded-xl border border-gray-300 focus:border-green-500 focus:ring-green-500"
                            placeholder="Write your message..."></textarea>
                    </div>

                    <!-- Submit -->
                    <button type="submit"
                        class="w-full bg-green-600 text-white py-3 rounded-xl font-semibold hover:bg-green-700 transition">
                        Send Message
                    </button>

                </form>
            </div>

        </div>

    </section>
@endsection
