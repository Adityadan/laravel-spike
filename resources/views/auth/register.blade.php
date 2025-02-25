<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

@include('components.templates.partials.header')

<body>
    <div id="main-wrapper" class="p-0 bg-white">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="auth-login-shape-box position-relative">
                <div class="d-flex align-items-center justify-content-center w-100 z-1 position-relative">
                    <div class="card auth-card col-xxl-4 col-xl-5 col-lg-6 col-md-8 mb-0 mx-5">
                        <div class="card-body">
                            <a href="../dark/index.html"
                                class="text-nowrap logo-img text-center d-flex align-items-center justify-content-center mb-5 w-100">
                                <img src="{{ asset('/assets/images/logos/logo-light.svg') }}" class="light-logo" alt="Logo-Dark" />
                            </a>
                            <div class="position-relative text-center my-4">
                                <p class="mb-0 fs-4 px-3 d-inline-block bg-white z-1 position-relative">
                                    or sign Up with
                                </p>
                                <span
                                    class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                            </div>
                            <form>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="exampleInputtext"
                                        aria-describedby="textHelp" />
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" />
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" />
                                </div>
                                <a href="../dark/authentication-login.html"
                                    class="btn btn-primary w-100 mb-4 rounded-pill">Sign Up</a>
                                <div class="d-flex align-items-center">
                                    <p class="fs-4 mb-0 text-dark">Already have an Account?</p>
                                    <a class="text-primary fw-medium ms-2" href="../dark/authentication-login.html">Sign
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

</html>
