<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <title>Login</title>
    <style>
        body {
            color: #000;
            overflow-x: hidden;
            height: 100%;
            background-image: linear-gradient(to right, #4f104d, #000000);
            background-repeat: no-repeat;
        }

        input,
        textarea {
            background-color: #F3E5F5;
            border-radius: 50px !important;
            padding: 12px 15px 12px 15px !important;
            width: 100%;
            box-sizing: border-box;
            border: none !important;
            border: 1px solid #F3E5F5 !important;
            font-size: 16px !important;
            color: #000 !important;
            font-weight: 400;
        }

        input:focus,
        textarea:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            border: 1px solid #6e166b !important;
            outline-width: 0;
            font-weight: 400;
        }

        button:focus {
            -moz-box-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
            outline-width: 0;
        }

        .card {
            border-radius: 0;
            border: none;
        }

        .card1 {
            width: 50%;
            padding: 40px 30px 10px 30px;
        }

        .card2 {
            width: 50%;
            background-image: linear-gradient(to right, #310930, #6e166b);
        }

        #logo {
            width: 70px;
            height: 60px;
        }

        .heading {
            margin-bottom: 60px !important;
        }

        ::placeholder {
            color: #000 !important;
            opacity: 1;
        }

        :-ms-input-placeholder {
            color: #000 !important;
        }

        ::-ms-input-placeholder {
            color: #000 !important;
        }

        .form-control-label {
            font-size: 12px;
            margin-left: 15px;
        }

        .msg-info {
            padding-left: 15px;
            margin-bottom: 30px;
        }

        .btn-color {
            border-radius: 50px;
            color: #fff;
            background-image: linear-gradient(to right, #6e166b, #000000);
            padding: 15px;
            cursor: pointer;
            border: none !important;
            margin-top: 40px;
        }

        .btn-color:hover {
            color: #fff;
            background-image: linear-gradient(to right, #000000, #6e166b);
        }

        .btn-white {
            border-radius: 50px;
            color: #6e166b;
            background-color: #fff;
            padding: 8px 40px;
            cursor: pointer;
            border: 2px solid #6e166b !important;
        }

        .btn-white:hover {
            color: #fff;
            background-image: linear-gradient(to right, #000000, #6e166b);
        }

        a {
            color: #000;
        }

        a:hover {
            color: #000;
        }

        .bottom {
            width: 100%;
            margin-top: 50px !important;
        }

        .sm-text {
            font-size: 15px;
        }

        @media screen and (max-width: 992px) {
            .card1 {
                width: 100%;
                padding: 40px 30px 10px 30px;
            }

            .card2 {
                width: 100%;
            }

            .right {
                margin-top: 100px !important;
                margin-bottom: 100px !important;
            }
        }

        @media screen and (max-width: 768px) {
            .container {
                padding: 10px !important;
            }

            .card2 {
                padding: 50px;
            }

            .right {
                margin-top: 50px !important;
                margin-bottom: 50px !important;
            }
        }
    </style>
</head>

<body class="bg-gradient-primary">
    <div class="container px-4 py-5 mx-auto">
        <div class="card card0">
            <div class="d-flex flex-lg-row flex-column-reverse">
                <div class="card card1">
                    <div class="row justify-content-center my-auto">
                        <div class="col-md-8 col-10 my-5">
                            <div class="row justify-content-center px-3 mb-3 ">
                                <img id="logo" src="{{ URL::asset('/images/o.png') }}"
                                    style="width: 180px; height:120px;">
                            </div>
                            <h3 class="mb-5 text-center heading">We are JustMove</h3>


                            <form class="user" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label class="form-control-label text-muted">Email</label>
                                    <input type="text" id="email" name="email"
                                        placeholder="Phone no or email id" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label class="form-control-label text-muted">Password</label>
                                    <input type="password" id="psw" name="password" placeholder="Password"
                                        class="form-control">
                                </div>

                                <div class="row justify-content-center my-3 px-3">
                                    <button type="submit" class="btn-block btn-color">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="bottom text-center mb-5">
                        <p href="{{ route('registerForm') }}" class="sm-text mx-auto mb-3">Don't have an account?<button
                                class="btn btn-white ml-2">Create new</button></p>
                    </div>
                </div>
                <div class="card card2">
                    <div class="my-auto mx-md-5 px-md-5 right">
                        <h3 class="text-white">Welcome to JustMove</h3>
                        <small class="text-white">
                            Join our vibrant sports community where teamwork, motivation, and wellness are at the core
                            of our values. Whether you're a beginner or a professional, we have activities for all
                            levels. Log in to explore our sports programs. Are you ready to achieve your goals with us?
                        </small>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>
