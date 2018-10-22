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
        session_start();
         
        if(isset($_POST['balance']))
         {
             $from_accntno=$_SESSION['accntno'];
            $jef= "SELECT * FROM users where accntno=$from_accntno";
          //   echo $jef;
             $result = mysqli_query($con, $jef);
                                if (mysqli_num_rows($result) > 0) {
                                    
                          //  echo 'user exist <br> <br>';
                            while($row = mysqli_fetch_assoc($result)) {
                                    $_SESSION['balance']=$row['balance'];
                       
                        break;
                 
                            }
} else {
 //   echo "0 results";
}
            echo 'Hi <br> '.$_SESSION['username']."<br>your balance is ".$_SESSION['balance']; 
         }
         
        
        
        if(isset($_POST['logout']))
         {
             
             session_destroy();
             echo 'location';
             header('Location: loadup.php'); 
         }
              if(isset($_POST['transfer']))
         {
             $from_accntno=$_POST['tacntno'];
            $to_accntno=$_POST['facntno'];
            $money=$_POST['tamount'];
           //  echo 'hello world pleas help';
            // echo $from_accntno;
             $jef= "SELECT * FROM users where accntno=$from_accntno";
          //   echo $jef;
             $result = mysqli_query($con, $jef);
                                if (mysqli_num_rows($result) > 0) {
                                    
                          //  echo 'user exist <br> <br>';
                            while($row = mysqli_fetch_assoc($result)) {
                                    $from_cuurent_bal=$row['balance'];
                       
                        break;
                 
                            }
} else {
    echo "0 results";
}
             $jef= "SELECT * FROM users where accntno=$to_accntno";
            // echo $jef;
             $result = mysqli_query($con, $jef);
                                if (mysqli_num_rows($result) > 0) {
                                    
                           // echo 'user exist <br> <br>';
                            while($row = mysqli_fetch_assoc($result)) {
                                    $to_cuurent_bal=$row['balance'];
                       
                        break;
                 
                            }
} else {
    echo "0 results";
}

echo "from accnt no has balance <br>";
echo $from_cuurent_bal;
echo "<br>to current bal is <br>";
echo $to_cuurent_bal;
echo "<br>Transfering a amount of ".$money." from ".$from_accntno." to ".$to_accntno."<br>";
             
             $from_rem_bal=$from_cuurent_bal-$money;       
             $jef= "UPDATE users set balance=$from_rem_bal where accntno=$from_accntno";
             $result = mysqli_query($con, $jef);
             $to_rem_bal=$to_cuurent_bal+$money;
             $jef= "UPDATE users set balance=$to_rem_bal where accntno=$to_accntno";
             $result = mysqli_query($con, $jef);
             
             echo "<br> AFTER TRANSFERING <br>";
             $jef= "SELECT * FROM users where accntno=$from_accntno";
            // echo $jef;
             $result = mysqli_query($con, $jef);
                                if (mysqli_num_rows($result) > 0) {
                                    
                          //  echo 'user exist <br> <br>';
                            while($row = mysqli_fetch_assoc($result)) {
                                    $from_new_bal=$row['balance'];
                       
                        break;
                 
                            }
} else {
    //echo "0 results";
}
             $jef= "SELECT * FROM users where accntno=$to_accntno";
            // echo $jef;
             $result = mysqli_query($con, $jef);
                                if (mysqli_num_rows($result) > 0) {
                                    
                           // echo 'user exist <br> <br>';
                            while($row = mysqli_fetch_assoc($result)) {
                                    $to_new_bal=$row['balance'];
                       
                        break;
                 
                            }
} else {
   // echo "0 results";
}
echo "from accnt no has new balance as <br>";
echo $from_new_bal;
echo "<br>to current has new balance is <br>";
echo $to_new_bal;
 
         }
         
        ?>
        <br>
        hello welcome <?php        echo  $_SESSION["username"] ?>;
        
        <h5>CHECK BALANCE</h5>
        <form action="transfer.php" method="POST" style="border: 2px solid black ;width: 250px">
            <legend>
                 <input type="submit" name="balance" value="balance">
            </legend>
            
        </form>
        <h5>TO TRANSFER</h5>
        <form action="transfer.php" method="POST" style="border: 2px solid black ;width: 250px">
            <legend>
                From accnt no <input type="number" name="tacntno">
                <br>
                To transfer no <input type="number" name="facntno">
                <br>
                money
                <br><input type="number" name="tamount">
                <br>
                 <input type="submit" name="transfer" value="transfer">
            </legend>
            
        </form>
        
        <br>
        <br>
        <h5>TO LOGOUT</h5> 
        <form action="transfer.php" method="POST" style="border: 2px solid black ;width: 250px">
            <legend>
                 <input type="submit" name="logout" value="logout">
            </legend>
            
        </form>
    </body>
</html>

