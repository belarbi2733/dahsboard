<?php  
    include("db.php");
	session_start();
	//echo $_SESSION['id1'];
	
	if (isset($_GET["page"])) 
	{ 
		$page  = $_GET["page"]; 
	}
  if (isset($_GET["type_algo"])) 
	{ 
		$type_algo1  = $_GET["type_algo"]; 
	}
	if(isset($_SESSION))
	{
		$id1=$_SESSION['id1'];
		$sql="select * from users where id=$id1";
		$result = $conn->query($sql);
		if ($row = mysqli_fetch_assoc($result)) 
		{
			$_SESSION['user']=$row["user_name"];
			//echo "yes";
		}
		else
		{
			// echo $_SERVER['REQUEST_URI'];
			// echo $page;
			if (($_SERVER['REQUEST_URI']!="/index.php") && ($_SERVER['REQUEST_URI']!="/index.php?page=".$page) && ($_SERVER['REQUEST_URI']!="/index.php?type_algo=".$type_algo1))
			{
				if($_SERVER['REQUEST_URI']!="/admin.php")
					header('Location: ../../index.php');
				else
					header('Location: index.php');
			}
		}

	}
	
    
?>