<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>Demo</title>
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>

<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>

<script type=”text/javascript”>
	function btnf() {
		
		var adi=document.formu.txttelf.value;
	window.plugins.CallNumber.callNumber(function () { }, function e() { }, adi);
	}
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
        
            <li><a href="tel:<?php print('986619455');?>">Num..<?php print('986619455');?></a></li>
            
            <li><a href="tel:'986619455'">Llamando al RPC de VS</a></li>
		</ul>	
	</div>
	<div data-role="footer">
		<h4>Pie de página</h4>
	</div>
</div>

    <?php

?>

</body>
</html>