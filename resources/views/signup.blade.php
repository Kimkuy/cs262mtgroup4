<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <div class="row">
           @auth
    <h2> Contrat! You are login!</h2>
    <form action="/logout" method="POST">
        @csrf
        <button>Logout</button>
    </form>
            @else

            <div class="col-md-6">
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                    
                        <h4>SIGN UP</h4>
                        <p>Don't have an account yet? Sign up here!</p>
                        <form action="/register" method="post" >
                            @csrf
                            <input type="text" name="name" class="mt-2 form-control" placeholder="Username">
                            <input type="password" name="password" class="mt-2 form-control" placeholder="Password">
                            <input type="password" name="password_confirmation" class="mt-2 form-control" placeholder="Repeat Password">
                            <input type="text" name="email" class="my-2 form-control" placeholder="E-mail">
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary my-2">SIGN UP</button>
                        </form>
                </div> 
            </div>
            <div class="col-md-6">  
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                        <h4>LOGIN</h4>
                        <p>Log in here!</p>
                        <form action="/login" method="post">
                          @csrf
                            <input type="text" name="loginname" placeholder="Username">
                            <input type="password" name="loginpassword" placeholder="Password">
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary my-2">LOGIN</button>
                        </form>

                        <?php ?>
                </div>
            </div>

             @endauth
        </div>
</body>
</html>