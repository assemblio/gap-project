<!DOCTYPE HTML>
<html>
<head>
<title> GAP Website </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="wrap">
<div class="wrapper">
<div class="logo">
	<a href="{{URL::route('index_page')}}"><h1>GAP</h1></a>
</div>
<div class="header_right">
	<div class="cssmenu">
		<ul>
		  	<li><a class="active" href="{{URL::route('index_page')}}"><span>Ballina</span></a></li>
			<li ><a href="{{URL::route('about_page')}}"><span>Per ne</span></a></li>
			<li><a href="{{URL::route('visualization_page')}}"><span>Vizualizimet</span></a></li>
			<li class="has-sub"><a href="{{URL::route('calculator_page')}}"><span>Kalkulatori</span></a></li>
			<li ><a href="{{URL::route('contact_page')}}"><span>Kontakti</span></a></li>
			<div class="clear"></div>
		 </ul>
	</div>
</div>
	<div class="clear"></div>
</div>
</div>
 @yield('content')
<div class="wrap">
<div class="wrapper">
	<div class="footer">
		<div class="social-icons">
	   		  	<ul>
			      <li class="icon_1"><a href="#" target="_blank"> </a></li>
			      <li class="icon_2"><a href="#" target="_blank"> </a></li>
			      <li class="icon_3"><a href="#" target="_blank"> </a></li>
			      <li class="icon_4"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
	   	 </div>
		<a href="{{URL::route('index_page')}}"><h2>GAP</h2></a>
		<div class="copy">
			<p class="w3-link">© <script>document.write(new Date().getFullYear())</script> </p>
		</div>
	</div>
</div>
<div class="clear"></div>
</div>
</body>
</html>