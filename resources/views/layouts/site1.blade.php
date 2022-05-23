<!DOCTYPE html>
<html lang="en">

@include('site.classes.head')
@livewireStyles

<body class="template-color-2 spybody" data-spy="scroll" data-bs-target=".navbar-example2" data-offset="70">

    <div class="main-page-wrapper">
        <div class="rn-header-image-area">
            <div class="bg_image--9 bg_image h-100">
            </div>
        </div>
        <div class="rn-content-wrapper">
            <div class="container">
               

                   @include('site.classes.header1')

                   @yield('content')
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Start Footer Area -->
  @include('site.classes.footer')
    <!-- End Modal Area  -->
    <!-- JS ============================================ -->
    @include('site.classes.scripts')
    @livewireScripts

</body>

</html>