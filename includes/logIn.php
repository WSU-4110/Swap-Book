<?php



$LogInFailed = false;
//print_r($_POST);
	if (!empty($_POST))
	{

	if( isset($_POST["doSearch"]) && $_POST["doSearch"] == "yes" )
	{
		if($_POST["searchText"])
		{

			$servername = "localhost";
			$username = "root";
			$password = "2020";
			$dbname = "swapbook";

			// Create connection
			$searchConnection = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($searchConnection->connect_error) {
				die("Connection failed: " . $searchConnection->connect_error);
			}

			$searchText = $_POST["searchText"];
			if(isset($_POST["type"]))
			{
				$type =  $_POST["type"];
			   $sql = "select * from book where (author like '%".$searchText."%' or title like '%".$searchText."%' or isbn like'%".$searchText."%') and type  = ".$type;
			
			}
			else {
				$sql = "select * from book where (author like '%".$searchText."%' or title like '%".$searchText."%' or isbn like'%".$searchText."%') ";
			}
		

			//echo "<br><br><br>";
			//var_dump($searchConnection);
			$SearchResult = $searchConnection->query($sql);
			//echo "<br><br><br>";
			//var_dump($searchConnection);
			//echo "<br><br><br>";
			//var_dump($SearchResult);
			if ($SearchResult->num_rows> 0) {

			} 
			else {
	echo "No results!!!!!!!!!!!!!!";
}


		}
		$searchConnection->close();

	}

	else if( isset($_POST["signOut"]))
	{
		$_SESSION["loggedIn"] = false;
	}
	else if(  $_POST["InputEmail1"] &&  $_POST["InputPassword1"] )
		{


			$LogInFailed = true;
			$userName = $_POST["InputEmail1"];
			$password = $_POST["InputPassword1"];
			$sql = "SELECT user_id,  username, password, permission_level, name FROM swapbook.user
			where username = '".$userName."' and password = '".$password."'";


			echo "<!--".$sql."-->";





			$servername = "localhost";
$username = "root";
$password = "2020";
$dbname = "swapbook";

// Create connection
$mainConnection = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mainConnection->connect_error) {
    die("Connection failed: " . $mainConnection->connect_error);
}


			$result = $mainConnection->query($sql);

			if ($result->num_rows > 0) {
				// output data of each row
				//int found = false;
				////while($row = $result->fetch_assoc()) {
				//	found = true;
					//echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
				//}
				$_SESSION["loggedIn"] = true;
				$LogInFailed = false;
			} 
			else 
			{
				echo "<!--0 results-->";
			}
			$mainConnection->close();
		}
		else 
		{
			echo "<!--bad logging -->";
	
		}
	}
	else 
	{
	echo "<!--Empty Post-->";
	}
	


?>