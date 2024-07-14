<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
        content="bootstrap 5, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="{{ asset('home/assets/gambar/icon/plant.png') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('home/assets/css/style.css') }}">
</head>

<body>
    <div class="content-wrapper">
        <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white"
            data-image-src="{{ asset('home/assets/gambar/bg18.png') }}">
            <div class="container pt-17 pb-20 pt-md-19 pb-md-21 text-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h1 class="display-1 mb-3">Sign Up</h1>
                        <nav class="d-inline-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Sign Up</li>
                            </ol>
                        </nav>
                        <!-- /nav -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- /section -->
        <section class="wrapper bg-light">
            <div class="container pb-14 pb-md-16">
                <div class="row">
                    <div class="col-lg-7 col-xl-6 col-xxl-5 mx-auto mt-n20">
                        <div class="card">
                            <div class="card-body p-11 text-center">
                                <h2 class="mb-3 text-start">Sign up</h2>
                                <p class="lead mb-6 text-start">Registration takes less than a minute.</p>
                                <form action="{{ route('registrasi') }}" method="POST" class="text-start mb-3">
                                    @csrf
                                    <input type="text" name="role_id" class="form-control" value="2"
                                        id="role_id" style="display: none;">
                                    <div class="form-floating mb-4">
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            id="name">
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="form-floating mb-4">
                                        <input type="email" name="email" class="form-control" placeholder="Email"
                                            id="loginEmail">
                                        <label for="loginEmail">Email</label>
                                    </div>
                                    <div class="form-floating password-field mb-4">
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Password" id="loginPassword">
                                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                        <label for="loginPassword">Password</label>
                                    </div>
                                    <div class="form-floating password-field mb-4">
                                        <input type="password" name="password_confirmation" class="form-control"
                                            placeholder="Confirm Password" id="loginPasswordConfirm">
                                        <span class="password-toggle"><i class="uil uil-eye"></i></span>
                                        <label for="loginPasswordConfirm">Confirm Password</label>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill btn-login w-100 mb-2">Sign Up</button>
                                </form>
                                <!-- /form -->
                                <p class="mb-0">Already have an account? <a href="{{ route('login') }}"
                                        class="hover">Sign in</a></p>
                                <div class="divider-icon my-4">or</div>
                                <nav class="nav social justify-content-center text-center">
                                    <a href="#" class="btn btn-circle btn-sm btn-google"><i
                                            class="uil uil-google"></i></a>
                                    <a href="#" class="btn btn-circle btn-sm btn-facebook-f"><i
                                            class="uil uil-facebook-f"></i></a>
                                    <a href="#" class="btn btn-circle btn-sm btn-twitter"><i
                                            class="uil uil-twitter"></i></a>
                                </nav>
                                <!--/.social -->
                            </div>
                            <!--/.card-body -->
                        </div>
                        <!--/.card -->
                    </div>
                    <!-- /column -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
    </div>
    <script src="{{ asset('home/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('home/assets/js/theme.js') }}"></script>
</body>

</html>
