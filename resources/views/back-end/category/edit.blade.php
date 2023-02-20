
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
    <form action="{{route('category.update', $data->id)}}" method="POST">
      @csrf
   <br><br><div class="container">

<div class="form-group">
  <label for="name">name</label>
  <input type="name" class="form-control" id="name" 
   aria-describedby="name"name="name" value="{{$data->name}}">
</div>
  <button type="submit" class="btn btn-primary">Update</button>

</form>
</body>
</html>