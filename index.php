<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
  <?php
    $Username = $_POST['Username'];
    $First = $_POST['First'];
    $Last = $_POST['Last'];
    $Password = $_POST['Password'];
    $Email = $_POST['Email'];

    $Information = array($Username, $First, $Last, $Password, $Email);
    $dir = "Folder_For"."_".$Username;
    
    $file = $Username.'_'.'register.txt';

    if (isset($_POST['submitted'])) {

        if( is_dir($dir) === false )
{
    mkdir($dir);
}

        $file1 = fopen($dir . '/' . $file,"w+");

        foreach($Information as $val){
            
            
            fwrite($file1, $val. PHP_EOL );      // .PHP_EOL produces \r\n or \n
            
            
        }
        
            fclose($file1);
            clearstatcache();
            
        include $dir . '/' . $file;
        
    } 
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Register Form </title>

        <style>

            body{
                background:#b5ad65

            }   
            fieldset{

                background-image: url("giphy.gif");  
                border :1px solid #CCC;
                padding: 10px;
                margin-bottom: 20px;

            }
            legend{
                background: #FFF;
                border :1px solid #CCC;
                padding: 5px;
            }


            label{
                margin-bottom: 10px
                
            
            
            }

            input[type="text"],[type="password"]{
                margin-bottom: 10px;
                padding: 8px;
                width: 300px;
                display:block
            }



        </style>

    </head>
    <body>
    <center>
        <form name="register" action=index.php method="post" autocomplete="off">
                
            <fieldset>
                
                    <legend> Personal Information </legend>

                    <label><font color="white"> Username </font></label>
                    <input type="text" placeholder="Type your username" name="Username" required>

                    <label><font color="white"> First Name </font></label>
                    <input type="text" placeholder="Type your First name" name="First" required>

                    <label><font color="white"> Last Name </font></label>
                    <input type="text" placeholder="Type your Last name" name="Last" required>

                    <label><font color="white"> Password </font></label>
                    <input type="password" placeholder="Fill in your password" name="Password" required>

                    <label><font color="white"> Email </font></label>
                    <input type="text" placeholder="Type your Email adress" name= "Email" required>
                     
                    <input type="hidden" name="submitted" value="1">
                    <input type="submit" name="submit" value="Rigester">
                    
                </fieldset>
                
            </form>
    </center>
</body>
</html>
