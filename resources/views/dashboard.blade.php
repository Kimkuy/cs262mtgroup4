@extends('layout')
@section('content')

    <main class="container">
        <div class="row">
            @auth
            <h2> Creat Post </h2>
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                        <form action="/create-post" method="post" >
                            @csrf
                            <input type="text" name="title" class="my-2" placeholder="Post Title">
                            <textarea name="body" placeholder="Body content..."></textarea>
                            <br>
                            <button type="submit" name="submit" class="btn btn-primary my-2">Create Post</button>
                        </form>
                </div> 

                <h2>All Posts</h2>
                @foreach($posts as $post)
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                    {{-- <h3>{{$post['title']}} by {{$post['user_id']}}</h3> --}}
                    <h3>{{$post['title']}} by {{$post->user->name}}</h3> 
                    {{$post['body']}}
                    <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                    <form action="/delete-post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                </div>
                @endforeach
            @else

            <div class="col-md-6">
                <div class="p-4 p-md-5 mb-4 rounded text-body-emphasis bg-body-secondary">
                        <h4>SIGN UP</h4>
                        <p>Don't have an account yet? Sign up here!</p>
                        <form action="/register" method="post" >
                            @csrf
                            <input type="text" name="name" class="my-2" placeholder="Username">
                            <input type="password" name="password" class="my-2" placeholder="Password">
                            <input type="password" name="pwdrepeat" class="my-2" placeholder="Repeat Password">
                            <input type="text" name="email" class="my-2" placeholder="E-mail">
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

    </main>
    
@endsection
