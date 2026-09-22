@extends('master_layout.layout')

@section('title', 'Home-page')


@section('content')


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
    {{-- logout flesh message --}}

    @if (session('logout'))
        <div id="logout-message"
            class="fixed top-5 right-5 z-50 flex items-center gap-3
               bg-gray-800 text-white px-5 py-3 rounded-xl
               shadow-xl border border-gray-700">

            <span
                class="flex items-center justify-center w-8 h-8
                     bg-gray-700 rounded-full text-yellow-400">
                <i class="bi bi-box-arrow-right"></i>
            </span>

            <div>
                <p class="font-semibold text-sm">Logged Out</p>
                <p class="text-xs text-gray-300">
                    {{ session('logout') }}
                </p>
            </div>
        </div>

        <script>
            setTimeout(() => {
                const message = document.getElementById('logout-message');

                if (message) {
                    message.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    message.style.opacity = '0';
                    message.style.transform = 'translateX(20px)';

                    setTimeout(() => {
                        message.remove();
                    }, 500);
                }
            }, 3000);
        </script>
    @endif





    <!-- clickIt banner here  -->
    <section id="clickIt-banner" class="mt-0 p-5">
        <a href="{{ '/product' }}"><img src="images/banner.webp" class="w-full"></a>
    </section>
    <!-- clickIt content here  -->
    <section id="clickIt-content" class="mt-0 p-5">
        <div class="grid grid-cols-1 lg:grid-cols-3 sm:grid-cols-3 md:grid-cols-3">
            <div class="p-3 m-3">
                <a href="{{ '/products' }}"><img src="{{ asset('images/babycare-WEB.avif') }}" class="w-full"></a>
            </div>
            <div class="p-3 m-3">
                <a href="{{ '/products' }}"><img src="{{ asset('images/Pet-Care_WEB.avif') }}" class="w-full"></a>
            </div>
            <div class="p-3 m-3">
                <a href="{{ '/products' }}"><img src="{{ asset('images/pharmacy-WEB.avif') }}" class="w-full"></a>
            </div>
        </div>
        <!-- clickIT category -->
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 lg:grid-cols-7 xl:grid-cols-10 gap-3">

            @foreach ($category_id as $category)
                <a href="{{ url('/product/' . $category->id) }}"
                    class="border rounded-lg p-3 text-center hover:bg-gray-100">

                    <span class="font-semibold text-sm break-words">
                        {{ $category->catname }}
                    </span>

                </a>
            @endforeach

        </div>
        </div>

        <!-- Dairy, Bread & Eggs -->
        <h1 class="ms-2 text-base mt-5 font-bold sm:text-sm md:text-2xl lg:text-3xl">
            {{ $activeCategory->catname ?? 'Dairy, Bread & Eggs' }} <button type="button"
                class="float-end  w-auto text-green-500  text-xl font-bold">see All</button></h1>



        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 mt-5">
            @foreach ($data as $row)
                @if ($row->catname == $activeCategory?->catname)
                    <a href="{{ '/product-details' }}">
                        <div class="w-auto border-1 border-gray-200 p-8 mt-3">
                            <img src="{{ asset($row->image) }}" class="mx-auto w-32 h-32 object-cover" />
                            <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                            <p class="text-md font-bold">{{ $row->Pname }}</p>
                            <p class="text-gray-500">500 ml</p>
                            <p>₹ {{ $row->price }} <del class = "">{{ $row->oprice }}</del>
                                <button type="button"
                                    class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button>
                            </p>
                        </div>
                    </a>
                @endif
            @endforeach
        </div>



        <!-- Snacks & Munchies -->
        <h1 class="ms-2 text-base mt-5 font-bold sm:text-sm md:text-2xl lg:text-3xl">Snacks & Munchies<button type="button"
                class="float-end  w-auto text-green-500  text-xl font-bold">see All</button></h1>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 mt-5">
            <a href="{{ '/product-details' }}">
                <div class="w-auto border-1 border-gray-200 mt-3 p-8">
                    <img src="images/product7.avif" class="mx-auto" />
                    <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                    <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                    <p class="text-gray-500">500 ml</p>
                    <p>₹ 34 <button type="button"
                            class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
                </div>
            </a>

            <a href="{{ '/product-details' }}">
                <div class="w-auto border-1 border-gray-200 mt-3 p-8">
                    <img src="images/product8.avif" class="mx-auto" />
                    <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                    <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                    <p class="text-gray-500">500 ml</p>
                    <p>₹ 34 <button type="button"
                            class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
                </div>
            </a>

            <a href="{{ '/product-details' }}">
                <div class="w-auto border-1 border-gray-200 mt-3 p-8">
                    <img src="images/product9.avif" class="mx-auto" />
                    <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                    <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                    <p class="text-gray-500">500 ml</p>
                    <p>₹ 34 <button type="button"
                            class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
                </div>
            </a>

            <a href="{{ '/product-details' }}">
                <div class="w-auto border-1 border-gray-200 mt-3 p-8">
                    <img src="images/product10.avif" class="mx-auto" />
                    <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                    <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                    <p class="text-gray-500">500 ml</p>
                    <p>₹ 34 <button type="button"
                            class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
                </div>
            </a>

            <a href="{{ '/product-details' }}">
                <div class="w-auto border-1 border-gray-200 mt-3 p-8">
                    <img src="images/product12.avif" class="mx-auto" />
                    <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                    <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                    <p class="text-gray-500">500 ml</p>
                    <p>₹ 34 <button type="button"
                            class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
                </div>
            </a>

            <a href="{{ '/product-details' }}">
                <div class="w-auto border-1 border-gray-200 mt-3 p-8">
                    <img src="images/product13.avif" class="mx-auto" />
                    <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                    <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                    <p class="text-gray-500">500 ml</p>
                    <p>₹ 34 <button type="button"
                            class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
                </div>
            </a>
        </div>
        <!-- Hookah -->
        <h1 class="ms-2 text-base mt-5  font-bold sm:text-sm md:text-2xl lg:text-3xl">Hookah <button type="button"
                class="float-end  w-auto text-green-500  text-xl font-bold">see All</button></h1>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 mt-5">
            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product14.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product15.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product16.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product17.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product18.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product19.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>
        </div>
        <!-- Mouth fresheners -->
        <h1 class="ms-2 text-base mt-5 font-bold sm:text-sm md:text-2xl lg:text-3xl">Mouth fresheners <button
                type="button" class="float-end  w-auto text-green-500  text-xl font-bold">see All</button></h1>
        <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-1 mt-5">
            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product20.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product22.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product23.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product24.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product12.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>

            <div class="w-auto border-1 border-gray-200 mt-3 p-5">
                <img src="images/product14.avif" class="mx-auto" />
                <p><span class="bi bi-fire text-green-500"></span> 14 mins</p>
                <p class="text-md font-bold">Amul Gold Full Cream Milk</p>
                <p class="text-gray-500">500 ml</p>
                <p>₹ 34 <button type="button"
                        class="float-end border-2 border-green-800 p-2 rounded-xl w-auto">Add</button></p>
            </div>
        </div>



    </section>

@endsection

{{-- @include('include.footer') --}}
