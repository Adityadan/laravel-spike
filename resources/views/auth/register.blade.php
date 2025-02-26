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
                        <div class="card-body">
                            <a href="../dark/index.html"
                                class="text-nowrap logo-img text-center d-flex align-items-center justify-content-center mb-5 w-100">
                                {{-- <img src="{{ asset('/assets/images/logos/logo-light.svg') }}" class="light-logo"
                                    alt="Logo-Dark" /> --}}
                                    <h1>SIMONCROT</h1>
                            </a>
                            <form class="mt-2" id="registerForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name"
                                        aria-describedby="textHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email"
                                        aria-describedby="emailHelp" />
                                </div>
                                <div class="input-group mb-4">
                                    <input type="password" class="form-control" id="password" />
                                    <button type="button" class="btn btn-outline-secondary toggle-password"
                                        data-target="#password">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="input-group">
                                    <input type="password" class="form-control" id="password_confirmation" />
                                    <button type="button" class="btn btn-outline-secondary toggle-password"
                                        data-target="#password_confirmation">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                                <div class="mt-2 mb-4">
                                    <div id="password_match" style="display: none; color: green;">Password Sama!</div>
                                    <div id="password_not_match" style="display: none; color: red;">Password Tidak Sama!
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary w-100 mb-4 rounded-pill">Sign Up</button>
                                <div class="d-flex align-items-center">
                                    <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                                    <a class="text-primary fw-medium ms-2" href="{{ route('login') }}">Sign
                                        In</a>
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
    $('#registerForm').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();
        $.ajax({
            url: "{{ route('register') }}",
            method: "POST",
            data: {
                email: email,
                password: password,
                password_confirmation: password_confirmation,
                name: name,
                _token: "{{ csrf_token() }}"
            },
            success: function(response) {
                console.log(response);

                if (response.success) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Register Successful',
                        text: response.message,
                        timer: 2000,
                        showConfirmButton: false
                    }).then(function() {
                        window.location.href = "{{ route('dashboard') }}";
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Register Failed',
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
    });
    $(document).ready(function() {
        $('.toggle-password').click(function() {
            // Mengambil target dari atribut data-target
            var input = $($(this).attr('data-target'));
            var icon = $(this).find('i');

            // Cek jika tipe input adalah password
            if (input.attr('type') == 'password') {
                input.attr('type', 'text');
                icon.removeClass('fas fa-eye').addClass('fas fa-eye-slash');
            } else {
                input.attr('type', 'password');
                icon.removeClass('fas fa-eye-slash').addClass('fas fa-eye');
            }
        });

        $("#password_confirmation").keyup(function() {
            var password = $("#password").val();
            var confirmPassword = $("#password_confirmation").val();

            if (confirmPassword) {
                if (password == confirmPassword ) {
                    $("#password_match").show();
                    $("#password_not_match").hide();
                } else {
                    $("#password_not_match").show();
                    $("#password_match").hide();
                }
            }
        });
    });
</script>

</html>
