<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('css/signup.css') }}">
    
</head>
<body>
    <h1 class="text-center py-2 ">Let's create something Together</h1>
     <div class="row justify-content-center g-4 py-5 px-4">
           @auth
    <h2> Contrat! You are login!</h2>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
            @else

            <div class="col-md-5 py-5 g-4">
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                    
                        <h4>SIGN UP</h4>
                        <p>Don't have an account yet? Sign up here!</p>
                        <form action="/register" method="post" >
                            @csrf
                            <input type="text" name="name" class="mt-2 form-control" placeholder="Username">
                            <input type="password" name="password" class="mt-2 form-control" placeholder="Password">
                            <input type="password" name="password_confirmation" class="mt-2 form-control" placeholder="Repeat Password">
                            <input type="text" name="email" class="mt-2 form-control" placeholder="E-mail">
                            <br><br>
                            <button type="submit" name="submit" class="btn btn-grad ">SIGN UP</button>
                        </form>
                </div> 
            </div>
            <div class="col-md-5 py-5">  
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                        <h4>LOGIN</h4>
                        <p>Log in here!</p>
                        <form action="/login" method="post">
                          @csrf
                            <input type="text" name="loginname" class="form-control" placeholder="Username">
                            <input type="password" name="loginpassword" class="mt-2 form-control" placeholder="Password">
                            <br><br>
                            <button type="submit" name="submit" class="btn btn-grad">LOGIN</button>
                        </form>

                        <?php ?>
                </div>
            </div>
             @endauth
        </div>
</body>
</html>