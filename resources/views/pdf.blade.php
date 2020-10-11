<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <main>
    <div class="container">
        <h4 class="display-4">Yummy Hut Menu-PDF</h4>
        <div class="blockquote text-right">
            <a href="/downloadPDF" class="btn btn-info">Download</a>
            </div>

        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">image id</th>
              <th scope="col">Name</th>
              <th scope="col">Item code</th>
              <th scope="col">Price</th>
              <th scope="col">Details</th>

            </tr>
          </thead>
          <tbody>
            <tr>
              @foreach( $item as $item)
              <th scope="row">{{$item->id}}</th>
              <td><img src="{{ asset('images/')}}"alt="{{$item->image}}"></td>
              <td>{{$item->name}}</td>
              <td>{{$item->item_code}}</td>
              <td>{{$item->price}}</td>
              <td>{{$item->details}}</td>
                </tr>
                @endforeach
          </tbody>
        </table>
      </div>

    </main>

</body>

</html>
