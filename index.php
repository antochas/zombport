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
         session_start();
         
         if(!isset($_SESSION['username'])){
             echo '<form action="Login.php" method="Post">
            <input type="text" required="" placeholder="Username" name="usrnm">
            <input type="password" required="" placeholder="Password" name="psswrd">
            <input type="submit" value="Login">
        </form>';
         }
         else{
             echo $_SESSION["username"].'<form action="Logout.php" method="POST"><input type="submit" value="Logout"></form>';
         }
        ?>
        
        
        <table>
            <tr>
                <td>  Newest  </td>
            </tr>
            <tr>
                <td>new game1</td>
                <td>new game2</td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>  Best  </td>
            </tr>
            <tr>
                <td>best game1</td>
                <td>best game2</td>
            </tr>
        </table>
        
        <table>
            <tr>
                <td>  featured  </td>
            </tr>
            <tr>
                <td>featured game1</td>
                <td>featured game2</td>
            </tr>
        </table>
        <?php
         if(isset($_SESSION["user"])){
             
         }
         else{
             
         }
        ?>
    </body>
</html>
