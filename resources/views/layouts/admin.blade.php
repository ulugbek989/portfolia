<!DOCTYPE html>
<html lang="en">

@include('admin.classes.head')
@livewireStyles

<body>

    
    @include('admin.classes.sider')
    <main class="content">
        @include('admin.classes.header')

            @yield('content')
            @include('admin.classes.footer')
    
      
        @include('admin.classes.scripts')
      

    </main>
    @include('sweetalert::alert')

    @stack('script')
    @livewireScripts

</body>

</html>
