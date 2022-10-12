<html>
	<head> 
			<title> Grading System </title>
	</head>

	<body>

		<?php
			// Activity
			
			$grade = 99;
			//$grade = 65;
			//$grade = 55;
			
			if($grade>70) echo "You passed <br>";
			elseif ($grade<70 and $grade>59) echo "Take a Remedial <br>";
			else echo" You Failed <br>";
			
		?>

	</body>

</html>