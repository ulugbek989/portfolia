<!DOCTYPE html>
<html lang="en">
<head>

@include('site.classes.head')
@livewireStyles
    <link rel="icon" type="image/jpg" href="{{asset('image/b5.jpg')}}">

</head>
<body class="template-color-2 spybody" data-spy="scroll" data-bs-target=".navbar-example2" data-offset="70">

    <div class="main-page-wrapper">
        <div class="rn-header-image-area">
            <div class="bg_image--1 bg_image h-100">
            </div>
        </div>
        <div class="rn-content-wrapper">
            <div class="container">
                <div class="row padding-tb m_dec-top align-items-center d-flex">

                   @include('site.classes.header')

                   @yield('content')

                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area -->
  @include('site.classes.footer')
    <!-- End Modal Area  -->
    @include('sweetalert::alert')

    <!-- JS ============================================ -->
    @include('site.classes.scripts')
    {{-- <script src="{{ asset('ckeditorStandart/ckeditor.js') }}"></script>
    <script>
                 CKEDITOR.replace( 'message' );
    </script> --}}
    @livewireScripts

</body>

</html>
