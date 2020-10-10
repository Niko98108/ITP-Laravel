<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Food Menu</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    .heder-font{

    position: relative;
    color: #383c40;
    font-family: Helvetica Neue,Raleway,sans-serif;
    font-weight: 400;
    line-height: 1.6;
    overflow-x: hidden;
    -webkit-font-smoothing: antialiased;
    font-size: 1rem;

    }


       @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>
  <!-- Custom styles sheet -->
  <link href="album.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark rounded">
      <div class="logo_">
    <a class="navbar-brand" href="/menu"> <img src="images/logo_.png" alt="logo"style="width:170px"> </a>
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
      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
      </form>
      &nbsp &nbsp
      <div>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#darkModalForm">Login</button>
      </div>
    </div>
  </nav>
  <main role="main">

    <div class="jumbotron big-banner"style="height:500px;padding-top:100px;">
      <div class="container">
        <h1 class="display-1">Menu</h1>

        <p class="lead text-muted">Best food in the city!</p>
        <h4 class="display-4"> Taste it now with our online order!</h4>
{{--
        <p>
          <a href="#" class="btn btn-primary my-2"></a>
          <a href="#" class="btn btn-secondary my-2"></a>
        </p> --}}
      </div>
    </div>

  <section class="container">
    <div class="row main-row">
      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
          <img src="images/2.jpg" alt="menu1" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
            <h5 class="card-tittle">PIZZA </h5>
            <p class="card-text">hgdyfgyf hjfewufhruh bfbwiugvru wuvuwr</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
             <small class="text-muted">9$</small>

          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
          <img src="images/3.jpg" alt="menu1" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
            <h5 class="card-tittle">PASTA</h5>
            <p class="card-text">hgdyfgyf hjfewufhruh bfbwiugvru wuvuwr</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
            <small class="text-muted">9$</small>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
          <img src="images/6.jpg" alt="menu1" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
            <h5 class="card-tittle">BURGERS</h5>
            <p class="card-text">hgdyfgyf hjfewufhruh bfbwiugvru wuvuwr</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
            <small class="text-muted">9$</small>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
          <img src="images/1.jpg" alt="menu1" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
            <h5 class="card-tittle">Naci</h5>
            <p class="card-text">hgdyfgyf hjfewufhruh bfbwiugvru wuvuwr</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
            <small class="text-muted">9$</small>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
          <img src="images/5.jpg" alt="menu1" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
            <h5 class="card-tittle">Buriyani</h5>
            <p class="card-text">hgdyfgyf hjfewufhruh bfbwiugvru wuvuwr</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
            <small class="text-muted">9$</small>
          </div>
        </div>
      </div>

      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
          <img src="images/hero-dark.jpg" alt="menu1" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
            <h5 class="card-tittle">chicken </h5>
            <p class="card-text">hgdyfgyf hjfewufhruh bfbwiugvru wuvuwr</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
            <small class="text-muted">9$</small>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
          <img src="images/menu-sample-sushi.jpg" alt="menu1" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
            <h5 class="card-tittle">Shushi </h5>
            <p class="card-text">hgdyfgyf hjfewufhruh bfbwiugvru wuvuwr</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
            <small class="text-muted">9$</small>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
          <img src="images/menu-sample-dessert.jpg" alt="menu1" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
            <h5 class="card-tittle">Dessert </h5>
            <p class="card-text">hgdyfgyf hjfewufhruh bfbwiugvru wuvuwr</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
            <small class="text-muted">9$</small>
          </div>
        </div>
      </div>

      @foreach($add_items as  $add_Items)


      <div class="col-md-4 mb-5">
        <div class="card p-3" style="width: 18rem;">
        <img src="{{asset('images/'.$add_Items->image)}}" alt="{{$add_Items->id}}" class="card-img-top shadow bg-white rounded">
           <div class="card-body">
           <h5 class="card-tittle">{{$add_Items->name}}</h5>
            <p class="card-text">{{$add_Items->details}}</p>
            <button type="button" class="btn btn-outline-dark">Order Now</button>
            <button type="button" class="btn btn-outline-success">Take Away</button>
           <small class="text-muted">{{$add_Items->price}}.LKR</small>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

</section>
</main>
</body>

  <footer class="container py-5">
    <div class="row">
      <div class="col-12 col-md">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>  -->
        <small class="d-block mb-3 text-muted">&copy; 2017-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-muted">Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-muted">Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-muted">Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Business</a></li>
          <li><a class="text-muted" href="#">Education</a></li>
          <li><a class="text-muted" href="#">Government</a></li>
          <li><a class="text-muted" href="#">Gaming</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5 class="text-muted">About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>

</html>
