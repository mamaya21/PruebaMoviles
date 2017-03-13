<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Demo</title>
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>

<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>

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


<script type="text/javascript">
$(document).delegate('#simpleraw', 'click', function() {
    $(this).simpledialog({
        'mode' : 'blank',
        'prompt': false,
        'forceInput': false,
        'useModal':true,
        'fullHTML' : 
            "<ul data-role='listview'><li>Some</li><li>List</li><li>Items</li></ul><a rel='close' data-role='button' href='#' id='simpleclose'>Close</a>"
    })
});
</script>

</head> 
<body> 

<?php
	$num='986619455';
	?>
    	<div data-role="page" id="page2">
	<div data-role="header">
		<h1>Página dos</h1> 
	</div>
	<div data-role="content">	
		<ul data-role="listview">
            <form style="padding:5px;" name="formu" id="formu">
            <label>
            	<input type="text" name="txttelf" id="txttelf" /></label>
            <label>
            	<a href="#" onClick="btnf()">Llamando al RPC de VS</a>
            </label>
            </form>
        
            <li><a href="tel:numero_t">Num..</a></li>
            
            <li><a href="tel:'986619455'">Llamando al RPC de VS</a></li>
            
            <li><a id="link">this is a link</a></li>
            <li><a href="#" onClick="btnf()">llamame</a></li>
		</ul>	
	</div>
    <a href="#" id="dialoglink" data-role="button">Open Dialog</a>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

    <?php

?>

</body>
</html>