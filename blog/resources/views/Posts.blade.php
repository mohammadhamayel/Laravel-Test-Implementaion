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
          <li class="active"><a href="{{ url('/Posts') }}">POSTS</a></li>
          <li><a href="{{ url('/categories') }}">CATEGORIES</a></li>
        </ul>
      
      </nav>
      <div class="text-center bar">
        <a href="#"><h3>Create page</h3></a>
        <a href="#"><h3>Edit page</h3></a>

      </div>
      <div class="">
        <div class="row">
          <div class="col-sm-4">
            <div class="sidebar">
              <div class="navbar">
                <h3>Post Actions</h3>
                <ul class="sidebar-nav">
                  <li>
                      <a href="#" onclick="openForm()">Add</a>
                  </li>
                  <li>
                      <a href="{{url('post/stud_view')}}">Edit</a>
                  </li>
                  <li>
                      <a href="#">Delete</a>
                  </li>
                </ul>
              </div>  
            </div>
          </div>
          <div class="container col-sm-8">
            
            <!-- <table class="col-md-12">

              <tbody >
                @for ($j = 0; $j < 2; $j++)
                  <tr>
                    @for ($i = 0; $i < 4; $i++)
                      <td class="col-md-3" >The Laravel framework has a few system requirements. Of course, all of these requirements are satisfied by the Laravel Homestead virtual machine, so it's highly recommended that you use Homestead as your local Laravel development environment.
                      </td>
                    @endfor                                
                  </tr>
                @endfor     
              </tbody>
            </table> -->
            @yield('content')
            

          </div>  
        </div>
      </div>
      <div class="chat-popup" id="myForm">

        <!-- <form action="post" class="form-container">
          <h1>Add POST</h1>
          <textarea placeholder="Type message.." name="msg" required>     </textarea>

          <button type="submit" class="btn">Send</button>
          <button type="button" class="btn cancel"                   onclick="closeForm()">Close</button>
        </form> -->


        {{ Form::open(array('url' => 'Posts'),['class'=>'form-container']) }} 
          <h1>Add POST</h1>

          {{ Form::textarea('post','', array('placeholder'=>'Enter your post'))}}
          <br>

          {{  Form::submit('Post',['class'=>'btn btn-primary'])}} 

          <a href="" onclick="closeForm()">{{  Form::button('Cancel',['class'=>'btn cancel'])}}</a>

          

        {{ Form::close() }}


      </div>

    <script type="text/javascript">
      function openForm() {
          document.getElementById("myForm").style.display = "block";
      }

      function closeForm() {
          document.getElementById("myForm").style.display = "none";
      }
    </script>
    </body>
</html>
