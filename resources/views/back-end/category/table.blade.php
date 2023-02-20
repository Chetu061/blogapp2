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
  <!--message code-->
  @if(session()->has('message'))
  <div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif

<a href="{{route('category.create')}}"><button type="button"class="btn btn-warning">
  add</button><br><br>
<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
       <th scope="col">action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
      <tr>
        <td scope="row">{{$d->id}}</td>
        <td>{{$d->name}}</td>
   <td>    
<button type="button" class="btn btn-light"><a href="{{route('category.edit',$d->id)}}">Edit </a></button>
<button type="button"class="btn btn-warning"><a href="{{route('category.delete',$d->id)}}">delete</a></button>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table>

</body>
</html>