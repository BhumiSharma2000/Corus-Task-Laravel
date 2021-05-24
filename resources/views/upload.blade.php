<html>
    <head> 
        <title>Add & View Post</title>
        <style>
        body
        {
            padding:20px 0px 0px 50px;
        }
        </style>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    </head>
    <body>
   
        <div class="row">
        <div class="col-sm-11">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/add">Register </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/">Login </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Post <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/list">View Users</a>
            </li>
            </ul>
        </div>
    </nav>
    </div>
        <div class="col-sm-11">
            <div class="card">
            <div class="card-body">
                <h5 class="card-title">Add Post</h5>
                <form action="/upload" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Description</label>
                        <div class="form-floating">
                            <textarea class="form-control" name="description" id="floatingTextarea2" style="height: 100px"></textarea>
                            <label for="floatingTextarea2">Comments</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile" name="photo">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Upload">
                </form>
                <hr/>
                <table class="table table-dark table-striped">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image (Click on Image)</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($photos as $photo)
                        <tr>
                        <th scope="row">{{$photo->id}}</th>
                        <td>{{$photo->title}}</td>
                        <td>{{$photo->description}}</td>
                        <td><a href="{{url('images/'.$photo->image)}}" target="_blank"><img src="{{url('images/'.$photo->image)}}" height="150px" alt="Image"/></a></td>
                        </tr>
                    
                    @endforeach
                    </tbody>
                </table>
                
              
            </div>
            </div>
        </div>
    </body>
</html>