<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('components.templates.partials.header')
<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="{{ asset('/assets/images/logos/loader.svg') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper">
        <!-- Sidebar Start -->

        @include('components.templates.partials.sidebar')
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <div class="body-wrapper">
                <div class="container-fluid">
                    @include('components.templates.partials.topbar')
                    {{ $slot }}
                </div>
            </div>

            @include('components.templates.partials.footer')
        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>
@include('components.templates.partials.script')
</body>

</html>
