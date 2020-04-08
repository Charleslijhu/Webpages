<?php
	//***************************************************
	//Get the ticker symbols and stock info from the form
	$tickerSymbol = "";
	if (isset($_GET["tickerSymbol"]))
	{
		$tickerSymbol=$_GET["tickerSymbol"];
	}
	
	//***************************
	//Arrays to put in the header
	$tickers = ["AMZN", "FB", "AAPL"];
	//**************************
	//Connecting to the database
	$user = "root";
	$pw = "";
	$host = "localhost";
	$db = "stock";
	
	$connect = mysqli_connect($host, $user, $pw, $db) or die("Could not connect");
	
	$count=9;
	for ($i=0;$i<3;$i++)
	{
		if($tickerSymbol==$tickers[$i])
		{
			$count=$i;
		}
	}
	
	//Companies not in the database
	if ($count==9)
	{
		echo "<h3>Sorry, we do not have the company info you searched at this time.</h3>";
	}
	
	//Amazon
	if ($count==0)
	{
	echo "<h1>Amazon.com, Inc</h1>";
		//**************************************
		//Return Amazon, Stock Price Information
		if(isset($_GET["stockPrice"]))
			{echo "<br />";
			echo "<h4>" . "Stock Price Information" . "</h4>";
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"AMZN\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Recent Stock Price: " . $row["recentStockPrice"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "High Price: " . $row["highPrice"] . "<br />" . "<br />" . "</p>";  
						echo "<p>" . "Low Price: " . $row["lowPrice"] . "</p>";
					}
			}
		//******************************************
		//Return Amazon, Company Summary Information
		if(isset($_GET["companySumInfo"]))
			{echo "<br />";
			echo "<h4>" . "Company Summary Information" . "</h4>";	
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"AMZN\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Introduction: " . $row["introductionSimp"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "Location: " . $row["location"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "Revenue: " . $row["revenue"] . "</p>";
					}
			}
		//*******************************************
		//Return Amazon, Detailed Company Information
		if(isset($_GET["companyDetail"]))
			{echo "<br />";
			echo "<h4>" . "Detailed Company Information" . "</h4>";	
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"AMZN\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Detailed Information: " . $row["detailedInfo"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #1: " . "<br />" . "</p>";
						echo "<img src='amznPic1.jpg' alt='amznPic1' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer1"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #2：" . "<br />" . "</p>"; 
						echo "<img src='amznPic2.jpg' alt='amznPic2' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer2"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #3: " . "<br />" . "</p>"; 
						echo "<img src='amznPic3.jpg' alt='amznPic3' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer3"] . "<br />" . "<br />" . "</p>";
					}
			}
	}
	
	//Facebook
	if ($count==1)
	{
	echo "<h1>Facebook, Inc</h1>";
		//****************************************
		//Return Facebook, Stock Price Information
		if(isset($_GET["stockPrice"]))
			{echo "<br />";
			echo "<h4>" . "Stock Price Information" . "</h4>";
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"FB\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Recent Stock Price: " . $row["recentStockPrice"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "High Price: " . $row["highPrice"] . "<br />" . "<br />" . "</p>";  
						echo "<p>" . "Low Price: " . $row["lowPrice"] . "</p>";
					}	
			}
		//******************************************
		//Return Facebook, Company Summary Information
		if(isset($_GET["companySumInfo"]))
			{echo "<br />";
			echo "<h4>" . "Company Summary Information" . "</h4>";	
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"FB\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Introduction: " . $row["introductionSimp"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "Location: " . $row["location"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "Revenue: " . $row["revenue"] . "</p>";					}
			}
		//*******************************************
		//Return Facebook, Detailed Company Information
		if(isset($_GET["companyDetail"]))
			{echo "<br />";
			echo "<h4>" . "Detailed Company Information" . "</h4>";	
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"FB\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Detailed Information: " . $row["detailedInfo"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #1: " . "<br />" . "</p>";
						echo "<img src='fbPic1.jpg' alt='fbPic1' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer1"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #2：" . "<br />" . "</p>"; 
						echo "<img src='fbPic2.jpg' alt='fbPic2' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer2"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #3: " . "<br />" . "</p>"; 
						echo "<img src='fbPic3.jpg' alt='fbPic3' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer3"] . "<br />" . "<br />" . "</p>";
					}
			}
	}
	
	//Apple
	if ($count==2)
	{
	echo "<h1>Apple Inc</h1>";
		//****************************************
		//Return Apple, Stock Price Information
		if(isset($_GET["stockPrice"]))
			{echo "<br />";
			echo "<h4>" . "Stock Price Information" . "</h4>";
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"AAPL\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Recent Stock Price: " . $row["recentStockPrice"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "High Price: " . $row["highPrice"] . "<br />" . "<br />" . "</p>";  
						echo "<p>" . "Low Price: " . $row["lowPrice"] . "</p>";					}	
			}
		//******************************************
		//Return Apple, Company Summary Information
		if(isset($_GET["companySumInfo"]))
			{echo "<br />";
			echo "<h4>" . "Company Summary Information" . "</h4>";	
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"AAPL\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Introduction: " . $row["introductionSimp"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "Location: " . $row["location"] . "<br />" . "<br />" . "</p>"; 
						echo "<p>" . "Revenue: " . $row["revenue"] . "</p>";					}
			}
		//*******************************************
		//Return Apple, Detailed Company Information
		if(isset($_GET["companyDetail"]))
			{echo "<br />";
			echo "<h4>" . "Detailed Company Information" . "</h4>";	
			//******************
			//Selecting from SQL
				$sql = "SELECT * FROM stockinfo WHERE tickerSymbolSQL = \"AAPL\" ";
				$result = mysqli_query($connect, $sql);
				while($row=$result->fetch_assoc())
					{
						echo "<p>" . "Detailed Information: " . $row["detailedInfo"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #1: " . "<br />" . "</p>";
						echo "<img src='aaplPic1.jpg' alt='aaplPic1' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer1"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #2：" . "<br />" . "</p>"; 
						echo "<img src='aaplPic2.jpg' alt='aaplPic2' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer2"] . "<br />" . "<br />" . "</p>";
						echo "<p>" . "Top Officers #3: " . "<br />" . "</p>"; 
						echo "<img src='aaplPic3.jpg' alt='aaplPic3' width='90' height='120' />"."<br/>";
						echo "<p>" . $row["officer3"] . "<br />" . "<br />" . "</p>";					}
			}	
	}
?>


