<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" 
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
  </head>
<body>
@if($errors->any())
  <ul>
    @foreach($errors->all()  as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>
@endif
<div class="container">
 
<form  action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
     @csrf 
   <br><br>

<div class="form-group">
    <label for="title">title</label>
    <input type="title" class="form-control" name="title"
    id="title" aria-describedby="title" value="{{old('title')}}">
    </div>
    <!--ck editor-->
    <div class="form-group">
      <label for="description">description</label>
      <textarea type="text" class="form-control" id="description" placeholder="Enter description"
          name="description" value="{{old('description')}}"></textarea>
  </div>



  <!--<div class="form-group">
    <label for="description">description</label>
    <input type="description" class="form-control" id="description" name="description"
     aria-describedby="description" value="{{old('description')}}">
  </div>-->
  
  <div class="form-group">
    <label for="image">image</label>
    <input type="file" aria-describedby="image"  class="form-control" 
    id="image" name="image" value="{{old('image')}}">
  </div>
<!--dropdown code for relation-->
  <div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="category_id">
                    @foreach($categories as $category)
                  <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
              </div><!--end dropdown-->

  <button type="submit" class="btn btn-primary">Submit</button>

  <!--cd editor-->
<script>
  ClassicEditor
  .create(document.querySelector('#description'))
  .catch(error=>{
    console.error(error);
  })</script>
</form></div>

 </div>
</body>
</html>