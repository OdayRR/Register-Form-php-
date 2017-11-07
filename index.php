<?php

$Username=$_POST['username'];
$First=$_POST['first'];
$Last=$_POST['last'];
$Password=$_POST['password'];
$Email=$_POST['email'];

$all=array($Username,$First,$Last,$Password,$Email);

$file = 'register.txt';

if (isset($_POST['submit'])){
      
    if(file_exists($file))
              {
     

                echo "File information updated ";
            
                file_put_contents($file , $all , FILE_APPEND );


}else {

                echo "is not here";

                file_put_contents($file , $Username ,"  ",$First,"  ",$Last,"  ",$Password,"  ",$Email );

}
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Register Form </title>
        
        <style>
            
            body{
                background:#CCC 
                 
            }   
            fieldset{
                
                background: #FFF;
                border :1px solid #CCC;
                padding: 10px;
                margin-bottom: 20px;
            
            }
            legend{
                background: #FFF;
                border :1px solid #CCC;
                padding: 5px;
            }
            
            
            label{margin-bottom: 10px}
            
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
        <form name="register" action="index.php" method="post">
            <fieldset>
                <legend> Personal Information </legend>
                
                <label> Username </label>
                <input type="text" placeholder="Type your username" name="username" required>
                
                <label> First Name </label>
                <input type="text" placeholder="Type your First name" name="first" required>
                
                <label> Last Name </label>
                <input type="text" placeholder="Type your Last name" name="last" required>
                
                <label> Password </label>
                <input type="password" placeholder="Fill in your password" name="password" required>
                
                <label> Email </label>
                <input type="text" placeholder="Type your Email adress" name="email" required>
            
            </fieldset>
            <fieldset>    
                <legend>Finish registration</legend>
                    
                    <input type="submit" name="submit" value="Rigester">
            </fieldset>
        </form>
     </center>
    </body>
</html>
