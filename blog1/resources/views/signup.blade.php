<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Flat Sign Up Form Responsive Widget Template| Home :: W3layouts</title>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Flat Sign Up Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Raleway+Dots' rel='stylesheet' type='text/css'>



<link rel="stylesheet" href="{{ asset('css/style.css')}}" type="text/css">

<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}" type="text/css">

<link rel="stylesheet" href="{{ asset('css/main.css')}}" type="text/css">

<link rel="stylesheet" href="{{ asset('images/bg.jpg')}}"  >



</head>



<body>
<!--header-->
	<div class="header-w3l">
	 
	</div>
<!--//header-->
<!--main-->
<div class="main-agileits">
	<h2 class="sub-head">Sign Up</h2>
		<div class="sub-main">	
			
            
			{{ Form::open(array('url' => 'thanks')) }} 


			 {{ Form::label('email', 'E-Mail Address')}} 
			<br>
			{{ Form::text('email')}}
			<br>
			 {{ Form::label('jobs', 'Jobs')}} 
			<br>
			{{ Form::select('jobs', array('programmers' => 'Programmers',
			 'networks' => 'Networks', 'database' => 'Database'))}}
			 <br>

			{{  Form::checkbox('agree', 'yes') }}
			<br>
			 {{ Form::label('agrement', 'Agrement')}}  

			 <br>
			 {{ Form::label('comments', 'Comments')}}  
			<br>
			{{ Form::textarea('comments','', array('placeholder'=>'your comments please'))}}
			<br>

			{{  Form::submit('Signup!')}} 

			{{ Form::close() }}




		</div>
			<div class="clear"></div>
</div>
<!--//main-->

<!--footer-->
<div class="footer-w3">

</div>
<!--//footer-->

</body>
</html>