<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Post</title>
  </head>
  <body>
    <h1 class="text-center my-4">Posts</h1>

    <div class="container">

        <div class="d-flex justify-content-end">
            <a href="/post/create" class="btn btn-primary">Create Post</a>
        </div>
        <hr>

        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Post 1</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias dolorem cupiditate, a tempore delectus et, pariatur officia veniam laudantium quo impedit, id similique repellat eius fugiat incidunt aspernatur tenetur consequatur!</p>
                    </div>
                    <div class="card-footer">
                        <a href="/post/detail" class="btn btn-primary">Detail</a>
                        <a href="/post/edit" class="btn btn-success">Edit</a>
                        <a href="/post/delete" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Post 2</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias dolorem cupiditate, a tempore delectus et, pariatur officia veniam laudantium quo impedit, id similique repellat eius fugiat incidunt aspernatur tenetur consequatur!</p>
                    </div>
                    <div class="card-footer">
                        <a href="/post/detail" class="btn btn-primary">Detail</a>
                        <a href="/post/edit" class="btn btn-success">Edit</a>
                        <a href="/post/delete" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
