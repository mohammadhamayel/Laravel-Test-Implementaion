<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/blog.css">

    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
              <a class="navbar-brand" href="{{url('/')}}">BLOG TEST</a>
            </div>
            <ul class="nav navbar-nav">
              <li ><a href="#">Home</a></li>
              <li ><a href="{{ url('/Posts') }}">POSTS</a></li>
              <li class="active"><a href="{{ url('/categories') }}">CATEGORIES</a></li>
            </ul>
      
        </nav>
        <div class="text-center bar">
          <a href=""><h3>Create Page</h3></a>
          <a href=""><h3>Edit Page</h3></a>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar">
                  <div class="navbar">
                    <h3>Category Actions</h3>
                    <ul class="sidebar-nav">
                      <li>
                          <a href="#" onclick="openForm()">Add</a>
                      </li>
                      <li>
                          <a href="#">Edit</a>
                      </li>
                      <li>
                          <a href="#">Delete</a>
                      </li>
                    </ul>
                  </div>  
                </div>
            </div>
            
            <div class="col-md-8">

                <div class="content">

                    <div class="">
                        <a href="#"><img alt="TREE" width="200" height="200" src="images/image1.jpg"></a>
                        <a href="#"><img alt="house" width="200" height="200" src="images/image2.jpg"></a>
                        <a href="#"><img alt="ship" width="200px" height="200px" src="images/image3.jpg"></a>
                        <a href="#"><img alt="lack" width="200px" height="200px" src="images/image4.jpg"></a>
                        <a href="#"><img alt="lack" width="200px" height="200px" src="images/image2.webp"></a>

                    </div>

                </div>
            </div>
        </div>    
    </body>
</html>
