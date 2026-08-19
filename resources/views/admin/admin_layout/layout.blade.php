@include('admin.admin_include.header')
@include('admin.admin_include.navbar')

@yield('title')
@yield('content')
@stack('css')
@stack('js')
@include('admin.admin_include.footer')
