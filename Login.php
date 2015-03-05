<?php
        $namegiven = filter_input(\INPUT_POST, "usrnm");
        $passgiven = filter_input(\INPUT_POST, "psswrd");
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';
        $db = 'gameportal';
        $conn = mysql_connect($dbhost, $dbuser, $dbpass, $db);
        if(! $conn )
        {
          die('Could not connect: ' . mysql_error());
        }
        $sql = 'SELECT id, username, password FROM users WHERE username = \''.$namegiven.'\'';

        mysql_select_db($db);
        $retval = mysql_query( $sql, $conn );
        if(! $retval )
        {
          die('Could not get data: ' . mysql_error());
        }
        $row = mysql_fetch_array($retval, MYSQL_ASSOC);
        mysql_close($conn);
        
        if(empty($row)){
            echo 'User not exist';
        }else if ($row["password"] == $passgiven){
            session_start();
            $_SESSION["username"] = $namegiven;
            $_SESSION["password"] = $passgiven;
            $_SESSION["id"] = $row["id"];
            header("Location: index.php");
            
        }
        else{
            echo 'Wrong password';
        }

