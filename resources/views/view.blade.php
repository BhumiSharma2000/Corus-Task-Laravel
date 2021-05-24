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
        <nav class="navbar navbar-expand-lg navbar-dark bg-success ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/add">Register </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/">Login </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/upload">Post </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="">View Users <span class="sr-only">(current)</span></a>
            </li>
            </ul>
        </div>
    </nav>
    </div>
    <div class="col-sm-11">
<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
   @foreach($view as $key)
       <tr>
    <th scope="row">{{$key['id']}}</th>
      <td>{{$key['first_name']}}</td>
      <td>{{$key['last_name']}}</td>
      <td>{{$key['email']}}</td>
      </tr>
   
   @endforeach
  </tbody>
</table>
</div>
</body>
</html>