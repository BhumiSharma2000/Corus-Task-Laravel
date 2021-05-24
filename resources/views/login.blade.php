<head> 
        <title>Login User</title>
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
            <li class="nav-item">
                <a class="nav-link " href="/add">Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/">Login <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/upload">Post </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="/list">View Users</a>
            </li>
            </ul>
        </div>
    </nav>
        <div class="col-sm-12">
            <div class="card">
            <div class="card-body">
              <h1>Login</h1>
                <form action="login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="bhumi@corus.com" name="email" >
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                </div>
                
                <input type="submit" class="btn btn-primary" value="Submit">
               
                </form>
            </div>
            </div>
        </div>
    </body>
</html>
