<html>
  <head>
    <title> -TEST-
    </title>
	<script src="jquery-3.4.1.min.js"></script>
	<?php
		$myfile = fopen("data.txt", "w") or die("Unable to open file!");
		$txt = "Mickey Mouse\n";
		fwrite($myfile, $txt);
		$txt = "Minnie Mouse\n";
		fwrite($myfile, $txt);
		fclose($myfile);
	?>
	<script>
		function readFile() {
	 		jQuery.get("data.txt", function(txt){
				$('#htmlText').text(txt);
			});
		};
	  
	 </script>
  </head>
  <body onload="readFile();">
      <h5 id = "htmlText">
        
      </h5>
      <h1>
	      lol
      </h1>
	  
  </body>
</html>
