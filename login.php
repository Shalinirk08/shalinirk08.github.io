<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include './index.php';
         if(isset($_POST['submi']))
         {
            $usrname=$_POST['usr_nm'];
            $password=$_POST['usr_pass'];
            echo "hello you entered ".$usrname." and password is ".$password;
             if (!$con) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            else 
            {
                //  echo "Connected successfully";
                    
                echo 'hello world pleas help';
                    $jef= "SELECT * FROM users where username='$usrname' and password='$password'";
                    echo $jef;
                    $result = mysqli_query($con, $jef);
                    
                //    $qu="INSERT INTO users (username, password, email, accntno, balance) VALUES ('$regusrname','$regpassword','$regemail','$regacc','$amount');";
                //    echo "<br> your query is <br>".$qu;
                 //   $state= mysqli_query($con, $qu);
                    
                  //  if($state===true)
                    //{
                      //  echo "succesfully inseterd ";
                    //}
                    //else {
                       
                      //    echo("Error description: " . mysqli_error($state));
                        //echo "some erroe ";
                        
                   // }
                  
                    if (mysqli_num_rows($result) > 0) {
                        session_start();
                            echo 'user exist <br> <br>';
                            while($row = mysqli_fetch_assoc($result)) {
                 //echo "id: " . $row["Sno"]. " - Name: " . $row["username"]. " " . $row["email"]." ".$row["accntno"]." ".$row["balance"]. "<br>";
                        $_SESSION["Sno"]=$row["Sno"];
                        $_SESSION["username"]=$row["username"];
                        $_SESSION["email"]=$row["email"];
                        $_SESSION["accntno"]=$row["accntno"];
                        $_SESSION["balance"]=$row["balance"];
                       
                        break;
                 
                            }
} else {
    echo "0 results";
}

header('Location: transfer.php');  
            }
            
         }
                
        ?>
        <form action="login.php" method="POST" style="border: 2px solid black ;width: 250px">
            <legend>
                Username <input type="text" name="usr_nm">
                <br>
                Password <input type="password" name="usr_pass">
                <br>
                 <input type="submit" name="submi" value="submit">
            </legend>
            
        </form>
    </body>
</html>

