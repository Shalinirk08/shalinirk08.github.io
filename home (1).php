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
        body{
            font-family: monospace;
        }
        .img-holder{
            width: 45%;
            float: left;
            margin: 0 2em;
            height: 20em;
            position: relative;
        }
        .img-holder img{
            width: 100%;
            height: 100%;
            
            
        }
        .chk-shirt{
            height: 3em;
            width: 3em;
            position: absolute;
            top: 85%;
            left: 0;
            background: white;
            margin:auto;
        }
        .chk-shirt img,.i{
            position: relative;
            height: 100%;
            width: 100%;
            margin: auto;
        }
        .img-holder h3{
                position: absolute;
    top: 0;
    padding: 1em;
    background: white;
    color: cadetblue;
        }
        header div:first-child{
            width: 100%;
        }
        .nxt-btn button{
                width: 60em;
                margin: auto;
                position: relative;
                padding: 1em;
                background: white;
                border: 0;
                box-shadow: 0px 1px 8px 3px rgba(0,0,0,.2);
                border-radius: 4px;
        }
        .sb{
                width: 40%;
    border: 2px solid #c5c3c3;
    border-radius: 4px;
    padding: .5em;
        }
    </style>
    <body>
        
        <header>
            <div >
             <h1>Shopping cart</h1>
            </div>
        </header>
        <div style="margin:auto;width: 90%;">
            <div>
                <p>Select shirt</p>
                <div>
                    <form action="product-info-store.php" method="post">
                    <div class="img-holder">  
                        <img src="shirt.png" alt=""/>
                             <h3>T-shirt <spam>: 500/-</spam></h3>
                             <div class="chk-shirt">
                                 <input  type="radio" name="shirt"  value="shirt1"/>
                             </div>
                             
                    </div>
                    <div class="img-holder">  
                        <img src="shirt1.png" alt=""/>
                              <h3>Hoodie <spam>: 900/-</spam></h3>
                              <div class="chk-shirt">
                                  <input  type="radio" name="shirt" value="shirt2"/>
                             </div>
                    </div>
                </div>
            </div>
            <div style="margin:2em 0">
                <h4>Clothing options <span style="color:red;"> * </span></h4>
                <br/>
                <input type="radio" value="Men" name='clothing' /> Men's Clothing  
                <br/>
                <input type="radio" value="Women" name='clothing' /> Women's Clothing   
                <br/>
                <input type="radio" value="Children" name='clothing' /> Children's Clothing   
            </div>
            <div style="margin:2em 0">
                <table>
                    <thead>
                        <tr>
                            <td><p>Quantity <span style="color:red;"> * </span></p></td>
                            <td><p>Size <span style="color:red;"> * </span></p></td>
                            <td><p>Color <span style="color:red;"> * </span></p></td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input class="sb" type="number" name='quan' />
                            </td>
                            <td>
                                <select class="sb" name='size'>
                                    <option value="XXL">XXL</option>
                                    <option value="XL">XL</option>
                                    <option value="L">L</option>
                                </select>
                            </td>
                            <td><p>Color <span style="color:red;"> * </span></p></td>
                            <td>
                                <select class="sb" name='color'>
                                    <option value="red">red</option>
                                    <option value="green">green</option>
                                    <option value="blue">blue</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table> 
                  <center class="nxt-btn">
                <button name='probtn'>Next</button>
            </center>
            </form>
            </div>
          
        </div>
    </body>
</html>
