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
    <style>
        h1{
            padding: 1em;
            text-align: center;
            font-family: "san-serif";
            color:grey;
        }
        table{
            border: 1px solid grey;
        }
        td{
            padding: 1em;
            border-bottom: 1px solid grey;
        }
    </style>
    <body>
        <h1>Summarry</h1>
        <?php
        // put your code here
        session_start();
        echo $_SESSION['first-name']; 
        echo "<br/>";
        echo    $_SESSION['last-name'];
        echo "<br/>";
        echo    $_SESSION['street-address']; 
        echo "<br/>";
        echo    $_SESSION['addres-line-2'] ;
        echo "<br/>";
        echo    $_SESSION['city'] ;
        
        echo "<br/>";
        echo    $_SESSION['state'] ;
        echo "<br/>";
        echo    $_SESSION['zipcode']; 
        
        echo "<br/>";
        echo      $_SESSION['phone-no']; 
        
        echo "<br/>";
        echo    $_SESSION['email'] ;
       echo "<br/>";
       echo     $_SESSION['payment']; 
          echo      $_SESSION['shirt'];
         echo       $_SESSION['clothing']; 
        echo        $_SESSION['quan'] ;
        echo        $_SESSION['size'];
        echo        $_SESSION['color'];
       
        ?>
        <table>
            <thead>
                <tr>
                     <td>shirt</td>
                    <td>clothing</td>
                    <td>quantity</td>
                    <td>size</td>
                    <td>color</td>
                </tr>
           
            </thead>
            <tbody>
                <tr>
                     <td><?php  echo      $_SESSION['shirt']; ?></td>
                    <td><?php  echo      $_SESSION['clothing']; ?></td>
                    <td><?php  echo      $_SESSION['quan']; ?></td>
                    <td><?php  echo      $_SESSION['size']; ?></td>
                     <td><?php  echo      $_SESSION['color']; ?></td>
                </tr>

       
            </tbody>
        </table>
    </body>
</html>

