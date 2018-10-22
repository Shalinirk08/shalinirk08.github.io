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
        <h1>Enter shipping address</h1>
        <form action="address-info-store.php" method="post">
            <input name="first-name" placeholder="first-name" type="text" />
            <input name="last-name" placeholder="last-name" type="text" />
            <textarea name="street-address"></textarea>
            <textarea name="addres-line-2"></textarea>
            <input name="city" placeholder="city" type="text" />
            <input name="state" placeholder="state" type="text" />
            <input type="number" placeholder="ZIPCODE" name="zipcode" />
            <input type="tel" placeholder="phone" name="phone-no" />
            <input type="email" placeholder="email" name="email"/>
            <input type="radio" name="payment" value="standard"><span>Standard</span>
            <input type="radio" name="payment" value="express"><span>Express</span>
            <button type="submit" name="address-btn">Next</button>
        </form>
    </body>
</html>

