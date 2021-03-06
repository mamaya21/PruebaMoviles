<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Demo</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<link type="text/css" href="http://dev.jtsage.com/cdn/simpledialog/latest/jquery.mobile.simpledialog.min.css" rel="stylesheet" /> 
	<link type="text/css" href="http://dev.jtsage.com/jQM-DateBox/css/demos.css" rel="stylesheet" /> 
	
	<!-- NOTE: Script load order is significant! -->
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="http://dev.jtsage.com/cdn/simpledialog/latest/jquery.mobile.simpledialog.min.js"></script>
	
	<script type="text/javascript" src="http://dev.jtsage.com/gpretty/prettify.js"></script>
	<link type="text/css" href="http://dev.jtsage.com/gpretty/prettify.css" rel="stylesheet" />

</head> 
<body> 

<div data-role="page" id="page">
	<div data-role="header">
		<h1>Página uno</h1>
	</div>
	<div data-role="content">	
		<ul data-role="listview">
			<li><a href="pg2.html">Página dos</a></li>
            <li><a href="#page3">Página tres</a></li>
			<li><a href="#page4">Página cuatro</a></li>
		</ul>		
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>


<div data-role="page" id="page3">
	<div data-role="header">
		<h1>Página tres</h1>
	</div>
	<div data-role="content">	
		Contenido		
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

<div data-role="page" id="page4">
	<div data-role="header">
		<h1>Página cuatro</h1>
	</div>
	<div data-role="content">	
		Contenido		
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

</body>
</html>
