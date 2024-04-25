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
    <title>Register</title>
<style>
body {
            color: #000;
            background-image: linear-gradient(to right, #e67a06, #FFD54F);
            overflow-x: hidden;
            height: 100%;
            padding: 20px;
        }
        
        .form-control {
            border-radius: 50px;
            background-color: #F3E5F5;
            border: 1px solid transparent;
        }
        
        .form-control:focus {
            border-color: #e67a06;
            outline: none;
            box-shadow: none;
        }
        
        .btn {
            border-radius: 50px;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-image: linear-gradient(to right, #FFD54F, #e67a06);
            color: #fff;
            border: none;
        }
        
        .btn-primary:hover {
            background-image: linear-gradient(to right, #e67a06, #FFD54F);
        }
        
        .card {
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin: 20px 0;
        }
        
        .bg-register-image {
            background-image: url('/images/dumbbells_gym_fitness_220152_3840x2160.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</style>

</head>

<body class="bg-gradient-primary">
{{-- 
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('register') }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleFirstName" name="name" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        name="email" placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="categorie">Category:</label><br>
                                        <input type="radio" name="categorie" value="Male"> Male<br>
                                        <input type="radio" name="categorie" value="Female"> Female<br>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="date" class="form-control form-control-user"
                                            name="date_naissance" id="date_naissance">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label for="photo">Photo:</label><br>
                                        <input type="file" name="photo">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>

                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small" href="{{ route('loginform') }}">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div> --}}
  <div class="container">
        <div class="card o-hidden shadow-lg my-5">
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            
                            <form method="POST" action="/register" enctype="multipart/form-data">
                                <!-- Name Field -->
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Full Name" required>
                                </div>
                                
                                <!-- Email Field -->
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                </div>
                                
                                <!-- Password Field -->
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </div>
                                
                                <!-- Gender Radio Buttons -->
                                <div class="form-group">
                                    <label>Gender:</label>
                                    <div>
                                        <input type="radio" name="gender" value="Male"> Male
                                        <input type="radio" name="gender" value="Female"> Female
                                    </div>
                                </div>
                                
                                <!-- Date of Birth -->
                                <div class="form-group">
                                     <label>Date of Birth:</label>
                                    <input type="date" class="form-control" name="dob" required>
                                </div>
                                
                                <!-- Upload Photo -->
                                <div class="form-group">
                                    <label for="photo">Upload Profile Photo</label>
                                    <input type="file" name="photo" class="form-control">
                                </div>
                                
                                <!-- Submit Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Register Account</button>
                                </div>
                            </form>
                            
                            <div class="text-center mt-4">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>
