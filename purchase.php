<!DOCTYPE html>
<html>

<head>
        <title>Registration Successful</title>
        <meta charset="utf-8" />
		<meta name="description" content="Thrifty Homepage" /> 
		<meta name="author" content="" />
		<meta name="keywords" content="index" />
        <link rel="stylesheet" href="css/styles.css">
</head>

<body class="normal">
        <nav class="topnav">
            <a class="logo" href="login.html">Thrifty</a>
            <a class="active" href="login.html">Login</a>
        </nav>
<div class="welcome">
<div class="welcome-txt">
<h2>
    Welcome to Thrifty
</h2>
</div>
</div>

<div class="about">
 <div class="featured">
        <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') 
		{

                require("mysqli_connect.php");
                $order = $_REQUEST['shopitem'];
                

                $sql = "INSERT INTO Orders(product) VALUES ('$order')";

                if (mysqli_query($dbc, $sql)) 
				{
                        echo "<div class='logtext'><h3>You have succesfully purchased </h3></div>"; 
                } else 
				{
                        echo "ERROR: Hush! Sorry $sql. "
                                . mysqli_error($dbc);
                }
                mysqli_close($dbc);
        } else 
		{
                header('Location:index.html');
        }               
		?>
</div>
</div>


</body>
</html