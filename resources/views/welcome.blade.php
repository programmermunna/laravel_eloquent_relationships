<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="row my-5">
            <div class="col-sm-12">
                <div class="card p-5">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Country</th>
                        <th scope="col">Post</th>
                        <th scope="col">Post Title</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($countries as $data)
                        <tr>
                          <th>{{ $data->name }}</th>
                          <th>{{ $data->posts->count() }}</th>
                          <th>
                            @foreach ($data->posts as $post)
                              {{ $post->title }}
                            @endforeach
                          </th>
                        </tr>                            
                        @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>