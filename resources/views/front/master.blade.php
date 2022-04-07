
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="{{asset('application/x-javascript')}}"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{asset('css/bootstrap.min.css')}}" rel='stylesheet' type='text/css' />
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- Custom Theme files -->
<link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href="{{asset('css/font-awesome.css')}}" rel="stylesheet"> 
<style type="text/css">
    #mo,#details,#sights{
        border-radius: 5px;
         width: 300px;
         margin-bottom: 7px;
         float: left;}
         .mm {
  display:inline-block;
    *display: inline;     /* for IE7*/
    zoom:1;              /* for IE7*/
    float: left;
    padding-top: 5px;
    text-align: left;
    width: 100px;
}​


    
</style>
</head>
<body>
@yield('content')
</body>
</html>	