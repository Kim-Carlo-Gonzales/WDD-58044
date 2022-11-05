<html>
	<head> 
			<title> LONG QUIZ 2 </title>
	</head>

	<body>
	
		
		<?php
			//problem 1
			/*Problem 1Problem 1. Create a PHP program that will perform the following mathematical operations, to produce the required output.
			Given the following values:
			
			Salary_rate = 600/day
			Salary = Salary_rate*15 days
			Taxable_amount = 30% of Salary
			Net_pay = Salary - Taxable_amount
			*/
			echo "<h2>Problem 1. Create a PHP program that will perform the following mathematical operations, to produce the required output.<br>";
			echo "Given the following values:</h2>";
			echo "Salary_rate = 600/day<br>";
			echo "Salary = Salary_rate*15 days<br>";
			echo "Taxable_amount = 30% of Salary<br>";
			echo "Net_pay = Salary - Taxable_amount<br> <br>";
			
			
			$Salary_rate = 600; // per day
			echo "<b>Salary Rate: </b>".$Salary_rate."<br>";
			$Salary = $Salary_rate * 15;
			echo  "<b>Salary in 15 days: </b>".$Salary."<br>";
			$Taxable_amount = $Salary *.3; //30% tax
			echo "<b>Tax: </b>".$Taxable_amount."<br>";
			$Net_pay = $Salary - $Taxable_amount;
			echo "<b>Net Worth: </b>".$Net_pay."<br> <br>";
			
			
			
			
			//problem 2
			//Problem 2. Create a PHP program that will add all positive integers from 1-50 using loop statement.
			echo "<h2>Problem 2. Create a PHP program that will add all positive integers from 1-50 using loop statement. </h2>";
			
			$num = 0;
			for($i = 1; $i <=50; $i++)
			{
				$num += $i;
			}
			echo "<b>The Sum of positive integers 1-50 is: </b>".$num;
		?>
		
		
		

	</body>

</html>

