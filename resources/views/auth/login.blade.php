<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Login</title>

    @include('partials/css')

</head>

<body class="animsition">
    <div class="page-wrapper ">
        <div class="page-content--bge5 vertical-alignment">
            <div class="align-middle login-wrap">
                <div class="login-content ">
                    <div class="login-logo">
                            <h1>LOG IN</h1>
                        </div>
                    <div class="login-form">
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input class="au-input au-input--full" type="email" name="email"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="au-input au-input--full" type="password" name="password"
                                    placeholder="Password">
                            </div>

                            <div class="form-grop pt-4">
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">sign
                                    in</button>
                            </div>
                        </form>
                        <div class="register-link">
                            <p>
                                Don't you have account?
                                <a href="{{ route('register') }}">Register</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('partials/script')

</body>

</html>
<!-- end document-->
