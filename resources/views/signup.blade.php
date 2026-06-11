<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up/login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
  
</head>
<body>
     <div class="bd-primary">
           @auth
    <h2> Contrat! You are login!</h2>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
            @else
            <div class="row">

                <div class="col-md-6 py-5"> 
                    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                        <h4>SIGN UP</h4>
                        <p>Don't have an account yet? Sign up here!</p>
                        <form action="/register" method="post">
                            @csrf
                            <input type="text" name="name" class="mt-2 form-control" placeholder="Username">
                            <input type="password" name="password" class="mt-2 form-control" placeholder="Password">
                            <input type="password" name="password_confirmation" class="mt-2 form-control" placeholder="Repeat Password">
                            <input type="text" name="email" class="my-2 form-control" placeholder="E-mail">
                            <br><br>
                            <button type="submit" class="button">SIGN UP</button>
                            <div class="brand-icon">
                            <img src="https://esportsfc.org.kh/wp-content/themes/efc_v1/src/img/favicon.ico" alt="logo"> 
                            <strong> ជាតិ សាសនា ព្រះមហាក្សត្រ </strong>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6 py-5">
                    <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                        <h4>LOGIN</h4>
                        <p>Log in here!</p>
                        <form action="/login" method="post">
                            @csrf
                            <input type="text" name="loginname" class="mt-2 form-control" placeholder="Username">
                            <input type="password" name="loginpassword" class="mt-2 form-control" placeholder="Password">
                            <br><br>
                            <button type="submit" class="button">LOGIN</button>
                            <div class="brand-icon">
                            <img src="https://esportsfc.org.kh/wp-content/themes/efc_v1/src/img/favicon.ico" alt="logo">
                            <strong> ជាតិ សាសនា ព្រះមហាក្សត្រ </strong>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            @endauth
        </div>

</body>
</html>
