<html>
	<head> 
			<title> My First Web Page </title>
	</head>

	<body>

		<?php
			$content = "Welcome to PHP Programming<br>";
			$a = 5;
			$x = 8;
			$y = 8;
			$b = "Hi ";
			$c = "again ";
			
			$_msg='Hello again';
			$res = $b.$c;
			
			define("value", 100);	//case sensitive
				echo value;
			
			echo $content;
			echo $res. "<br>";
			echo "<br>". $a;
			echo "<br>". $_msg;
			//single line comment
			/*
				Multi-line Comment
			*/
			
			//Arithmetic operations
			echo "<br>";
			echo $x+$y.  "\n";
			echo "<br>";
			echo $x/$y.  "\n";
			echo "<br>";
			echo $x**$y. "\n";
			echo "<br>";
			echo $x%$y.  "\n";
			echo "<br>";
			
			if ($x===$y)
			{
				echo "They are identical"."\n";
			}
			else
			{
				echo "They are not identical"."\n";
			}
			
			echo "<br>";
			echo $b.=$c;
			
			//Looping statement
			echo"<br>";
			//For loop
			for ($a = 5; $a>=1;$a--)
			{
				echo $a."\n";
			}
			
			//Looping statement
			echo "<br>";
			//while loop
			$a = 5;
			
			while ($a > 0)
			{
				echo $a."\n";
				$a--;
			}
			
			$a = 5;
			//Looping statement
			echo "<br>";
			//do..while loop
			do 
			{
			  echo $a."\n";
			  $a--;
			} 
			while ($a > 0);
		?>

	</body>

</html>