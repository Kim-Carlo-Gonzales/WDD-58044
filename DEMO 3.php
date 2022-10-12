<html>
	<head> 
			<title> My First Web Page </title>
	</head>

	<body>

		<?php
			//Equality 
			$month = "December";
			if ($month == "December") echo "It's Christmas time<br>";
			
			echo "<br>";
			
			//Inequality 
			$a = "1000";
			$b = "+1000";
			if ($a != $b) 	echo "1 <br>"; 	// check if same value
			if ($a !== $b) 	echo "2 <br>"; 	// check if same value and same data type
			echo "<br>";
			
			//Comparison Operators
			$a = 2;
			$b = 3;
			if ($a > $b) 		echo "a is greater than b <br>";
			elseif ($a < $b) 	echo "a is less than b <br>";
			elseif ($a >= $b) 	echo "a is greater than or equal to b <br>";
			elseif ($a <= $b) 	echo "a is less than or equal to b <br>";
			echo "<br>";
			
			//Logical Operators
			$a = 1;
			$b = 0;
			echo ($a AND $b). "<br>";	//0
			echo ($a OR $b). "<br>";	//1
			echo ($a XOR $b). "<br>";	//1
			echo !$a. "<br>";			//0
			echo "<br>";
			
			//Conditionals 
			$bank_balance = 99;
			if ($bank_balance<100)
			{
				$money = 1000;
				$bank_balance += $money;
				echo "Bank Balance: $bank_balance<br>";
			}
			elseif ($bank_balance>200)
			{
				$savings += 100;
				$bank_balance -= 100;
				echo "Bank Balance: $bank_balance<br>";
			}
			else 
			{
				//d
			}
			
			
				//Switch Statement
			$page = "Home";
			switch($page)
			{
				case "Home":
					echo "You selected Home <br>";
					break;
				case "Login":
					echo "You selected Login<br>";
					break;
				case "Links":
					echo "You selected Links<br>";
					break;
			}		
			echo "<br>";
			
			
			// Activity
			
			$grade = 99;
			//$grade = 65;
			//$grade = 55;
			
			if($grade>70) echo "You passed <br>";
			elseif ($grade<70 and $grade>59) echo "Remedial <br>";
			else echo"Failed <br>";
			
		?>

	</body>

</html>

