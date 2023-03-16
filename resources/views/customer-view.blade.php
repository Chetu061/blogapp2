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
  <div class="container">
  <div class="container">
   @if(session()->has('message'))
  <div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif 

<a href="{{route('blog.create')}}">
    <button type="button"class="btn btn-warning">
  add</button><br><br>
  
<table class="table ">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Title</th>
       <th scope="col">Description</th>
       <th scope="col">Image</th>
      <th scope="col">Category_id</th>
       <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($data as $d)
      <tr>
        <td scope="row">{{$d->id}}</td>
        <td>{{$d->title}}</td>
        <td>{!!$d->description!!}</td>

         <td>
    <img src="{{asset('uploads/'.$d->image)}}"
   width="50px"
   height="50px"alt="not image"></td>
   
   <!--category data-->
   <td>{{$d->category->name}}</td>


  <td> 
<button type="button" class="btn btn-light"><a href="{{route('blog.edit',$d->id)}}">Trash </a>
<button type="button" class="btn btn-warning"><a href="{{route('blog.delete',$d->id)}}">delete</a></button>
        </td>
      </tr>
     @endforeach
    </tbody>
  </table> 
</div>
</body>
</html>