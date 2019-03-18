<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Upload File</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
<!--    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
   <script src="main.js"></script>  -->
</head>
<body>
    <h1>/upload</h1>
   <form action="{{URL::to('/store')}}" enctype="multipart/form-data" method="post">
       <input type="file" name="image" value="">
       <input type="hidden" name="_token" value="{{csrf_token()}}">
       <button type="submit" name="button">Upload Image</button>
       <br>
       <br>
       <br>
       <br>
       <a href="{{route('downloadfile',$file->id)}}" class="btn btn-primary">Download</a>


   </form>
</body>
</html>