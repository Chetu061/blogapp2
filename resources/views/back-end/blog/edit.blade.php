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
        <form action="{{ route('blogs.update', $data->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="title">title</label>
                <input type="title" class="form-control" name="title" id="title" aria-describedby="title"
                    value="{{ $data->title }}">
            </div>
            <div class="form-group">
                <label for="description">description</label>
                <input type="description" class="form-control" id="description" name="description"
                    aria-describedby="description" value="{{ $data->description }}">
            </div>

            <!--<div class="form-group">
    <label for="image">image</label>
    <input type="file" aria-describedby="image"  class="form-control"
    id="image" name="image" value="{{ $data->image }}">
  </div>-->

            <!--dropdown-->
            <div class="mb-3 col-md-6">
                <label class="form-label" for="category_id">category <span class="text-danger">*</span></label>
                <select class="form-control" name="category_id">
                    <option selected="" disabled="">choose a category</option>
                    @foreach ($cust as $d)
                        <option {{ $d['id'] == $data['category_id'] ? 'selected' : '' }} value="{{ $d['id'] }}">
                            {{ $d['name'] }}</option>
                    @endforeach
                </select>

            </div>





            <!--or code of dropdown-->
            <!--<div class="form-group">
                <label for="exampleFormControlSelect1">Example select</label>
                <select name="category_id" id="cars">
                  @foreach ($cust as $d)
<option value="{{ $d->id }}">{{ $d->name }}</option>
@endforeach
</select>
              </div>-->
            <!--end dropdown-->
            <button type="submit" class="btn btn-primary">update</button>
    </div>
    </form>
</body>

</html>
