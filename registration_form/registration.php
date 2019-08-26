<?php 

	/*$servername = "";
	$username = "";
	$password = "";
	$database_name = "";
	$id = 0;*/

	//connect to database

	$db = mysqli_connect('localhost','root','','registration');

	if ($db->connect_error) 
	{
		die("Connection failed: " . $db->connect_error);
	}
	else 
	{
		echo '"connection ok"';
	}
		 



	//if save button is clicked
	if(isset($_POST['save']))
		{
			$Username= $_POST['uname'];
			$Email_Address = $_POST['email'];
			$Password = $_POST['pwd'];
			$First_Name = $_POST['fname'];
			$Last_Name = $_POST['lname'];
            $Gender = $_POST['gender'];
			$describe = $_POST['describe'];
          
			$query = "INSERT INTO reg (Name, Email, Password, First_Name, Last_Name,Gender,description) VALUES ('$Username','$Email_Address', '$Password','$First_Name','$Last_Name','$Gender','$describe')";
			
			mysqli_query($db,$query);
			header('location: index.php'); //redirect to index page after inserting
		}
		//$results = mysqli_query($db,"SELECT * FROM subscribe");
?>