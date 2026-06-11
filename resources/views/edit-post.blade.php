<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
     <main class="container">
        <div class="row">
            @auth
            <h2> Contrat! You are login!</h2>
                <form action="/edit-post/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="text" name="title" value="{{$post->title}}" class="form-control">
                    <textarea name="body" class="form-control my-3">{{$post->body}}</textarea>
                    @if($post->image)
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mb-2" style="max-height:200px;">
                        <p class="text-muted">Upload a new image to replace it</p>
                    @endif

                    <input type="file" name="image" class="my-2 form-control" accept="image/*">
                    <button class="btn btn-primary">Save Changes</button> 
                </form>
            @else
             @endauth
        </div>

    </main>
</body>
</html>
