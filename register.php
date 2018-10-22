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
        if(isset($_POST['sub']))
        {
            $regusrname=$_POST['regusr_nm'];
            $regpassword=$_POST['regusr_pass'];
            $regemail=$_POST['usr_eml'];
            $regacc=$_POST['usr_acct'];
           // echo "hello you entered ".$regusrname." and password is ".$regpassword." and email id is ".$regemail." and accont not is ".$regacc;
           // echo "<br>";
           // echo "entering into database <br> ";
            $server="webtech.karunya.edu";
            
          //  $con= mysqli_connect($server,"UR16CS203", "UR16CS203", "UR16CS203");
            if (!$con) 
            {
                die("Connection failed: " . mysqli_connect_error());
            }
            else 
            {
                //  echo "Connected successfully";
                    $amount=1000;
                    $qu="INSERT INTO users (username, password, email, accntno, balance) VALUES ('$regusrname','$regpassword','$regemail','$regacc','$amount');";
                //    echo "<br> your query is <br>".$qu;
                    $state= mysqli_query($con, $qu);
                    
                    if($state===true)
                    {
                        echo "succesfully inseterd ";
                    }
                    else {
                       
                          echo("Error description: " . mysqli_error($state));
                        echo "some erroe ";
                        
                    }
                  
            }
          header('Location: login.php');   
        }
        


        ?>
        <form action="register.php" method="POST">
            <legend>
                Username <input type="text" name="regusr_nm">
                <br>
                Password <input type="password" name="regusr_pass">
                <br>
                email <input type="email" name="usr_eml">
                <br>
                Accnt no <input type="number" name="usr_acct">
                <br>
                <input type="submit" name="sub" value="submit">
            </legend>
            
        </form>
    </body>
</html>

