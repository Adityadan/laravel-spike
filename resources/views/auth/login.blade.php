<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('components.templates.partials.header')

<body>
    <div class="preloader">
        <img src="{{ asset('/assets/images/logos/loader.svg') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div id="main-wrapper" class="p-0 bg-white">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="auth-login-shape-box position-relative">
                <div class="d-flex align-items-center justify-content-center w-100 z-1 position-relative">
                    <div class="card auth-card col-xxl-4 col-xl-5 col-lg-6 col-md-8 mb-0 mx-5">
                        <div class="card-body pt-5">
                            <a href="../dark/index.html"
                                class="text-nowrap logo-img text-center d-flex align-items-center justify-content-center mb-5 w-100">
                                {{-- <img src="{{ asset('/assets/images/logos/logo-light.svg') }}" class="dark-logo"
                                    alt="Logo-light" /> --}}
                                    <h1>SIMONCROT</h1>
                            </a>
                            <form class="mt-4" id="loginForm">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-4">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" />
                                </div>
                                <div class="d-flex align-items-center justify-content-end mb-4">

                                    <a class="text-primary fw-medium" href="{{ route('password.request') }}">Forgot Password ?</a>
                                </div>
                                <button id="signInBtn" type="submit"
                                    class="btn btn-primary w-100 mb-4 rounded-pill">Sign In</button>

                                <button id="loadingBtn" class="btn btn-primary w-100 mb-4 rounded-pill" type="button"
                                    disabled style="display:none;">
                                    <span class="spinner-border spinner-border-sm" role="status"
                                        aria-hidden="true"></span>
                                    Loading...
                                </button>
                                <div class="d-flex align-items-center justify-content-center">
                                    <p class="fs-4 mb-0 fw-medium">New to Spike?</p>
                                    <a class="text-primary fw-medium ms-2" href="{{ route('register') }}">Create an
                                        account</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-transparent sidebartoggler"></div>
    </div>
</body>
@include('components.templates.partials.script')
<script>
    $(document).ready(function() {

        function login() {
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                url: "{{ route('login') }}",
                method: "POST",
                data: {
                    email: email,
                    password: password,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(response);

                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Successful',
                            text: response.message,
                            timer: 2000,
                            showConfirmButton: false
                        }).then(function() {
                            window.location.href = "{{ route('dashboard') }}";
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Failed',
                            text: response.message
                        });
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: error
                    });
                }
            });
        }

        $("#signInBtn").click(function(e) {
            e.preventDefault();
            $(this).hide();
            $("#loadingBtn").show();
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                url: "{{ route('login') }}",
                method: "POST",
                data: {
                    email: email,
                    password: password,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(response);

                    if (response.success) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Login Successful',
                            text: response.message,
                            timer: 2000,
                            showConfirmButton: false
                        }).then(function() {
                            window.location.href = "{{ route('dashboard') }}";
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Login Failed',
                            text: response.message
                        });
                    }
                    $('#signInBtn').show();
                    $("#loadingBtn").hide();
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: error
                    });
                    $('#signInBtn').show();
                    $("#loadingBtn").hide();
                }

            });

        });
    });
</script>

</html>
