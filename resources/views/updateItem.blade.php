<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Item</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      <style>
          body{
    background-color: #212326 !important;
    background-image:url("../images/bg-food3.jpg" );
}
</style>

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

<form method="POST" action="/update/{{$add_items->id}}" enctype="multipart/form-data" >

{{csrf_field()}}
<input type="hidden" name="id" id="id" value="{{$add_items->id}}">

 <div class="card-body" >
            <div class="align-content-md-center">

        <div class="container">
            <div class="card border-primary mb-3" style="max-width: 70rem;">
                <div class="text-muted">
                    <div class="text-center">
                <h4 class="display-4" > Update Item</h4>
                    </div>

                 <div class="row">
                    <div class="col-md-12">
                        <div class="form-group" >

                            <label for="exampleFormControlInput1">1.Item Name</label>
                        <input type="text" class="form-control" name="item-name"value="{{$add_items->name}}" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput2">2.Item Code</label>
                        <input type="text" class="form-control" name="item-code" value="{{$add_items->item_code}}" placeholder="code">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput3">3.Item price</label>
                        <input type="text" class="form-control" name="item-price"value="{{$add_items->price}}"  placeholder="price">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput4">4.Item Details</label>
                        <input type="text" class="form-control" name="item-details"value="{{$add_items->details}}"  placeholder="Details">


                         <div class="form-group">
                                <label for="exampleFormControlInput5">5.Add Image</label><br>
                                <input data-preview="#preview" name="input_img" value="{{$add_items->image}}" type="file" id="imageInput">
                                <img class="col-sm-6" id="preview"  src="">
                            </div>

                        {{ method_field('PUT') }}
                        <br>
                        <div class="text-center">
                        <input type="submit" class="btn btn-outline-dark" value="UPDATE">
                        <input type="reset" class="btn btn-outline-danger" value="CLEAR">
                        </div>

                        </div>

                    </div>

                </div>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
    </form>
        </form>




    </main>
    </body>
</html>
