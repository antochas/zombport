<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
 <?php
    require_once 'SigninForm.php';
    $rusername = \filter_input(INPUT_POST, 'rusrnm');
    $rpass1 = \filter_input(INPUT_POST, 'rpsswrd1');
    $rpass2 = \filter_input(INPUT_POST, 'rpsswrd2');
    $remail = \filter_input(INPUT_POST, 'remail');
    $rcountry = \filter_input(INPUT_POST, 'rcntr');
    $rage = \filter_input(INPUT_POST, 'rage');
    
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $db = 'gameportal';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass, $db);
    if(! $conn )
    {
      die('Could not connect: ' . mysql_error());
    }
    $sql = 'SELECT id FROM users WHERE username = \''.$rusername.'\'';

    mysql_select_db($db);
    $retval = mysql_query( $sql, $conn );
    if(! $retval )
    {
      die('Could not get data: ' . mysql_error());
    }
    $row = mysql_fetch_array($retval, MYSQL_ASSOC);
    mysql_close($conn);
    
    if(empty($row)){
        
    }
    else{
        
        echo 'Username exist.';
        
        
    }
        
            

