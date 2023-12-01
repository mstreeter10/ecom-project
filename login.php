<?php      
    include('mysqli_connect.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $username = mysqli_real_escape_string($dbc, $username);  
        $password = mysqli_real_escape_string($dbc, $password);  
      
        $sql = "select *from Users where username = '$username' and password = '$password'";  
        $result = mysqli_query($dbc, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count > 0){  
            echo "<h1><center> Login successful </center></h1>"; 
			header('Location:index.html');
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  