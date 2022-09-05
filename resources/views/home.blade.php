<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Home</title>
    <style>
        html,
        body {
            height: 100%;
            width: 100%;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
        }
    </style>
</head>

<body>


    <div class="container-fluid h-100">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img src="{{ asset('images/angel.png') }}" alt="">
            </div>
        </nav>
        <div class="row d-flex justify-content-center align-items-center mt-5">

            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                    class="img-fluid" alt="Sample image">
            </div>

            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                <form action="{{ url('login') }}" method="post">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="email">Email address</label>
                        <input type="text" id="email" class="form-control form-control-lg"
                            placeholder="Enter a email address" name="email" />
                        <small class="text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <label class="form-label" for="password">Password</label>
                        <input type="password" id="password" class="form-control form-control-lg"
                            placeholder="Enter password" name="password" />
                        <small class="text-danger">
                            @error('password')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                        <a class="text-body">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                            style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                    </div>

                </form>
            </div>

        </div>

        <footer class="text-center bg-primary text-light w-100 align-middle p-2">
            Copyright © 2022 Angel Multimedia Institute | Powered by Angel Multimedia Institute.
        </footer>

    </div>









</body>

</html>








 