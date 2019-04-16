<?php
	session_start();
	//$_SESSION['id1']="2";
	$_SESSION = array();
	// Destruction de la session
	session_destroy();
	// Destruction du tableau de session
	unset($_SESSION); 
    $test=$_GET["page"];
    if($test=="admin.php" || $test=="forms.php")
	   header('Location: index.php');
    else
    {
        echo "<script>location.href='$test';</script>";
        //header("location: ".$site2);
        die();
    }
        exit();
?>