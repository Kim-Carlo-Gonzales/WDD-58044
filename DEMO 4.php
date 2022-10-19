<html>
	<head> 
			<title> DEMO 4 Looping Statements </title>
	</head>

	<body>

		<?php
		//While loop
		$fuel = 10;
			while($fuel-->=1){
				//keep driving
				echo "There's enough fuel<br>";
			}
		echo  "<br>";
		//Do While loop
		$count = 1;
			do{
				echo "$count times 12 is ".$count*12 ."<br>";
			}
			while(++$count<=12);
		echo  "<br>";
		//For loop
			
			for($count = 1; $count<=12;++$count){
				echo "$count times 10 is ".$count*10 ."<br>";
			}
		echo  "<br>";
		
		//Foreach
		$colors = array("red", "green", "blue", "yellow");

		foreach ($colors as $value) {
		  echo "$value <br>";
		}
		echo  "<br>";
		
		$nums = array(1,2,3,4,5);

		foreach ($nums as $num) {
		  echo "$num <br>";
		}
		echo  "<br>";
		
		//Break
		for ($x = 0; $x < 10; $x++) {
		  if ($x == 4) {
			break;
		  }
		  echo "The number is: $x <br>";
		}
		echo  "<br>";
		
		//Continue
		for ($x = 0; $x < 10; $x++) {	
		  if ($x == 4) {
			echo "Forbidden Number<br>";
			continue;
		  }
		  echo "The number is: $x <br>";
		}
		echo  "<br>";
		
		// Application 1
		for($i = 0; $i<=10;$i++){
				echo "Hello $i<br>";
			}
		echo  "<br>";
			// Application 2
		for($i = 3; $i<10;$i++){
				echo "$i<br>";
		}
		?>

	</body>

</html>

