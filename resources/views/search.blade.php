<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Admin</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
     <!-- Custom styles sheet -->
  <link href="adminCard.css" rel="stylesheet">


</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
        <div class="logo_">
      <a class="navbar-brand" href="#"> <img src="images/logo_.png" alt="logo"style="width:170px"> </a>
  </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09"
        aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample09">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Take away</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#"> Delivery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"> Catering</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">Menu</a>
            <div class="dropdown-menu" aria-labelledby="dropdown09">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0" type="GET" action="/search">
          <input class="form-control" type="text" placeholder="Search" aria-label="Search">
        </form>
        &nbsp &nbsp
        <div>
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#darkModalForm">Login</button>
        </div>
      </div>
    </nav>


    <!-- <section class=".body-font">
        <div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="images/6.jpg" class="card-img" style="width: 150px;" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>

 </section> -->
 <br>
 <div class="container">
  <div class="jumbotron">
      <div class="blockquote text-right">
      {{-- <a href="/additem" class="btn btn-outline-dark btn-lg" > ADD
        <svg width="1em" height="1em" viewBox="0 0 20 20" class="bi bi-plus-square-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm6.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
        </svg> --}}
      </a>
      <a href="/rederect" class="btn btn-outline-primary btn-lg" > Admin
        <svg width="1em" height="1em" viewBox="0 0 20 20" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
          </svg>
    </a>
      </div>
    <h4 class="display-4">Search Result </h4>
  <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Item code</th>
      <th scope="col">Price</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

    @foreach( $add_items as $add_items)
    <tr>
      <th scope="row">{{$add_items->id}}</th>
      <td><img src="{{ asset('images/'.$add_items->image)}}" width="100px" alt="{{$add_items->image}}"></td>
      <td>{{$add_items->name}}</td>
      <td>{{$add_items->item_code}}</td>
      <td>{{$add_items->price}}</td>
      <td>{{$add_items->details}}</td>
      <td><a href="/updateItem{{$add_items->id}}" class="btn btn-outline-success btn-sm" > Edit
        <svg width="1em" height="1em" viewBox="0 0 20 20" class="bi bi-pencil-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
       </svg>
      </a>
        <a href="/deleteItem{{$add_items->id}}" class="btn btn-outline-danger btn-sm servideletebtn"  >Delete
          <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-archive-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M12.643 15C13.979 15 15 13.845 15 12.5V5H1v7.5C1 13.845 2.021 15 3.357 15h9.286zM5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM.8 1a.8.8 0 0 0-.8.8V3a.8.8 0 0 0 .8.8h14.4A.8.8 0 0 0 16 3V1.8a.8.8 0 0 0-.8-.8H.8z"/>
          </svg>
        </a></td>


    </tr>
   @endforeach





  </tbody>
</table>




</div>

 </div>

 @include('sweetalert::alert')


</body>
</html>

